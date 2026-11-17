<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-sm text-blue-600 font-semibold uppercase tracking-wide">
                Academic Management System
            </p>
            <h2 class="font-bold text-2xl text-slate-800 mt-1">
                Kelola Materi
            </h2>
        </div>
    </x-slot>

    <div class="py-10 bg-slate-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- INTRODUCTION --}}
            <div class="bg-gradient-to-r from-slate-900 to-blue-700 rounded-2xl p-8 shadow-lg">
                <p class="text-blue-200 text-sm font-semibold uppercase">
                    Manajemen Akademik
                </p>
                <h3 class="text-3xl font-bold text-white mt-3">
                    Manajemen Materi Pembelajaran
                </h3>
                <p class="text-blue-100 mt-2">
                    Kelola dan pantau daftar materi pembelajaran yang tersedia
                    dalam sistem akademik.
                </p>
                <div class="inline-flex mt-5 px-4 py-2 rounded-full bg-white/15 text-white text-sm">
                    Akses: {{ ucfirst(Auth::user()->role) }}
                </div>
            </div>

            {{-- MATERIAL LIST --}}
            <div class="mt-8 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="p-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 border-b border-slate-200">
                    <div>
                        <h3 class="text-lg font-bold text-slate-800">
                            Daftar Materi
                        </h3>
                        <p class="text-sm text-slate-500 mt-1">
                            Informasi materi pembelajaran yang tersedia.
                        </p>
                    </div>

                    <button type="button"
                        class="bg-blue-700 hover:bg-blue-800 text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-sm transition">
                        + Tambah Materi
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">No</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Nama Materi</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Deskripsi</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-blue-50/50 transition">
                                <td class="px-6 py-5">
                                    <span class="w-9 h-9 inline-flex items-center justify-center rounded-lg bg-blue-100 text-blue-700 font-bold">
                                        01
                                    </span>
                                </td>
                                <td class="px-6 py-5 font-semibold text-slate-800">
                                    Pengantar Sistem Informasi
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-600">
                                    Materi dasar sistem informasi.
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-400">
                                    -
                                </td>
                            </tr>

                            <tr class="hover:bg-blue-50/50 transition">
                                <td class="px-6 py-5">
                                    <span class="w-9 h-9 inline-flex items-center justify-center rounded-lg bg-blue-100 text-blue-700 font-bold">
                                        02
                                    </span>
                                </td>
                                <td class="px-6 py-5 font-semibold text-slate-800">
                                    Basis Data
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-600">
                                    Materi dasar basis data.
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-400">
                                    -
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-4 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-500">
                        Total: 2 materi pembelajaran
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
