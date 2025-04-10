@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-[#121212] text-white px-8 py-10">
        <h1 class="text-4xl font-bold text-center mb-6">Rank</h1>

        <p class="text-center text-lg mb-10">
            Your ranking is <span class="font-bold text-white">23</span> &nbsp;&nbsp; elo <span class="font-bold text-white">1,864</span>
        </p>

        <div class="overflow-x-auto rounded-lg">
            <table class="w-full table-auto border-separate border-spacing-y-2">
                <thead>
                <tr class="text-left text-gray-300 uppercase text-sm">
                    <th class="px-4 py-2">Ranking</th>
                    <th class="px-4 py-2">Player</th>
                    <th class="px-4 py-2">Country</th>
                    <th class="px-4 py-2">Level</th>
                    <th class="px-4 py-2">Elo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $index => $player)
                    @php
                        $globalRank = ($players->currentPage() - 1) * $players->perPage() + $loop->iteration;
                        $rowColor = match($globalRank) {
                            1 => 'bg-yellow-900',
                            2 => 'bg-gray-700',
                            3 => 'bg-amber-950',
                            default => '',
                        };
                    @endphp
                    <tr class="{{ $rowColor }} text-white">
                        <td class="px-4 py-3">{{ $globalRank }}</td>
                        <td class="px-4 py-3">{{ $player->name }}</td>
                        <td class="px-4 py-3 text-2xl">🇷🇴</td>
                        <td class="px-4 py-3">{{ $player->level }}</td>
                        <td class="px-4 py-3">{{ number_format($player->elo) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="mt-8 flex justify-center">
            {{ $players->links() }}
        </div>
    </div>
@endsection
