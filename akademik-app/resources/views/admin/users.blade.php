<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-sm text-blue-600 font-semibold uppercase tracking-wide">
                Academic Management System
            </p>
            <h2 class="font-bold text-2xl text-slate-800 mt-1">
                Manajemen Pengguna
            </h2>
        </div>
    </x-slot>

    <div class="py-10 bg-slate-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- INTRODUCTION --}}
            <div class="bg-gradient-to-r from-slate-900 to-blue-700 rounded-2xl p-8 shadow-lg">
                <p class="text-blue-200 text-sm font-semibold uppercase">
                    Administrasi Sistem
                </p>
                <h3 class="text-3xl font-bold text-white mt-3">
                    Manajemen Pengguna
                </h3>
                <p class="text-blue-100 mt-2">
                    Informasi akun pengguna dan peran dalam sistem akademik.
                </p>
                <div class="inline-flex mt-5 px-4 py-2 rounded-full bg-white/15 text-white text-sm">
                    Akses: Admin
                </div>
            </div>

            {{-- USER TABLE --}}
            <div class="mt-8 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="p-6 border-b border-slate-200">
                    <h3 class="text-lg font-bold text-slate-800">
                        Daftar Pengguna
                    </h3>
                    <p class="text-sm text-slate-500 mt-1">
                        Informasi pengguna yang terdaftar pada sistem.
                    </p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">No</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Nama Pengguna</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Email</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Role</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-blue-50/50 transition">
                                <td class="px-6 py-5">01</td>
                                <td class="px-6 py-5 font-semibold text-slate-800">Admin</td>
                                <td class="px-6 py-5 text-sm text-slate-600">admin@mail.com</td>
                                <td class="px-6 py-5">
                                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold">Admin</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-blue-50/50 transition">
                                <td class="px-6 py-5">02</td>
                                <td class="px-6 py-5 font-semibold text-slate-800">Dosen</td>
                                <td class="px-6 py-5 text-sm text-slate-600">dosen@mail.com</td>
                                <td class="px-6 py-5">
                                    <span class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-xs font-semibold">Dosen</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-blue-50/50 transition">
                                <td class="px-6 py-5">03</td>
                                <td class="px-6 py-5 font-semibold text-slate-800">Mahasiswa</td>
                                <td class="px-6 py-5 text-sm text-slate-600">mahasiswa@mail.com</td>
                                <td class="px-6 py-5">
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Mahasiswa</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-4 bg-slate-50 border-t border-slate-200">
                    <p class="text-sm text-slate-500">
                        Contoh tampilan data pengguna.
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
