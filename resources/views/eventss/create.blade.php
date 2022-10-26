@extends('admin.layout')
@section('content')
    <div class="flex justify-center w-full sm:px-6">
        <div class="px-4 md:px-10 pt-6 md:pt-12 md:pb-4 pb-7">
            <p class="text-center text-2xl font-semibold mb-10">Add New Event</p>
            <form method="post" action="{{ route('event.store') }}" enctype="multipart/form-data" class="mt-11">
                @csrf
                <div class="flex items-center justify-center">
                    <input type="file" name="image"/>
                    @if ($errors->has('image'))
                        <span class="text-red-600">{{ $errors->first('image') }}</span>
                    @endif
                </div>

                <div class="flex items-center space-x-9">
                    <input type="text" name="name" placeholder="Name"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    @if ($errors->has('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
                    <input type="date" name="date" placeholder="Date" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    @if ($errors->has('date'))
                        <span class="text-red-600">{{ $errors->first('date') }}</span>
                    @endif
                </div>
                <div class="flex items-center space-x-9">
                    <textarea type="text" name="details" placeholder="Details"
                           class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "></textarea>
                    @if ($errors->has('details'))
                        <span class="text-red-600">{{ $errors->first('details') }}</span>
                    @endif
                </div>
                <div class="flex items-center space-x-9">
                    <input type="text" name="mobile" placeholder="Contact Number"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    @if ($errors->has('mobile'))
                        <span class="text-red-600">{{ $errors->first('mobile') }}</span>
                    @endif
                    <input type="number" name="places" placeholder="Places Number"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    @if ($errors->has('places'))
                        <span class="text-red-600">{{ $errors->first('places') }}</span>
                    @endif
                </div>
                <div class="flex items-center space-x-9">
                    <textarea type="text" name="address" placeholder="Address"
                              class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "></textarea>
                    @if ($errors->has('address'))
                        <span class="text-red-600">{{ $errors->first('address') }}</span>
                    @endif
                </div>
                <div class="flex items-center space-x-9">
                    <input type="text" name="participants" placeholder="Participants" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    @if ($errors->has('participants'))
                        <span class="text-red-600">{{ $errors->first('participants') }}</span>
                    @endif
                </div>
                <div class="flex items-center space-x-9 mt-8">
                    <div tabindex="0"
                         class="focus:outline-none focus:ring-2 focus:ring-gray-400 w-full bg-white  border rounded border-gray-200   py-2.5 px-3">
                        <select name="sponsor" aria-label="select an option"
                                class="text-sm text-gray-500 w-full focus:outline-none">
                            <option selected="" disabled="" value="">Choose the sponsor</option>
                            @foreach ($sponsor as $sponsor)
                                <option value="{{$sponsor -> name}}"> {{$sponsor -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('sponsor'))
                        <span class="text-red-600">{{ $errors->first('sponsor') }}</span>
                    @endif
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
