@extends('layouts.public')

@section('content')

    <x-auth-header :title="__('Feedback Form')" :description="__('')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

        <div class="grid md:grid-cols-2 gap-6">
            @forelse ($feedbacks as $feedback)
                <div class="bg-white hover:shadow-lg transition-shadow shadow-sm border border-gray-200 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-2">
                        <h2 class="text-xl font-semibold text-indigo-700 truncate">
                            {{ $feedback->name ?? 'Anonymous' }}
                        </h2>
                        <a href="{{ route('feedback.show', $feedback->id) }}"
                           class="text-sm text-indigo-600 hover:underline">Read More →</a>
                    </div>

                    <p class="text-sm text-gray-500 mb-3">
                        📧 {{ $feedback->email ?? 'No Email' }}<br>
                        📱 {{ $feedback->mobile ?? 'No Mobile' }}
                    </p>

                    <p class="text-gray-700 text-sm line-clamp-3">
                        {{ $feedback->feedback }}
                    </p>
                </div>
            @empty
                <div class="col-span-2 text-center text-gray-500">No feedback found.</div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $feedbacks->links() }}
        </div>
    </div>
@endsection
