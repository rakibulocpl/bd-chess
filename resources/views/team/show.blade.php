@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-zinc-800 shadow rounded-lg mt-10">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Team Details</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-300">Team Number</label>
                <p class="mt-1 text-gray-900 dark:text-white">{{ $team->team_number }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-300">School name</label>
                <p class="mt-1 text-gray-900 dark:text-white">{{ $team->school->name.', '.$team->district->name.', '.$team->thana->name }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-2">Players</label>

                @if($teamPlayers->isNotEmpty())
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($teamPlayers as $player)
                            <div class="p-3 bg-white dark:bg-zinc-800 rounded-lg shadow-sm border border-gray-200 dark:border-zinc-600">
                                <p class="text-sm dark:text-white font-semibold text-blue-500">{{ $player->name }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-300"><strong>Position:</strong> {{ $player->player_order }}</p>
                                {{-- Add more player info here if needed --}}
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 dark:text-gray-400">No players found for this team.</p>
                @endif
            </div>


            {{-- Add more fields as needed --}}
            <div>
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-300">Mentor's Name</label>
                <p class="mt-1 text-gray-900 dark:text-white">{{ $team->mentor_name }}</p>
            </div>

        </div>

        <div class="mt-8 flex space-x-4">
            <a href="{{ route('admin.teams.index') }}"
               class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded hover:bg-gray-700">
                Back
            </a>

        </div>
    </div>
@endsection
