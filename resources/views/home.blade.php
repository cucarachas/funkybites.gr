@extends('layout.site')

@section('title', 'Funky Bites')

@section('content')
    <div class="flex flex-col justify-around items-center h-screen">
        <h1 class="mb-4 text-7xl font-extrabold leading-none tracking-tight md:text-7xl lg:text-9xl">Funky Bites</h1>
        <p class="text-xl text-gray-500 font-extrabold italic">Tasty . Delicious . Luscious</p>
        <div>
            <a href="{{route('contact')}}" type="button" class="border-2 border-black px-3.5 py-2.5 text-2xl font-semibold shadow-sm hover:bg-black hover:text-white">contact</a>
            <a href="{{route('menu')}}" type="button" class="border-2 border-black px-3.5 py-2.5 text-2xl font-semibold shadow-sm hover:bg-black hover:text-white">menu</a>
        </div>
    </div>
@endsection
