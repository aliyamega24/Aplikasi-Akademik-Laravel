<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-blue-600 font-semibold tracking-wide uppercase">
                    Academic Management System
                </p>
                <h2 class="font-bold text-2xl text-slate-800 leading-tight mt-1">
                    Dashboard Akademik
                </h2>
            </div>
            <div class="hidden sm:block text-sm text-slate-500">
                Panel {{ ucfirst(Auth::user()->role) }}
            </div>
        </div>
    </x-slot>

    <div class="py-10 bg-slate-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- WELCOME SECTION --}}
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-slate-900 via-blue-900 to-blue-700 p-8 shadow-lg">
                <div class="relative z-10">
                    <p class="text-blue-200 text-sm font-medium">
                        SELAMAT DATANG DI SISTEM AKADEMIK
                    </p>

                    <h3 class="text-3xl font-bold text-white mt-3">
                        Halo, {{ Auth::user()->name }}!
                    </h3>

                    <p class="text-blue-100 mt-2">
                        Selamat beraktivitas. Kelola kebutuhan akademikmu melalui dashboard ini.
                    </p>

                    <div class="inline-flex items-center gap-2 mt-5 px-4 py-2 rounded-full bg-white/15 text-white text-sm">
                        <span class="w-2 h-2 rounded-full bg-green-400"></span>
                        Role: {{ strtoupper(Auth::user()->role) }}
                    </div>
                </div>

                <div class="absolute -right-10 -top-16 w-64 h-64 rounded-full bg-white/10"></div>
                <div class="absolute right-24 -bottom-28 w-64 h-64 rounded-full bg-white/10"></div>
            </div>

            {{-- MENU SECTION --}}
            <div class="mt-10">
                <div class="mb-5">
                    <h3 class="text-xl font-bold text-slate-800">
                        Menu Akademik
                    </h3>
                    <p class="text-sm text-slate-500 mt-1">
                        Pilih menu untuk melanjutkan aktivitas.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- ADMIN --}}
                    @if(Auth::user()->role == 'admin')

                        <a href="{{ route('admin.users') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-blue-100 text-blue-700 text-2xl">
                                ♙
                            </div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">
                                Manajemen Pengguna
                            </h3>
                            <p class="text-slate-500 mt-2 text-sm">
                                Mengelola data pengguna sistem akademik.
                            </p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">
                                Buka menu →
                            </p>
                        </a>

                        <a href="{{ route('materi.manage') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-indigo-100 text-indigo-700 text-2xl">
                                ▤
                            </div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">
                                Kelola Materi
                            </h3>
                            <p class="text-slate-500 mt-2 text-sm">
                                Mengelola materi pembelajaran.
                            </p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">
                                Buka menu →
                            </p>
                        </a>

                        <a href="{{ route('nilai.manage') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-purple-100 text-purple-700 text-2xl">
                                ▥
                            </div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">
                                Kelola Nilai
                            </h3>
                            <p class="text-slate-500 mt-2 text-sm">
                                Mengelola nilai akademik mahasiswa.
                            </p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">
                                Buka menu →
                            </p>
                        </a>

                        <a href="{{ route('materi.index') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-cyan-100 text-cyan-700 text-2xl">
                                ▣
                            </div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">
                                Lihat Materi
                            </h3>
                            <p class="text-slate-500 mt-2 text-sm">
                                Melihat daftar materi pembelajaran.
                            </p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">
                                Buka menu →
                            </p>
                        </a>

                        <a href="{{ route('nilai.saya') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-amber-100 text-amber-700 text-2xl">
                                ★
                            </div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">
                                Nilai Pribadi
                            </h3>
                            <p class="text-slate-500 mt-2 text-sm">
                                Melihat informasi nilai akademik.
                            </p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">
                                Buka menu →
                            </p>
                        </a>

                    {{-- DOSEN --}}
                    @elseif(Auth::user()->role == 'dosen')

                        <a href="{{ route('materi.manage') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-indigo-100 text-indigo-700 text-2xl">▤</div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">Kelola Materi</h3>
                            <p class="text-slate-500 mt-2 text-sm">Mengelola materi pembelajaran.</p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">Buka menu →</p>
                        </a>

                        <a href="{{ route('nilai.manage') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-purple-100 text-purple-700 text-2xl">▥</div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">Kelola Nilai</h3>
                            <p class="text-slate-500 mt-2 text-sm">Mengelola nilai mahasiswa.</p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">Buka menu →</p>
                        </a>

                        <a href="{{ route('materi.index') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-cyan-100 text-cyan-700 text-2xl">▣</div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">Lihat Materi</h3>
                            <p class="text-slate-500 mt-2 text-sm">Melihat daftar materi pembelajaran.</p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">Buka menu →</p>
                        </a>

                    {{-- MAHASISWA --}}
                    @elseif(Auth::user()->role == 'mahasiswa')

                        <a href="{{ route('materi.index') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-cyan-100 text-cyan-700 text-2xl">▣</div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">Lihat Materi</h3>
                            <p class="text-slate-500 mt-2 text-sm">Melihat materi pembelajaran.</p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">Buka menu →</p>
                        </a>

                        <a href="{{ route('nilai.saya') }}"
                           class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-blue-300 transition duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-amber-100 text-amber-700 text-2xl">★</div>
                            <h3 class="font-bold text-lg text-slate-800 mt-5 group-hover:text-blue-700">Nilai Pribadi</h3>
                            <p class="text-slate-500 mt-2 text-sm">Melihat nilai akademik pribadi.</p>
                            <p class="text-blue-700 text-sm font-semibold mt-5">Buka menu →</p>
                        </a>

                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
