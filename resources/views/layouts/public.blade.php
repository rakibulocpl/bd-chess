<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <title>{{ config('app.name') }}</title>
    @include('partials.public-head')
</head>
<body class="min-h-screen flex flex-col bg-white antialiased dark:bg-gradient-to-b dark:from-neutral-950 dark:to-neutral-900">

<!-- ✅ Header / Navbar -->
<header class="bg-white dark:bg-neutral-900 shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto" onerror="this.style.display='none';">
            <span class="text-xl font-bold text-gray-800 dark:text-white">
                {{ config('app.name', 'Chess Federation') }}
            </span>
        </a>

        <!-- Nav Links -->
        <nav class="space-x-4 hidden md:flex">
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-700 dark:text-white hover:text-blue-500' }}">
                Team Registration
            </a>
            <a href="{{ route('application.applicantRegister') }}"
               class="{{ request()->routeIs('application.applicantRegister') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-700 dark:text-white hover:text-blue-500' }}">
                Individual Registration
            </a>
            <a href="{{ route('application.notice') }}"
               class="{{ request()->routeIs('application.notice') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-700 dark:text-white hover:text-blue-500' }}">
                Notice
            </a>
        </nav>

        <!-- Mobile Toggle -->
        <button class="md:hidden text-gray-800 dark:text-white" id="menuToggle">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden px-4 pb-4 hidden" id="mobileMenu">
        <a href="{{ route('home') }}" class="block py-2 text-gray-700 dark:text-white hover:text-blue-500">Team Registration</a>
        <a href="{{ route('application.applicantRegister') }}" class="block py-2 text-gray-700 dark:text-white hover:text-blue-500">Individual Registration</a>
        <a href="{{ route('application.notice') }}" class="block py-2 text-gray-700 dark:text-white hover:text-blue-500">Notice</a>
    </div>
</header>

<!-- ✅ Page Content -->
<main class="flex-grow flex flex-col items-center justify-center gap-6 p-6 md:p-10 bg-white dark:bg-transparent">
    <div class="flex w-full max-w-sm md:max-w-3xl flex-col gap-2">
        <h1 class="text-center font-bold text-2xl md:text-3xl mb-5">
            National High School Team Championship 2025
        </h1>
        <div class="flex flex-col gap-6">
            @yield('content')
        </div>
    </div>
</main>

<!-- ✅ Footer -->
<footer class="bg-neutral-100 dark:bg-neutral-800 text-center text-sm text-gray-600 dark:text-gray-300 py-4">
    <p>&copy; {{ date('Y') }} Bangladesh Chess Federation. All rights reserved.</p>
</footer>

<!-- ✅ Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // Mobile menu toggle
    document.getElementById('menuToggle').addEventListener('click', function () {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    });
</script>

@yield('scripts')
</body>
</html>
