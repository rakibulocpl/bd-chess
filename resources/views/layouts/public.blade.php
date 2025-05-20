<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }}</title>
    @include('partials.public-head')
</head>
<body class="min-h-screen flex flex-col bg-white antialiased dark:bg-gradient-to-b dark:from-neutral-950 dark:to-neutral-900 ">

<!-- ✅ Header / Navbar -->
<header class="fixed top-0 left-0 w-full z-50 bg-white/80 dark:bg-neutral-900/80 backdrop-blur-md shadow-md">

    <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 py-2 flex justify-between items-center">
            <!-- Logo -->

            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ asset('assets/images/chess_logo.svg') }}" alt="Logo" class="h-14 w-auto" onerror="this.style.display='none';">
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
            <!-- <a href="{{ route('teamList') }}"
               class="{{ request()->routeIs('teamList') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-700 dark:text-white hover:text-blue-500' }}">
                Registered Team List
            </a> -->
            <a href="{{ route('notice') }}"
               class="{{ request()->routeIs('notice') ? 'text-blue-600 font-semibold border-b-2 border-blue-600' : 'text-gray-700 dark:text-white hover:text-blue-500' }}">
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
    <div class="md:hidden px-6 md:px-12 lg:px-24 pb-4 hidden" id="mobileMenu">
        <a href="{{ route('home') }}" class="block py-2 text-gray-700 dark:text-white hover:text-blue-500">Team Registration</a>
        <a href="{{ route('application.applicantRegister') }}" class="block py-2 text-gray-700 dark:text-white hover:text-blue-500">Individual Registration</a>
        <!-- <a href="{{ route('teamList') }}" class="block py-2 text-gray-700 dark:text-white hover:text-blue-500">Registered Team List</a> -->
        <a href="{{ route('notice') }}" class="block py-2 text-gray-700 dark:text-white hover:text-blue-500">Notice</a>
    </div>
</header>

<!-- ✅ Page Content -->
<main class="pt-16 md:pt-20 flex-grow bg-white dark:bg-transparent">
    <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-24 py-10 flex flex-col gap-6">
        <div class="w-full flex flex-col gap-2">


            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-6 rounded-md shadow-md text-center space-y-4">
            <h2 class="text-2xl md:text-3xl font-extrabold">
                জাতীয় হাই স্কুল প্রোগ্রামিং প্রতিযোগিতা ২০২৫
            </h2>

                <a href="/assets/notice.pdf"
                   download
                   class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-full transition duration-300">
                    📄 বিজ্ঞপ্তি PDF ডাউনলোড করুন
                </a>
        </div>
            @if (!Request::is('campaign-details'))
            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded-md shadow-md text-center">
                🏫 নির্বাচিত স্কুলে খুব শীঘ্রই প্রোগ্রামিং ক্যাম্পেইন অনুষ্ঠিত হবে।
                <a href="/campaign-details" class="text-blue-700 font-semibold underline hover:text-blue-900">বিস্তারিত দেখুন</a> —
                ক্যাম্পেইনের তারিখ ও সময়সূচী শীঘ্রই জানানো হবে।
            </div>
            @endif



            <h1 class="text-center font-bold text-2xl md:text-3xl mb-5">
                National High School Team Chess Championship 2025
            </h1>
            <div class="flex flex-col gap-6">
                @yield('content')
            </div>
        </div>
    </div>
</main>

<!-- ✅ Footer -->
<footer class="py-4 border-t-4 border-indigo-500 shadow-inner">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center md:justify-between px-4">

        <div class="flex items-center gap-4 mb-2 md:mb-0">
            <img src="{{ asset('assets/images/footer-left.png') }}" alt="ICT & BCC" class="h-10 w-auto">
        </div>

        <div class="order-3 md:order-none w-full md:w-auto text-center text-sm text-gray-600 dark:text-gray-300 flex-1 mt-2 md:mt-0">
            <p>&copy; {{ date('Y') }} Bangladesh Chess Federation. All rights reserved.</p>
        </div>

        <div class="flex flex-col items-center gap-1">
            <img src="{{ asset('assets/images/footer-right.png') }}" alt="Partners" class="h-10 w-auto">
        </div>
    </div>
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
