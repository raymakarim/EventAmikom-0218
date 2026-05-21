@extends('layouts.admin')

@section('content')
<main class="flex-1 p-10">
    <div class="max-w-2xl bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100">
        <div class="mb-8">
            <h1 class="text-2xl font-black">Edit Kategori</h1>
            <p class="text-slate-500">Ubah nama kategori acara Anda.</p>
        </div>

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- PENTING: Untuk proses update wajib pakai method PUT --}}
            
            <div class="space-y-6">
                <div>
                    <label class="block text-slate-700 font-bold mb-2">Nama Kategori</label>
                    <input type="text" name="name" 
                           value="{{ old('name', $category->name) }}" 
                           class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none" 
                           required>
                    @error('name')
                        <p class="text-rose-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="submit" class="flex-1 py-4 bg-indigo-600 text-white rounded-xl font-bold shadow-lg hover:bg-indigo-700 transition">
                        Simpan Perubahan
                    </button>
                    <a href="{{ route('admin.categories.index') }}" class="py-4 px-8 bg-slate-100 text-slate-600 rounded-xl font-bold text-center">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection