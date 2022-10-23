@extends('admin.layout')
@section('content')

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 mb-10">
        <div class="flex justify-center items-center lg:flex-row flex-col gap-8">
            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 items-center">
                <h2 class="font-semibold lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800  mt-4">{{ $sponsor->name }}</h2>
                <p class="font-normal text-base leading-6 text-gray-600  mt-7">
                    {{ $sponsor->description }}
                </p>
                <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 mt-6 ">Subscription Type: {{ $sponsor->subscriptionType }}</p>
                <a href="{{ route('sponsor.index') }}">
                    <button class="focus:outline-none focus:ring-2 hover:bg-black focus:ring-offset-2 focus:ring-gray-800 font-medium text-base leading-4 text-white bg-gray-800 w-full py-5 lg:mt-12 mt-6">Back To Sponsor List</button>
                </a>
            </div>

            <!-- Preview Images Div For larger Screen-->

{{--            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 flex lg:flex-row flex-col lg:gap-8 sm:gap-6 gap-4">--}}
{{--                <div class="w-full lg:w-8/12 bg-gray-100 flex justify-center items-center">--}}
{{--                    <img src="{{ asset('images/' .  $velo->image) }}" alt="Wooden Chair Previw" />--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

@endsection
