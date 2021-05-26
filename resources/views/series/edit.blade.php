@extends('layouts.app')


@section('content')

<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">Create a new serie</h1>
    </div>
</div>
<div class="flex justify-center pt-20">
    <form action="/" method="POST">
        @csrf
        <div class="block">
            <input type="text" name="name" placeholder="Serie name" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" >
        </div>

        <div class="block">
            <input type="text" name="seasons" placeholder="Seasons" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" >
        </div>

        <div class="block">
            <input type="text" name="description" placeholder="Description" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" >
        </div>

        <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit</button>
    </form>
</div>

@endsection
 