
@extends('main')

@section('content')

<div class="pt-24 min-h-screen bg-linear-to-br from-blue-950 via-blue-900 to-blue-700 flex items-center justify-center px-4 py-10">

    <!-- Card Sign Up -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 md:p-10">

        <!-- Header -->
        <div class="text-center mb-8">

            <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-7 h-7 text-blue-600"
                     fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M18 7.5V6a3 3 0 00-3-3H6a3 3 0 00-3 3v12a3 3 0 003 3h9a3 3 0 003-3v-1.5M16 12h6m-3-3v6"/>
                </svg>
            </div>

            <h2 class="text-3xl font-bold text-blue-950">
                Create Account
            </h2>

            <p class="text-gray-500 text-sm mt-2">
                Fill in your details to get started
            </p>
        </div>

        <!-- Form -->
        <form method="POST"
              action="{{ route('kirim_data') }}"
              class="space-y-5">

            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Email Address
                </label>

                <input type="email"
                       name="email"
                       placeholder="Enter your email"
                       value="{{ old('email') }}"
                       required
                       class="w-full px-4 py-3 bg-slate-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition">

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Username -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Username
                </label>

                <input type="text"
                       name="username"
                       placeholder="Choose a username"
                       value="{{ old('username') }}"
                       required
                       class="w-full px-4 py-3 bg-slate-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition">

                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Password
                </label>

                <input type="password"
                       name="password"
                       placeholder="Enter your password"
                       required
                       class="w-full px-4 py-3 bg-slate-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition">

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Confirm Password
                </label>

                <input type="password"
                       name="confirmpassword"
                       placeholder="Confirm your password"
                       required
                       class="w-full px-4 py-3 bg-slate-50 border border-gray-200 rounded-xl text-gray-800 placeholder-gray-400 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition">

                @error('confirmpassword')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Button -->
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-lg shadow-blue-200 transition duration-300 mt-3">
                Create Account &rarr;
            </button>

        </form>

        <!-- Footer -->
        <p class="text-center text-sm text-gray-500 mt-7">
            Already have an account?
            <a href="{{ url('/login') }}"
               class="text-blue-600 font-semibold hover:underline">
                Sign In
            </a>
        </p>

    </div>
</div>

@endsection
