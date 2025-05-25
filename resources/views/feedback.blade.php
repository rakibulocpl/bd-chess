@extends('layouts.public')

@section('content')
    <div class="flex flex-col gap-4">
        <!-- Page Header -->
        <x-auth-header :title="__('Feedback Form')" :description="__('')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <!-- Feedback Form -->
        <div class="p-6 bg-white rounded-lg shadow text-base leading-relaxed">

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('feedback.submit') }}" class="space-y-4">
                @csrf

                <!-- Name (Optional) -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Your Name (optional)</label>
                    <input type="text" id="name" name="name"
                           value="{{ old('name') }}"
                           class="mt-1 block w-full border @error('name') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
                    @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Mobile (Optional) -->
                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-700">Your Mobile No (optional)</label>
                    <input type="text" id="mobile" name="mobile"
                           value="{{ old('mobile') }}"
                           class="mt-1 block w-full border @error('mobile') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
                    @error('mobile')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email (Optional) -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Your Email (optional)</label>
                    <input type="email" id="email" name="email"
                           value="{{ old('email') }}"
                           class="mt-1 block w-full border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
                    @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Feedback -->
                <div>
                    <label for="feedback" class="block text-sm font-medium text-gray-700">
                        Your Feedback <span class="text-red-500">*</span>
                    </label>
                    <textarea id="feedback" name="feedback" rows="4" required
                              class="mt-1 block w-full border @error('feedback') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">{{ old('feedback') }}</textarea>
                    @error('feedback')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                            class="inline-flex justify-center px-4 py-2 text-white bg-black hover:bg-black rounded-md shadow">
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>

        <!-- Notice -->
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            You need to register as an individual before creating a team.
            <a href="{{ route('application.applicantRegister') }}" class="text-indigo-600 hover:underline">
                Register here.
            </a>
        </div>
    </div>
@endsection
