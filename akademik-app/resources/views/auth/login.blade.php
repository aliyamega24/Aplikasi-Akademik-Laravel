<x-guest-layout>
    <div class="mb-6 text-center">
        <div class="mx-auto w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center">
            <span class="text-3xl font-bold text-blue-700">E</span>
        </div>

        <h1 class="mt-5 text-2xl font-bold text-slate-800">
            Sistem Informasi Akademik
        </h1>

        <p class="mt-2 text-sm text-slate-500">
            Silakan masuk untuk mengakses akun Anda.
        </p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- EMAIL --}}
        <div>
            <x-input-label for="email" value="Email" class="font-semibold text-slate-700" />

            <x-text-input
                id="email"
                class="block mt-2 w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
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
                autocomplete="current-password"
                placeholder="Masukkan password Anda"
            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- REMEMBER ME --}}
        <div class="block mt-5">
            <label for="remember_me" class="inline-flex items-center">
                <input
                    id="remember_me"
                    type="checkbox"
                    class="rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500"
                    name="remember"
                >

                <span class="ms-2 text-sm text-slate-600">
                    Ingat saya
                </span>
            </label>
        </div>

        {{-- BUTTON --}}
        <div class="flex items-center justify-between mt-7">
            @if (Route::has('password.request'))
                <a
                    class="text-sm text-blue-700 hover:text-blue-900 underline"
                    href="{{ route('password.request') }}"
                >
                    Lupa password?
                </a>
            @endif

            <x-primary-button class="ms-3 bg-blue-700 hover:bg-blue-800 focus:bg-blue-800 active:bg-blue-900 rounded-xl px-6 py-3">
                Masuk
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
