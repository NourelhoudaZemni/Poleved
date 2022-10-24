@extends('components.layout')

@section('content')

    <!-- Card is full width. Use in 8 col grid for best view. -->
    <!-- Card code block start -->
    @if(count($data) > 0)
        <h2 class="flex justify-center focus:outline-none text-4xl font-bold text-indigo-900 mt-10 mb-6">Pick Your Favorite Bike</h2>
            <div class="shadow rounded xl:flex lg:flex w-full flex-wrap">
                <div class="flex flex-row flex-wrap">
                    @foreach($data as $row)
                    <div class="flex flex-col items-center ml-8">
                        <div class="h-40 w-40 rounded-full mb-3">
                            <img tabindex="0" class="focus:outline-none h-full w-full object-cover rounded-full shadow" src="{{ asset('images/' . $row->image) }}" alt="boy avatar" />
                        </div>
                        <p tabindex="0" class="focus:outline-none mb-2 text-lg font-bold text-gray-900">{{ $row->marque }}</p>
                        <p tabindex="0" class="focus:outline-none mb-6 text-sm text-gray-700">Status : {{ $row->etat }}</p>
                        <p tabindex="0" class="focus:outline-none mb-6 text-sm text-gray-700">Price : {{ $row->prix }}</p>
                        <p tabindex="0" class="focus:outline-none mb-6 text-sm text-gray-700">Type : {{ $row->type }}</p>
                        <button class="focus:ring-2 focus:ring-indigo-600 bg-white font-medium transition duration-150 ease-in-out hover:bg-gray-200 rounded text-gray-800 px-6 py-2 text-sm border border-gray-300  focus:outline-none">Reserve</button>
                    </div>
                    @endforeach

                </div>
            </div>
    @else
        <p>Bikes Comming Soon</p>
    @endif

@endsection('content')
