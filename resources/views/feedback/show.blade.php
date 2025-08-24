@extends('layouts.public')

@section('content')
    <x-auth-header :title="__('Feedback Preview')" :description="__('')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <div class="max-w-6xl mx-auto px-6 py-10">
        <a href="{{ route('feedback.list') }}" class="inline-flex items-center text-indigo-600 hover:underline text-sm font-medium mb-6">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Back to List
        </a>

        <div class="bg-white shadow-xl border border-gray-200 rounded-2xl p-10 md:p-12">
            <div class="flex items-center gap-3 mb-4">
                <svg class="w-7 h-7 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1112 21a8.963 8.963 0 01-6.879-3.196z" />
                </svg>
                <h2 class="text-3xl font-bold text-gray-800">
                    {{ $feedback->name ?? 'Anonymous' }}
                </h2>
            </div>

            <div class="text-sm text-gray-500 mb-8 space-y-1">
                <p>📧 <span class="font-medium text-gray-700">{{ $feedback->email ?? 'No email' }}</span></p>
                <p>📱 <span class="font-medium text-gray-700">{{ $feedback->mobile ?? 'No mobile' }}</span></p>
            </div>

            <div class="bg-gray-50 p-6 md:p-8 rounded-xl border text-gray-800 leading-relaxed text-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">📝 Feedback:</h3>
                <p>{{ $feedback->feedback }}</p>
            </div>
        </div>
    </div>
@endsection
