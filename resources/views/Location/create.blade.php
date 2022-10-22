@extends('components.layout')

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




    <div class="flex justify-center w-full sm:px-6 mt-10">
        <div class="px-4 md:px-10 pt-6 md:pt-12 md:pb-4 pb-7">
            <p class="text-center text-2xl font-semibold mb-10">Add New Bike</p>
            <form method="post" action="{{ route('location.store') }}" enctype="multipart/form-data" class="mt-11">
                @csrf
                <div class="flex items-center space-x-9 mt-8">
                    <input type="text" name="user" placeholder="User"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>

                <div>
                    <div tabindex="0"
                         class="focus:outline-none focus:ring-2 focus:ring-gray-400 w-1/2 bg-white  border rounded border-gray-200   py-2.5 px-3">
                        <select name="velo" aria-label="select an option"
                                class="text-sm text-gray-500 w-full focus:outline-none">
                            <option selected="" disabled="" value="">Velo</option>
                            @foreach ($velo as $velo)
                                <option value="{{$velo ->marque}}"> {{$velo -> marque}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex items-center space-x-9 mt-8">
                    <input type="number" name="duree" placeholder="duree"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                {{--                <div class="mt-8">--}}
                {{--                    <textarea placeholder="Description"--}}
                {{--                              class="focus:outline-none focus:ring-2 focus:ring-gray-400 py-3 pl-3 overflow-y-auto h-24 border placeholder-gray-500 rounded border-gray-200   w-full resize-none focus:outline-none"></textarea>--}}
                {{--                </div>--}}
                <div class="flex items-center justify-between mt-9">
                    <a href="{{ route('location.index') }}" aria-label="add user" role="button"
                       class="focus:ring-2 focus:ring-offset-2 focus:ring-white focus:outline-none px-6 py-3 bg-white hover:bg-opacity-80 shadow rounded text-sm text-indigo-800">Cancel</a>
                    <input type="submit" value="Validate" aria-label="add user" role="button"
                           class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 focus:outline-none px-6 py-3 bg-indigo-700 hover:bg-opacity-80 shadow rounded text-sm text-white"/>
                </div>
            </form>
        </div>
    </div>

@endsection('content')
