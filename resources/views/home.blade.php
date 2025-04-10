@extends('layouts.app')

@section('content')
    <!-- Title Section with Background -->
    <div class="bg-[#121212] h-35 p-12 mb-6">
        <h1 class="text-4xl font-bold text-white text-center">Home</h1>
    </div>

    <div class="bg-[#121212] text-white py-8 px-6 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Left Column: Rank Table -->
            <div class="lg:col-span-2">
                <div class="text-left mt-2">
                    <a href="{{ route('rank') }}" class="text-blue-400 hover:underline">View Full Rankings →</a>
                </div>

                <div class="bg-[#1e1e1e] rounded-lg p-6 mt-8 shadow-md">
                    <h2 class="text-xl font-bold mb-4 text-blue-400">🏆 Top 10 Players</h2>
                    <table class="w-full text-left text-sm">
                        <thead class="text-gray-400">
                        <tr>
                            <th class="py-2">#</th>
                            <th class="py-2">Name</th>
                            <th class="py-2">Country</th>
                            <th class="py-2">ELO</th>
                        </tr>
                        </thead>
                        <tbody class="text-white">
                        @foreach($topPlayers as $index => $player)
                            <tr class="border-t border-gray-700">
                                <td class="py-2">{{ $index + 1 }}</td>
                                <td class="py-2 font-medium">{{ $player->name }}</td>
                                <td class="py-2">
                                    <span class="fi fi-{{ strtolower($player->country) }}"></span>
                                    {{ $player->country }}
                                </td>
                                <td class="py-2">{{ $player->elo }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- Right Column: News + Watch -->
            <div class="space-y-8">
                <!-- Latest News -->
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Latest News</h2>
                    <div class="bg-[#1e1e1e] rounded-lg p-4 space-y-3 text-gray-300">
                        @foreach (range(1, 5) as $i)
                            <div class="border-b border-gray-600 last:border-0 pb-2">
                                <p class="text-sm font-medium">Menu Label</p>
                                <p class="text-xs text-gray-500">Menu description.</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Watch -->
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Watch</h2>
                    <div class="bg-black rounded-lg overflow-hidden">
                        <div class="relative">
                            <img src="https://i.ytimg.com/vi/1C-Zw1tP-3g/maxresdefault.jpg" alt="Stream preview"
                                 class="w-full h-48 object-cover">
                            <span
                                class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded">LIVE</span>
                        </div>
                        <div class="p-4">
                            <h3 class="text-white font-semibold text-sm">ESL Challenger League - Season 49</h3>
                            <p class="text-gray-400 text-xs">CHINGGIS VS NOMADS</p>
                            <p class="text-gray-500 text-xs mt-1">👁️ 21,546</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
