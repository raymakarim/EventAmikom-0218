<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Penting untuk membuat slug otomatis

class CategoryController extends Controller
{
    // READ & SEARCH (Soal 1 & 3)
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Mengambil data kategori dengan fitur pencarian LIKE
        $categories = Category::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->latest()->paginate(10); // Menampilkan 10 data per halaman

        return view('admin.categories.index', compact('categories'));
    }

    // CREATE (Tampilan Form)
    public function create()
    {
        return view('admin.categories.create');
    }

    // STORE (Proses simpan data ke DB)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name|max:255',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name), // Mengubah "Workshop IT" jadi "workshop-it"
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    // EDIT (Tampilan Form Edit)
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    // UPDATE (Proses ubah data di DB)
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    // DELETE (Hapus data)
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}