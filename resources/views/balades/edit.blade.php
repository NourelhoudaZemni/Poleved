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
            <p class="text-center text-2xl font-semibold mb-10">Update Balade Informations</p>
            <form method="post" action="{{ route('balades.update', $balades->id) }}" enctype="multipart/form-data" class="mt-11">
                @csrf
                @method('PUT')
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/' . $balades->image) }}" width="100" class="img-thumbnail"/>
                    <input value="{{$balades->image}}" type="hidden" name="old_image"/>
                    <input type="file" name="image"/>
                </div>
                <br>
                <div class="flex items-center space-x-9">
                    <input value="{{$balades->title}}" type="text" name="title" placeholder="Title"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    <input value="{{$balades->quantity}}" type="number" name="quantity" placeholder="Quantity" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center space-x-9">
                    <input value="{{$balades->price}}" type="number" name="price" placeholder="Price"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    <input value="{{$balades->discount_price}}" type="number" name="discount_price" placeholder="Discount" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>% Off
                </div>
                <div class="flex items-center space-x-9">
                    <input value="{{$balades->description}}" type="text" name="description" placeholder="Description"
                           class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center space-x-9 mt-8">
                    <div tabindex="0"
                         class="focus:outline-none focus:ring-2 focus:ring-gray-400 w-full bg-white  border rounded border-gray-200   py-2.5 px-3">
                        <select value="{{$balades->category}}" name="category" aria-label="select an option"
                                class="text-sm text-gray-500 w-full focus:outline-none">
                            <option selected="" disabled="" value="">Category</option>
                            @foreach ($categories as $categories)
                                <option value="{{$categories ->category_name}}"> {{$categories -> category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-9">
                    <a href="{{ route('balades.index') }}" aria-label="add user" role="button"
                       class="focus:ring-2 focus:ring-offset-2 focus:ring-white focus:outline-none px-6 py-3 bg-white hover:bg-opacity-80 shadow rounded text-sm text-indigo-800">Cancel</a>
                    <input type="submit" value="Save Changes" aria-label="add user" role="button"
                           class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 focus:outline-none px-6 py-3 bg-indigo-700 hover:bg-opacity-80 shadow rounded text-sm text-white"/>
                </div>
            </form>
        </div>
    </div>

@endsection('content')
