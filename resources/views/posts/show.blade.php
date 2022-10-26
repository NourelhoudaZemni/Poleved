@extends('admin.layout')
@section('content')

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 mb-10">
        <div class="flex justify-center items-center lg:flex-row flex-col gap-8">
            <!-- Description Div -->

            <div class="w-full items-center  p-2 rounded shadow shadow-lg ">
                <h2 class="font-semibold lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800  mt-4">{{ $posts->title }}</h2>
                <p class="font-normal text-base leading-6 text-gray-600  mt-7">

                    {{ $posts->date }}
                </p>
                <p class="text-lg lg:leading-6 leading-5 mt-6 "> @csrf
                    {{ $posts->description }}
                </p>

                    <div class="my-5  p-2 rounded shadow shadow-lg">
                        <p class="font-lg text-base leading-4 text-gray-600 break-all"> {{ $posts->contenu }}</p>
                    </div>


                <a href="{{ route('posts.index') }}">
                    <button class="focus:outline-none focus:ring-2 hover:bg-black focus:ring-offset-2 focus:ring-gray-800 font-medium text-base leading-4 text-white bg-gray-800 w-full py-5 lg:mt-12 mt-6">Back To Post List</button>
                </a>
            </div>

            @if(!empty($comments))
                <div class="break-all ">
                    @foreach($comments as $c)
                        <div class=" my-2 p-2 border-dark border border-cyan-500 ">
                            <p class="font-medium text-base leading-4 text-gray-600"> {{ $c->contenu }}</p>
                            <hr class="bg-black" />
                            <p class="my-2 font-light text-base leading-4 text-gray-650 "> email: {{ $c->email }}</p>
                            <p class="font-light text-base leading-4 text-gray-650 "> Name: {{ $c->name }}</p>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>

@endsection
