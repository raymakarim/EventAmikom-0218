<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner; // Untuk Soal No. 2 & 4
use App\Models\Event;   // Tambahkan ini agar bisa nampilin daftar event

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil semua data partner dari database
        $partners = Partner::all();

        // 2. Ambil data event terbaru beserta kategorinya (Soal 1)
        // Kita gunakan with('category') agar nama kategorinya muncul di card
        $events = Event::with('category')->latest()->get();

        // 3. Kirim kedua data tersebut ke view 'welcome'
        return view('welcome', compact('partners', 'events'));
    }
}