@extends('layouts.admin')

@section('content')
<main class="flex-1 p-10">
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Kelola Kategori</h1>
            <p class="text-slate-500 font-medium">Buat dan atur kategori acara Anda di sini.</p>
        </div>
        <a href="{{ route('admin.categories.create') }}"
            class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
            + Tambah Kategori Baru
        </a>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <form action="{{ route('admin.categories.index') }}" method="GET" class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kategori..."
                class="flex-1 px-5 py-3 rounded-xl border-slate-200 border focus:ring-2 focus:ring-indigo-500 outline-none transition">
            <button type="submit" class="px-6 py-3 bg-slate-800 text-white rounded-xl font-bold">Cari</button>
        </form>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50 text-slate-400 text-[10px] font-black tracking-widest uppercase">
                    <tr>
                        <th class="px-8 py-4">No</th>
                        <th class="px-8 py-4">Nama Kategori</th>
                        <th class="px-8 py-4">Slug (URL)</th>
                        <th class="px-8 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse ($categories as $index => $category)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-8 py-6 text-slate-400">{{ $categories->firstItem() + $index }}</td>
                        <td class="px-8 py-6 font-black text-slate-800">{{ $category->name }}</td>
                        <td class="px-8 py-6 text-slate-500 text-sm">{{ $category->slug }}</td>
                        <td class="px-8 py-6">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">Edit</a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                                    @csrf @method('DELETE')
                                    <button class="p-2 bg-rose-50 text-rose-600 rounded-lg">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="p-8 text-center text-slate-500">Data tidak ditemukan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-4">{{ $categories->links() }}</div>
    </div>
</main>
@endsection