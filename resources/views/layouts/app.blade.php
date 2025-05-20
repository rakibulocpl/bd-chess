<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 flex">

<!-- Sidebar -->
<aside class="hidden lg:block w-64 border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 min-h-screen px-4 py-6">
    <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 rtl:space-x-reverse mb-6">
        <x-app-logo />
    </a>

    <nav class="space-y-2 text-sm">
        <h2 class="text-zinc-500 uppercase font-semibold text-xs mb-2">{{ __('Platform') }}</h2>
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'font-bold text-indigo-600' : 'text-zinc-700 dark:text-zinc-300' }} block hover:underline">
            {{ __('Dashboard') }}
        </a>
        <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.index') ? 'font-bold text-indigo-600' : 'text-zinc-700 dark:text-zinc-300' }} block hover:underline">
            {{ __('Users') }}
        </a>
        <a href="{{ route('roles.index') }}" class="{{ request()->routeIs('roles.index') ? 'font-bold text-indigo-600' : 'text-zinc-700 dark:text-zinc-300' }} block hover:underline">
            {{ __('Roles') }}
        </a>
    </nav>

    <!-- Profile Section -->
    <!-- Profile Section -->
    <div class="mt-auto pt-6 border-t border-zinc-200 dark:border-zinc-700">
        <div class="flex items-center space-x-3 rtl:space-x-reverse mb-4">
            <div class="h-10 w-10 rounded-full bg-indigo-500 text-white flex items-center justify-center font-semibold text-sm">
                {{ auth()->user()->initials() }}
            </div>
            <div class="overflow-hidden">
                <p class="text-sm font-semibold truncate text-zinc-900 dark:text-white">
                    {{ auth()->user()->name }}
                </p>
                <p class="text-xs text-zinc-500 dark:text-zinc-400 truncate">
                    {{ auth()->user()->email }}
                </p>
            </div>
        </div>

        <div class="space-y-2 text-sm">
            <a href="{{ route('settings.profile') }}"
               class="block text-zinc-700 dark:text-zinc-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                ⚙️ {{ __('Settings') }}
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="text-left w-full text-zinc-700 dark:text-zinc-300 hover:text-red-600 dark:hover:text-red-400 transition">
                    🚪 {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>

</aside>

<!-- Main Content -->
<div class="flex-1 flex flex-col">
    <!-- Mobile Header -->
    <header class="lg:hidden flex items-center justify-between p-4 border-b border-zinc-200 dark:border-zinc-700">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 rtl:space-x-reverse">
            <x-app-logo />
        </a>

        <div class="relative">
            <div class="h-8 w-8 rounded-full bg-neutral-200 dark:bg-neutral-700 flex items-center justify-center text-black dark:text-white">
                {{ auth()->user()->initials() }}
            </div>
            <!-- Add dropdown logic here if needed for mobile -->
        </div>
    </header>

    <!-- Page Content -->
    <main class="p-4">
       @yield('content')
    </main>
</div>
</body>
</html>
