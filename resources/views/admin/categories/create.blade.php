@extends('layouts.admin')
@section('content')
<main class="flex-1 p-10">
    <div class="max-w-2xl bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100">
        <h1 class="text-2xl font-black mb-6">Tambah Kategori</h1>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-slate-700 font-bold mb-2">Nama Kategori</label>
                <input type="text" name="name" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none" required>
                @error('name') <p class="text-rose-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-xl font-bold shadow-lg">Simpan Kategori</button>
        </form>
    </div>
</main>
@endsection