@extends('layouts.public')

@section('content')
    <x-public-header :title="__('16 জোন থেকে চূড়ান্ত পর্বে নির্বাচিত দলের তালিকা')" :description="__('')" />
    <div class="flex flex-col gap-4">
        <!-- Page Header -->

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <!-- Image 1 -->
        <div class="mt-4 flex justify-center">
            <img src="{{ asset('assets/result/result_page-0001.jpg') }}"
                 alt="result"
                 class="max-w-full h-auto rounded-lg shadow-md border border-gray-300">
        </div>

        <!-- Image 2 -->
        <div class="mt-4 flex justify-center">
            <img src="{{ asset('assets/result/result_page-0002.jpg') }}"
                 alt="ইভেন্ট ব্যানার"
                 class="max-w-full h-auto rounded-lg shadow-md border border-gray-300">
        </div>

        <!-- Image 3 -->
        <div class="mt-4 flex justify-center">
            <img src="{{ asset('assets/result/result_page-0003.jpg') }}"
                 alt="রেজিস্ট্রেশন তথ্য"
                 class="max-w-full h-auto rounded-lg shadow-md border border-gray-300">
        </div>

        <!-- Info Text -->
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('You need to register as an individual before creating a team.') }}
            <a href="{{ route('application.applicantRegister') }}" class="text-indigo-600 hover:underline">
                {{ __('Register here.') }}
            </a>
        </div>
    </div>
@endsection
