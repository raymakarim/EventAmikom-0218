<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert 3 Kategori (Sesuai Tugas)
        $catIT = Category::create(['name' => 'Workshop IT', 'slug' => 'workshop-it']);
        $catSport = Category::create(['name' => 'E-Sport', 'slug' => 'e-sport']);
        $catDesign = Category::create(['name' => 'Creative Design', 'slug' => 'creative-design']);

        // 3. Insert 6 Sampel Events (Sesuai Tugas)
        
        // Event Kategori IT
        Event::create([
            'category_id' => $catIT->id,
            'title' => 'AI & Future Tech Summit 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'Web Dev Bootcamp',
            'description' => 'Belajar Laravel dari nol sampai mahir.',
            'date' => '2026-06-10 09:00:00',
            'location' => 'Lab ICT',
            'price' => 75000,
            'stock' => 50,
            'poster_path' => 'posters/event-2.png',
        ]);

        // Event Kategori E-Sport
        Event::create([
            'category_id' => $catSport->id,
            'title' => 'E-Sport U-Champ',
            'description' => 'Turnamen Mobile Legends antar Fakultas.',
            'date' => '2026-07-15 10:00:00',
            'location' => 'Basement Gedung 4',
            'price' => 25000,
            'stock' => 200,
            'poster_path' => 'posters/event-3.png',
        ]);

        Event::create([
            'category_id' => $catSport->id,
            'title' => 'Valorant Amikom Cup',
            'description' => 'Tunjukkan kemampuan aim terbaikmu.',
            'date' => '2026-07-20 13:00:00',
            'location' => 'Online',
            'price' => 0,
            'stock' => 64,
            'poster_path' => 'posters/event-4.png',
        ]);

        // Event Kategori Design
        Event::create([
            'category_id' => $catDesign->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Membangun portofolio desain yang menjual.',
            'date' => '2026-08-05 13:00:00',
            'location' => 'Ruang Citra',
            'price' => 100000,
            'stock' => 30,
            'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $catDesign->id,
            'title' => 'Logo Design Workshop',
            'description' => 'Seni membuat identitas visual yang kuat.',
            'date' => '2026-08-12 15:00:00',
            'location' => 'Aula Unit 5',
            'price' => 45000,
            'stock' => 40,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}