@extends('admin.layout')

@section('content')


    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 mb-10">
        <div class="flex justify-center items-center lg:flex-row flex-col gap-8">
            <!-- Description Div -->

            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 items-center">
                <h2 class="font-semibold text-center lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800  mt-4">{{ $type->type_name }}</h2>
                <a href="{{ route('type.index') }}">
                    <button class="focus:outline-none focus:ring-2 hover:bg-black focus:ring-offset-2 focus:ring-gray-800 font-medium text-base leading-4 text-white bg-gray-800 w-full py-5 lg:mt-12 mt-6">Back To Bike's Category</button>
                </a>
            </div>
        </div>
    </div>

@endsection('content')
