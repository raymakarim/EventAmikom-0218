<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan & FAQ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen p-8 flex flex-col items-center">

    <nav class="flex flex-wrap justify-center gap-4 mb-10 w-full max-w-3xl">
        <a href="/" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Home</a>
        <a href="/profil" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Profil</a>
        <a href="/katalog" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Katalog</a>
        <a href="/bantuan" class="bg-indigo-800 text-white font-semibold py-2 px-5 rounded-lg hover:shadow-md transition duration-300">Bantuan</a>
        <a href="/kontak" class="bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg hover:bg-indigo-700 hover:shadow-md transition duration-300">Kontak</a>
    </nav>

    <div class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 max-w-2xl w-full">
        <h1 class="text-2xl font-bold text-slate-800 mb-6 text-center border-b pb-4">Pertanyaan yang Sering Diajukan (FAQ)</h1>
        
        <div class="space-y-6">
            <div class="border-l-4 border-indigo-500 pl-4 bg-slate-50 py-2 pr-2 rounded-r-lg">
                <h3 class="font-bold text-slate-800">1. Bagaimana cara mendaftar ke sebuah event?</h3>
                <p class="text-slate-600 text-sm mt-1">Anda dapat pergi ke halaman <a href="/katalog" class="text-indigo-600 hover:underline">Katalog</a>, pilih event yang Anda minati, lalu klik tombol "Daftar".</p>
            </div>
            
            <div class="border-l-4 border-indigo-500 pl-4 bg-slate-50 py-2 pr-2 rounded-r-lg">
                <h3 class="font-bold text-slate-800">2. Apakah event di AmikomEventHub gratis?</h3>
                <p class="text-slate-600 text-sm mt-1">Sebagian besar event bersifat gratis untuk mahasiswa aktif, namun ada beberapa workshop khusus yang membutuhkan biaya administrasi.</p>
            </div>

            <div class="border-l-4 border-indigo-500 pl-4 bg-slate-50 py-2 pr-2 rounded-r-lg">
                <h3 class="font-bold text-slate-800">3. Siapa yang bisa saya hubungi jika ada masalah?</h3>
                <p class="text-slate-600 text-sm mt-1">Silakan kunjungi halaman <a href="/kontak" class="text-indigo-600 hover:underline">Kontak</a> untuk mengirimkan pesan ke tim dukungan kami.</p>
            </div>
        </div>
    </div>

</body>
</html>