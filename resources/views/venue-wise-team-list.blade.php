@extends('layouts.public')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <x-public-header :title="__('Team List')" :description="__('')" />

        {{-- ✅ Summary Section --}}
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 mb-8 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">📊 {{ __('Team Count Summary by Venue') }}</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($groupedTeams as $venue => $teams)
                    <div class="bg-white border rounded-md p-4 shadow text-center">
                        <h3 class="text-base font-semibold text-indigo-600">{{ $venue ?? '-' }}</h3>
                        <p class="mt-2 text-gray-700 text-sm">
                            {{ count($teams) }} {{ Str::plural('Team', count($teams)) }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ✅ Success Alert --}}
        @session('success')
        <div class="flex items-center p-4 mb-6 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="font-medium">{{ $value }}</span>
        </div>
        @endsession

        {{-- ✅ Venue-wise Teams --}}
        @foreach ($groupedTeams as $venue => $teams)
            <div class="mb-10 mt-3">
                <h2 class="text-2xl font-bold text-indigo-700 mb-6 border-b pb-2">
                    {{ $venue ?? '-' }}
                    <span class="text-base text-gray-500 font-normal">
                        ({{ count($teams) }} {{ Str::plural('Team', count($teams)) }})
                    </span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($teams as $team)
                        <div class="bg-white shadow-lg hover:shadow-xl transition rounded-xl p-6 border border-gray-100">
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">
                                    🏫 {{ $team->school_info ?? '-' }}
                                </h3>
                                <p class="text-sm text-gray-500 mt-1">
                                    👤 <span class="font-medium text-gray-700">Captain:</span> {{ $team->captain_name }}
                                </p>
                            </div>

                            <div>
                                <h4 class="text-sm font-semibold text-gray-600 mb-1">🎯 Players:</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1">
                                    @foreach ($team->player_names as $player)
                                        <li>{{ $player }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        {{-- ✅ Register Info --}}
        <div class="mt-12 text-center text-sm text-gray-500">
            {{ __('You need to register as an individual before creating a team.') }}
            <a href="{{ route('application.applicantRegister') }}" class="text-indigo-600 font-medium hover:underline">
                {{ __('Register here.') }}
            </a>
        </div>
    </div>
@endsection
