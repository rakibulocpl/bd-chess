@extends('layouts.public')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <x-public-header :title="__('Player List')" :description="__('List of applicants grouped by venue')" />

        {{-- ✅ Venue-wise Player List --}}
        @foreach ($groupedPlayer as $venue => $players)
            <div class="mb-12 mt-8">
                <h2 class="text-2xl font-bold text-indigo-700 mb-4 border-b pb-1">
                    {{ $venue ?? 'Unknown Venue' }}
                    <span class="text-base text-gray-500 font-normal">
                        ({{ count($players) }} {{ Str::plural('Player', count($players)) }})
                    </span>
                </h2>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-xl shadow-sm">
                        <thead class="bg-gray-100 text-gray-700 text-sm">
                        <tr>
                            <th class="px-4 py-2 border">#</th>
                            <th class="px-4 py-2 border text-left">Name</th>
                            <th class="px-4 py-2 border text-left">School</th>
                            <th class="px-4 py-2 border text-left">Mobile</th>
                            <th class="px-4 py-2 border text-left">District</th>
                            <th class="px-4 py-2 border text-left">Thana</th>
                        </tr>
                        </thead>
                        <tbody class="text-sm text-gray-800">
                        @foreach ($players as $index => $player)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border text-center">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border">{{ $player->name }}</td>
                                <td class="px-4 py-2 border">{{ $player->school->name ?? '-' }}</td>
                                <td class="px-4 py-2 border">{{ $player->mobile }}</td>
                                <td class="px-4 py-2 border">{{ $player->district_rel->name ?? '-' }}</td>
                                <td class="px-4 py-2 border">{{ $player->thana_rel->name ?? '-' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach

        <div class="mt-8">
            {{ $paginatedPlayers->links() }}
        </div>

        {{-- ✅ Register Info --}}
        <div class="mt-12 text-center text-sm text-gray-500">
            {{ __('Not registered yet?') }}
            <a href="{{ route('application.applicantRegister') }}" class="text-indigo-600 font-medium hover:underline">
                {{ __('Register here.') }}
            </a>
        </div>
    </div>
@endsection
