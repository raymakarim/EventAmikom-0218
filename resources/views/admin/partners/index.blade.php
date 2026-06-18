@extends('layouts.admin')

@section('content')
<main class="flex-1 p-10">
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Kelola Partner</h1>
            <p class="text-slate-500 font-medium">Manajemen partner dan sponsor acara Anda.</p>
        </div>
        <a href="{{ route('admin.partners.create') }}"
            class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
            + Tambah Partner Baru
        </a>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <form action="{{ route('admin.partners.index') }}" method="GET" class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama partner..."
                class="flex-1 px-5 py-3 rounded-xl border-slate-200 border focus:ring-2 focus:ring-indigo-500 outline-none transition">
            <button type="submit" class="px-6 py-3 bg-slate-800 text-white rounded-xl font-bold">Cari</button>
        </form>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50 text-slate-400 text-[10px] font-black tracking-widest uppercase">
                    <tr>
                        <th class="px-8 py-4">Logo</th>
                        <th class="px-8 py-4">Nama Partner</th>
                        <th class="px-8 py-4">Link Website</th>
                        <th class="px-8 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse ($partners as $partner)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-8 py-6">
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="Logo" class="w-16 h-16 object-contain rounded-lg border bg-white">
                        </td>
                        <td class="px-8 py-6 font-black text-slate-800">{{ $partner->name }}</td>
                        <td class="px-8 py-6 text-indigo-600 text-sm">
                            <a href="{{ $partner->link }}" target="_blank">{{ $partner->link ?? '-' }}</a>
                        </td>
                        <td class="px-8 py-6">
                            <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Hapus partner ini?')">
                                @csrf @method('DELETE')
                                <button class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="p-8 text-center text-slate-500">Belum ada partner.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection