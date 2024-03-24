@extends('layout.site')

@section('title', 'Funky Bites | Menu')

@section('content')
    <div class="container m-auto p-4 md:p-6 lg:p-8">
        <div class="flex justify-end">
            <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight md:text-7xl lg:text-9xl">.menu</h1>
        </div>

        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($menu as $category)
                <div>
                    <h2 class="my-4 font-extrabold text-4xl">{{ $category['name'] }}</h2>
                    @foreach ($category['products'] as $item)
                        <div class="flex justify-between py-2 border-b-2 border-dotted">
                            <div class="w-3/4">
                                <h3 class="font-bold text-xl">{{ $item['name'] }}</h3>
                                <p class="text-gray-600">{{ $item['description'] }}</p>
                            </div>
                            <div>
                                <p class="font-bold text-lg">{{ $item['price'] }}€</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

    </div>
@endsection
