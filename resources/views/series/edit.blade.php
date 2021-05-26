@extends('layouts.app')


@section('content')

<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">Update your serie</h1>
    </div>
</div>
<div class="flex justify-center pt-20">
    <form action="/series/{{ $serie->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="block">
            <input type="text" name="name" value="{{ $serie->name }}" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" >
        </div>

        <div class="block">
            <input type="text" name="seasons" value="{{ $serie->seasons }}"  class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" >
        </div>

        <div class="block">
            <input type="text" name="description" value="{{ $serie->description }}"  class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" >
        </div>

        <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit</button>
    </form>
</div>

@endsection
 