@extends('layout.site')

@section('title', 'Funky Bites')

@section('content')
    <div class="container m-auto">
        <div class="flex flex-col justify-around items-center text-center h-screen p-4 md:p-6 lg:p-8">
            <h1 class="font-conserta text-[100px] md:text-[180px] lg:text-[240px]">Funky Bites</h1>
            <p class="tracking-tight text-xl md:text-2xl lg:text-4xl text-gray-500 font-extrabold italic">Tasty . Delicious . Luscious</p>
            <div class="flex flex-col md:flex-row justify-between items-center gap-2 w-full">
                <a href="{{route('contact')}}" type="button" class="w-1/2 border-2 border-black px-3.5 py-2.5 text-2xl font-semibold shadow-sm hover:bg-black hover:text-white">contact</a>
                <a href="{{route('menu')}}" type="button" class="w-1/2 border-2 border-black px-3.5 py-2.5 text-2xl font-semibold shadow-sm hover:bg-black hover:text-white">menu</a>
            </div>
        </div>
    </div>

@endsection
