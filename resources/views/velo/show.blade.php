@extends('components.layout')

@section('content')



    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 mb-10">
        <div class="flex justify-center items-center lg:flex-row flex-col gap-8">
            <!-- Description Div -->

            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 items-center">
                <h2 class="font-semibold lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800  mt-4">{{ $velo->marque }}</h2>

                <div class="flex flex-row justify-between mt-5">
                    <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail4-svg1.svg" alt="stars">
                    <img class="hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail4-svg1dark.svg" alt="stars">
                    <p class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 font-normal text-base leading-4 text-gray-700 hover:underline hover:text-gray-800  duration-100 cursor-pointer">{{ $velo->etat }}</p>
                </div>

{{--                <p class="font-normal text-base leading-6 text-gray-600  mt-7">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using. Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>--}}
                <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 mt-6 ">$ {{ $velo->prix }}</p>

                <div class="lg:mt-11 mt-10">
                    <hr class="bg-gray-200 w-full my-2" />
                    <div class="flex flex-row justify-between items-center mt-4">
                        <p class="font-medium text-base leading-4 text-gray-600 "> {{ $velo->type }}</p>
                    </div>
                    <hr class="bg-gray-200 w-full mt-4" />
                </div>

                <a href="{{ route('velo.index') }}">
                    <button class="focus:outline-none focus:ring-2 hover:bg-black focus:ring-offset-2 focus:ring-gray-800 font-medium text-base leading-4 text-white bg-gray-800 w-full py-5 lg:mt-12 mt-6">Back To Bike List</button>
                </a>
            </div>

            <!-- Preview Images Div For larger Screen-->

            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 flex lg:flex-row flex-col lg:gap-8 sm:gap-6 gap-4">
                <div class="w-full lg:w-8/12 bg-gray-100 flex justify-center items-center">
                    <img src="{{ asset('images/' .  $velo->image) }}" alt="Wooden Chair Previw" />
                </div>
            </div>
        </div>
    </div>





@endsection('content')
