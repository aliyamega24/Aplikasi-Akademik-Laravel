<x-guest-layout>
    {{-- HEADER --}}
    <div class="mb-6 text-center">
        <div class="mx-auto w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center">
            <span class="text-3xl font-bold text-blue-700">E</span>
        </div>

        <h1 class="mt-5 text-2xl font-bold text-slate-800">
            Buat Akun Akademik
        </h1>

        <p class="mt-2 text-sm text-slate-500">
            Daftarkan akun untuk mengakses sistem akademik.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- NAME --}}
        <div>
            <x-input-label for="name" value="Nama Lengkap" class="font-semibold text-slate-700" />

            <x-text-input
                id="name"
                class="block mt-2 w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
                placeholder="Masukkan nama lengkap"
            />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- EMAIL --}}
        <div class="mt-5">
            <x-input-label for="email" value="Email" class="font-semibold text-slate-700" />

            <x-text-input
                id="email"
                class="block mt-2 w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username"
                placeholder="Masukkan email Anda"
            />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- PASSWORD --}}
        <div class="mt-5">
            <x-input-label for="password" value="Password" class="font-semibold text-slate-700" />

            <x-text-input
                id="password"
                class="block mt-2 w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="Buat password"
            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- CONFIRM PASSWORD --}}
        <div class="mt-5">
            <x-input-label for="password_confirmation" value="Konfirmasi Password" class="font-semibold text-slate-700" />

            <x-text-input
                id="password_confirmation"
                class="block mt-2 w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="Ulangi password"
            />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- BUTTON --}}
        <div class="flex items-center justify-between mt-7">
            <a
                class="text-sm text-blue-700 hover:text-blue-900 underline"
                href="{{ route('login') }}"
            >
                Sudah punya akun?
            </a>

            <x-primary-button class="ms-3 bg-blue-700 hover:bg-blue-800 focus:bg-blue-800 active:bg-blue-900 rounded-xl px-6 py-3">
                Daftar
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
