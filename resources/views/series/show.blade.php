@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl bold uppercase">{{ $serie->name }}</h1>
        </div>

        <div class="m-auto">
            <span class="uppercase text-blue-500 font-bold text-xs italic">Seasons: {{ $serie->seasons }}</span>

            <p class="text-lg text-gray-700 py-6">{{ $serie->description }}</p>

            <ul>
                <p class="text-lg text-gray-700 py-3">Seasons</p>
                @forelse ($serie->serieSeasons as $season)

                    <li class="inline italic text-gray-600 px-1 px-6 ">{{ $season['season_name'] }}</li>
                @empty
                    <p>No seasons to show</p>


                @endforelse
            </ul>

            <hr class="mt-4 mb-8">
        </div>
    </div>


@endsection
