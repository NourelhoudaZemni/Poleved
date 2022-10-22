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




    <div class="flex justify-center w-full sm:px-6 mt-10">
        <div class="px-4 md:px-10 pt-6 md:pt-12 md:pb-4 pb-7">
            <p class="text-center text-2xl font-semibold mb-10">Add New Bike</p>
            <form method="post" action="{{ route('velo.update', $velo->id) }}" enctype="multipart/form-data" class="mt-11">
                @csrf
                @method('PUT')
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/' . $velo->image) }}" width="100" class="img-thumbnail"/>
                    <input type="hidden" name="hidden_image" value="{{ $velo->image }}"/>
                </div>
                <br>
                <div class="flex items-center space-x-9">
                    <input value="{{ $velo->marque }}" type="text" name="marque" placeholder="Brand"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    <input value="{{ $velo->etat }}" type="text" name="etat" placeholder="Status" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center space-x-9 mt-8">
                    <input value="{{ $velo->prix }}" type="number" name="prix" placeholder="Price"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center justify-between mt-9">
                    <a href="{{ route('velo.index') }}" aria-label="add user" role="button"
                       class="focus:ring-2 focus:ring-offset-2 focus:ring-white focus:outline-none px-6 py-3 bg-white hover:bg-opacity-80 shadow rounded text-sm text-indigo-800">Cancel</a>
                    <input type="hidden" name="hidden_id" value="{{ $velo->id }}"/>
                    <input type="submit" value="Save Changes" aria-label="add user" role="button"
                           class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 focus:outline-none px-6 py-3 bg-indigo-700 hover:bg-opacity-80 shadow rounded text-sm text-white"/>
                </div>
            </form>
        </div>
    </div>

@endsection('content')
