@extends('layouts.public')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-10">
        <x-public-header :title="__('Venue-wise Summary')" :description="__('Total number of players grouped by venue')" />

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
            @foreach($venueSummary as $venue)
                <div class="bg-white border border-gray-300 rounded-2xl p-6 shadow-md hover:shadow-lg transition duration-300">
                    <h2 class="text-xl font-bold text-indigo-800 leading-snug mb-2">
                        {{ $venue->venue_name ?? 'Unknown Venue' }}
                    </h2>
                    <div class="text-gray-700 text-sm">
                        Total Players:
                        <div class="text-3xl font-extrabold text-indigo-600 mt-1">
                            {{ $venue->total_players }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
