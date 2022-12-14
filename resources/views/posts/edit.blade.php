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
            <p class="text-center text-2xl font-semibold mb-10">Edit Post</p>
            <form method="post" action="{{ route('posts.update', $posts->id) }}" enctype="multipart/form-data" class="mt-11">
                @csrf
                @method("PATCH")
                <div class="flex items-center space-x-9">
                    <input value="{{$posts->title}}" type="text" name="title" placeholder="Title"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                    <input value="{{$posts->date}}" type="date" name="date" placeholder="Date" min="0"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center space-x-9">
                    <textarea  name="contenu" placeholder="contenu"
                              class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200 my-5  min-h-[150px]   ">
                        {{$posts->contenu}}

                    </textarea>
                </div>
                <div class="flex items-center space-x-9">
                    <textarea  name="description" placeholder="add short description"
                               class="focus:ring-2 focus:ring-gray-400 w-full focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200 mb-4 min-h-[100px] ">
                        {{  $posts->description }}
                    </textarea>
                </div>
                <div class="flex items-center space-x-9">
                    <input value="{{$posts->author}}" type="text" name="author" placeholder="Add Author"
                           class="focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white  border rounded border-gray-200  "/>
                </div>
                <div class="flex items-center justify-between mt-9">
                    <a href="{{ route('posts.index') }}" aria-label="add user" role="button"
                       class="focus:ring-2 focus:ring-offset-2 focus:ring-white focus:outline-none px-6 py-3 bg-white hover:bg-opacity-80 shadow rounded text-sm text-indigo-800">Cancel</a>
                    <input type="submit" value="Validate" aria-label="add user" role="button"
                           class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 focus:outline-none px-6 py-3 bg-indigo-700 hover:bg-opacity-80 shadow rounded text-sm text-white"/>
                </div>
            </form>
        </div>
    </div>

@stop
