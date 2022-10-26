@extends('components.layout')

@section('content')



    <div class="flex flex-col align-center w-[98%] mx-auto">
        <div class=" shadow-xl rounded-xl bg-white shadow rounded border break-all my-5 p-5">
        <h1 class="flex justify-center focus:outline-none text-4xl font-bold text-indigo-900 mt-10">{{ $post->title }}</h1>
        <h3 class="flex justify-center focus:outline-none font-bold text-indigo-900">{{ $post->author }}</h3>
        <p class="flex justify-center focus:outline-none text-indigo-900">{{ $post->date }}</p>
        <p class="text-gray-600 tracking-normal font-normal mt-8 mb-12 w-10/12">
            {{ $post->contenu }}
        </p>
    </div>


@if(!empty($comments))
    <div class="break-all w-[80%] mx-auto mb-6">
        @foreach($comments as $c)
            <div class=" my-2 p-2 border-dark border border-cyan-500 ">
                <p class="font-medium text-base leading-4 text-gray-600"> {{ $c->contenu }}</p>
                <hr class="blue my-2 " />
                <p class="my-2 font-light text-base leading-4 text-gray-650 "> email: {{ $c->email }}</p>
                <p class="font-light text-base leading-4 text-gray-650 "> Name: {{ $c->name }}</p>
                <p class="font-light text-base leading-4 text-gray-650 "> Score: {{ $c->score }}</p>
                <p class="font-light text-base leading-4 text-gray-650 "> Date: {{ $c->created_at }}</p>
            </div>
        @endforeach
    </div>
@endif


</div>
    <a href="/OurPosts" class=" focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 ml-0 md:ml-5 bg-indigo-700 dark:bg-indigo-600 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-3 md:px-6 py-2 text-sm">Back</a>
    <a href="/comment/{{$post->id}}" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 ml-0 md:ml-5 dark:bg-indigo-600 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-3 md:px-6 py-2 text-sm">Leave a comment</a>
@endsection('content')

