<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen p-8 flex flex-col items-center">

    <nav class="flex flex-wrap justify-center gap-4 mb-10 w-full max-w-3xl">
        <a href="/" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Home</a>
        <a href="/profil" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Profil</a>
        <a href="/katalog" class="bg-indigo-800 text-white font-semibold py-2 px-5 rounded-lg hover:shadow-md transition duration-300">Katalog</a>
        <a href="/bantuan" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Bantuan</a>
        <a href="/kontak" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Kontak</a>
    </nav>

    <div class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 max-w-3xl w-full">
        <h1 class="text-2xl font-bold text-slate-800 mb-6 text-center border-b pb-4">Katalog AmikomEventHub</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-slate-50 p-5 rounded-xl border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition duration-300 cursor-pointer">
                <span class="text-xs font-bold bg-indigo-100 text-indigo-700 px-2 py-1 rounded mb-3 inline-block">Workshop</span>
                <h2 class="text-lg font-bold text-slate-800 mb-1">Mastering Laravel 10</h2>
                <p class="text-sm text-slate-500 mb-3 flex items-center">📅 20 Mei 2026 | 📍 Ruang Citra</p>
                <p class="text-slate-600 text-sm">Pelajari cara membangun aplikasi modern menggunakan framework Laravel terbaru.</p>
            </div>

            <div class="bg-slate-50 p-5 rounded-xl border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition duration-300 cursor-pointer">
                <span class="text-xs font-bold bg-emerald-100 text-emerald-700 px-2 py-1 rounded mb-3 inline-block">Seminar</span>
                <h2 class="text-lg font-bold text-slate-800 mb-1">Tren AI di Industri IT</h2>
                <p class="text-sm text-slate-500 mb-3 flex items-center">📅 25 Mei 2026 | 📍 Cinema Amikom</p>
                <p class="text-slate-600 text-sm">Membahas perkembangan Artificial Intelligence dan dampaknya bagi programmer.</p>
            </div>
        </div>
    </div>

</body>
</html>