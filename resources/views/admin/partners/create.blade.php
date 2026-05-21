@extends('layouts.admin')

@section('content')
<main class="flex-1 p-10">
    <div class="max-w-2xl bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100">
        <div class="mb-8">
            <h1 class="text-2xl font-black">Tambah Partner Baru</h1>
            <p class="text-slate-500">Pastikan logo berformat PNG atau JPG.</p>
        </div>

        <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <div>
                    <label class="block text-slate-700 font-bold mb-2">Nama Partner</label>
                    <input type="text" name="name" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Contoh: PT. Maju Jaya" required>
                </div>

                <div>
                    <label class="block text-slate-700 font-bold mb-2">Logo Partner</label>
                    <input type="file" name="logo" class="w-full px-5 py-3 rounded-xl border border-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" required>
                </div>

                <div>
                    <label class="block text-slate-700 font-bold mb-2">Link Website (Optional)</label>
                    <input type="url" name="link" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="https://example.com">
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="submit" class="flex-1 py-4 bg-indigo-600 text-white rounded-xl font-bold shadow-lg hover:bg-indigo-700 transition">Simpan Partner</button>
                    <a href="{{ route('admin.partners.index') }}" class="py-4 px-8 bg-slate-100 text-slate-600 rounded-xl font-bold text-center">Batal</a>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection