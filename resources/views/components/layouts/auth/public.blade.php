<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')

</head>
<body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">

<!-- ✅ Navbar at the top -->
<div class="w-full flex justify-center py-4 shadow-sm bg-white dark:bg-neutral-900">
    <div class="flex space-x-4">
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
    </div>


</div>


<!-- Page content centered below -->
<div class="bg-background flex  flex-col items-center justify-center gap-6 p-6 md:p-10">
    <div class="flex w-full max-w-sm md:max-w-3xl flex-col gap-2">
        <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
            <span class="sr-only">{{ config('app.name', 'Bangladesh Chess Federation') }}</span>
        </a>
        <h1 class="text-center font-bold text-2xl md:text-3xl  mb-5 ">National High School Team Championship 2025</h1>
        <div class="flex flex-col gap-6">
            {{ $slot }}
        </div>
    </div>
</div>

@fluxScripts
</body>
</html>
