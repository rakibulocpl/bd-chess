@extends('layouts.public')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 bg-gray-100 dark:bg-zinc-900">
        <div class="w-full max-w-md space-y-6 bg-white dark:bg-zinc-800 p-6 rounded-lg shadow">
            <div class="text-center">
                <h2 class="text-2xl font-bold">{{ __('Log in to your account') }}</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('Enter your email and password below to log in') }}</p>
            </div>

            @if (session('status'))
                <div class="text-green-600 text-center text-sm">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium">{{ __('Email address') }}</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                           class="w-full mt-1 rounded border border-gray-300 p-2 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                    @error('email')
                    <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium">{{ __('Password') }}</label>
                    <input id="password" name="password" type="password" required
                           class="w-full mt-1 rounded border border-gray-300 p-2 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                    @error('password')
                    <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                    @enderror

                    @if (Route::has('password.request'))
                        <div class="text-right text-sm mt-2">
                            <a class="text-blue-600 hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    @endif
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-sm">{{ __('Remember me') }}</label>
                </div>

                <div>
                    <button type="submit"
                            class="w-full bg-black hover:bg-black text-white font-semibold py-2 rounded">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>

            @if (Route::has('register'))
                <div class="text-center text-sm text-zinc-600 dark:text-zinc-400">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">{{ __('Sign up') }}</a>
                </div>
            @endif
        </div>
    </div>
@endsection
