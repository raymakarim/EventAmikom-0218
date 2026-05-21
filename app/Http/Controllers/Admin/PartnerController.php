<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Penting untuk menghapus file lama

class PartnerController extends Controller
{
    /**
     * Menampilkan daftar partner (Soal 2) 
     * dengan fitur pencarian (Soal 3)
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Mengambil data partner dengan filter pencarian jika ada
        $partners = Partner::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->latest()->get();

        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Menampilkan form tambah partner
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Menyimpan partner baru ke database (Soal 2 - Upload Logo)
     */
    public function store(Request $request)
    {
        // Validasi input: Logo wajib gambar dan maksimal 2MB
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'link' => 'nullable|url'
        ]);

        // Proses upload file logo ke folder storage/app/public/partners
        $logoPath = $request->file('logo')->store('partners', 'public');

        Partner::create([
            'name' => $request->name,
            'logo' => $logoPath,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil ditambahkan!');
    }

    /**
     * Menghapus partner (Soal 2)
     */
    public function destroy(Partner $partner)
    {
        // Hapus file logo dari storage agar tidak memenuhi server
        if ($partner->logo) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil dihapus!');
    }
}