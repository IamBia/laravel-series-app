@extends('layouts.app')


@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl bold uppercase">Series</h1>
    </div>

    <div class="pt-10">
        <a href="series/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">Add a new serie &rarr;</a>
    </div>
    
    <div class="w-5/6 py-10">
        @foreach ($series as $serie)
        <div class="m-auto">
            <div class="float-right">
                <a href="/series/{{ $serie->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">Edit serie &rarr;</a>
                <form action="/series" method="POST" class="pt-3">
                    @csrf
                    @method("delete")
                    <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500">Delete serie &rarr;</button>
                </form>
            </div>
            <span class="uppercase text-blue-500 font-bold text-xs italic">Seasons: {{ $serie->seasons }}</span>
            
            <h2 class="text-gray-700 text-5xl">{{ $serie->name }}</h2>
            
            <p class="text-lg text-gray-700 py-6">{{ $serie->description }}</p>
            
            <hr class="mt-4 mb-8">
        </div>
        @endforeach
    </div>
</div>

@endsection
