@extends('components.layout')

@section('content')

    <!-- Card is full width. Use in 8 col grid for best view. -->
    <!-- Card code block start -->
    @if(count($data) > 0)
        <h2 class="flex justify-center focus:outline-none text-4xl font-bold text-indigo-900 mt-10">Don't Miss Our Event</h2>
        <div class="shadow rounded xl:flex lg:flex w-full flex-wrap">
            <div class="flex flex-row flex-wrap ">
                @foreach($data as $row)
                    <div class="w-1/3 py-10">
                        <div class="container mx-auto px-6 flex items-start justify-center">
                            <div aria-label="group of cards" class="w-full">
                                <!-- Card is full width. Use in 12 col grid for best view. -->
                                <!-- Card code block start -->
                                <div class="flex flex-col lg:flex-row mx-auto bg-white shadow rounded">
                                    <div class="w-full lg:w-1/2 px-12 flex flex-col items-center py-10">
                                        <div class="w-32 h-32 mb-3 p-2 rounded-full bg-gray-200 flex items-center justify-center">
                                            <img role="img" class="w-full h-full overflow-hidden object-cover rounded-full" src="{{ asset('images/' . $row->image) }}" alt="avatar" />
                                        </div>
                                        <a tabindex="0" class="focus:outline-none focus:opacity-75 hover:opacity-75 text-gray-800  cursor-pointer focus:underline"><h2 class=" text-xl tracking-normal font-medium mb-1">{{ $row->name }}</h2></a>
                                        <a tabindex="0" class="cursor-pointer hover:text-indigo-700 focus:underline focus:outline-none focus:text-indigo-700 flex text-gray-600  text-sm tracking-normal font-normal mb-3 text-center">
                                <span class="cursor-pointer mr-1 text-gray-600 ">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg1.svg" alt="icon"/>

                                </span>
                                            {{ $row->address }}
                                        </a>
                                        <a tabindex="0" class="cursor-pointer hover:text-indigo-700 focus:underline focus:outline-none focus:text-indigo-700 flex text-gray-600  text-sm tracking-normal font-normal mb-3 text-center">
                                <span class="cursor-pointer mr-1 text-gray-600 ">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg1.svg" alt="icon"/>

                                </span>
                                            {{ $row->mobile }}
                                        </a>
                                        <a tabindex="0" class="cursor-pointer hover:text-indigo-700 focus:underline focus:outline-none focus:text-indigo-700 flex text-gray-600  text-sm tracking-normal font-normal mb-3 text-center">
                                <span class="cursor-pointer mr-1 text-gray-600 ">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg1.svg" alt="icon"/>

                                </span>
                                            {{ $row->date }}
                                        </a>
                                        <p class="text-gray-600  text-sm tracking-normal font-normal mb-8 text-center w-10/12">
                                            {{ $row->details }}
                                        </p>
                                    </div>
                                    <div class="w-full lg:w-1/2 flex-col flex justify-center items-center px-12 py-8">
                                        <h2 class="text-center text-2xl text-gray-800  font-medium tracking-normal">{{ $row->places }}</h2>
                                        <h2 class="text-center text-sm text-gray-600  font-normal mt-2 mb-4 tracking-normal">Number Of Places</h2>
                                        <h2 class="text-center text-2xl text-gray-800  font-medium tracking-normal">{{ $row->sponsor }}</h2>
                                        <h2 class="text-center text-sm text-gray-600  font-normal mt-2 mb-4 tracking-normal">Our Sponsor</h2>
                                        <h2 class="text-center text-2xl text-gray-800  font-medium tracking-normal">{{ $row->participants }}</h2>
                                        <h2 class="text-center text-sm text-gray-600  font-normal mt-2 mb-4 tracking-normal">Our Participants</h2>
                                        {{--                        <div class="flex items-center">--}}
                                        {{--                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg3.svg" alt="yellow star"/>--}}
                                        {{--                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg3.svg" alt="yellow star"/>--}}
                                        {{--                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg3.svg" alt="yellow star"/>--}}
                                        {{--                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg3.svg" alt="yellow star"/>--}}
                                        {{--                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/full_width_3_section_card-svg4.svg" alt="grey star"/>--}}
                                        {{--                        </div>--}}
                                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 ml-0 md:ml-5 bg-indigo-700 dark:bg-indigo-600 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-3 md:px-6 py-2 text-sm">Participate</button>
                                    </div>
                                </div>
                                <!-- Card code block end -->
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @else
        <p>Events Comming Soon</p>
    @endif



@endsection('content')

