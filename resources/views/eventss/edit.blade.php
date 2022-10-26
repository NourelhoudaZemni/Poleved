@extends('admin.layout')
@section('content')

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>

    @endif
    <div class="flex justify-center w-full sm:px-6">
        <div class="px-4 md:px-10 pt-6 md:pt-12 md:pb-4 pb-7">
            <p class="text-center text-2xl font-semibold mb-10">Edit Event</p>
            <form method="post" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data" class="mt-11">
                @csrf
                @method("PATCH")
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/' . $event->image) }}" width="100" class="img-thumbnail"/>
                    <input value="{{$event->image}}" type="hidden" name="old_image"/>
                    <input type="file" name="image"/>
                </div>
                <br>
                <div class="flex items-center space-x-9">
                    <input value="{{$event->name}}" type="text" name="name" placeholder="Name"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    <input value="{{$event->date}}" type="date" name="date" placeholder="Date" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center space-x-9">
                    <input value="{{$event->details}}" type="text" name="details" placeholder="Details"
                              class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "></input>
                </div>
                <div class="flex items-center space-x-9">
                    <input value="{{$event->mobile}}" type="text" name="mobile" placeholder="Contact Number"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    <input value="{{$event->places}}" type="number" name="places" placeholder="Places Number"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center space-x-9">
                    <input value="{{$event->address}}" type="text" name="address" placeholder="Address"
                              class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "></input>
                </div>
                <div class="flex items-center space-x-9">
                    <input value="{{$event->sponsor}}" type="text" name="sponsor" placeholder="sponsor"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    <input value="{{$event->participants}}" type="text" name="participants" placeholder="participants" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center space-x-9 mt-8">
                    {{--                    <div tabindex="0"--}}
                    {{--                         class="focus:outline-none focus:ring-2 focus:ring-gray-400 w-1/2 bg-white  border rounded border-gray-200   py-2.5 px-3">--}}
                    {{--                        <select name="type" aria-label="select an option"--}}
                    {{--                                class="text-sm text-gray-500 w-full focus:outline-none">--}}
                    {{--                            <option selected="" disabled="" value="">Category</option>--}}
                    {{--                            @foreach ($type as $type)--}}
                    {{--                                <option value="{{$type ->type_name}}"> {{$type -> type_name}}</option>--}}
                    {{--                            @endforeach--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}
                </div>
                <div class="flex items-center justify-between mt-9">
                    <a href="{{ route('event.index') }}" aria-label="add user" role="button"
                       class="focus:ring-2 focus:ring-offset-2 focus:ring-white focus:outline-none px-6 py-3 bg-white hover:bg-opacity-80 shadow rounded text-sm text-indigo-800">Cancel</a>
                    <input type="submit" value="Validate" aria-label="add user" role="button"
                           class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 focus:outline-none px-6 py-3 bg-indigo-700 hover:bg-opacity-80 shadow rounded text-sm text-white"/>
                </div>
            </form>
        </div>
    </div>

@stop
