@extends('admin.layout')

@section('content')

    @if($message = Session::get('success'))

        <div class="alert alert-success">
            {{ $message }}
        </div>

    @endif

    <div class="w-full sm:px-6">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                   class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800  ">
                    Balade's Category List</p>
                <div>
                    <button
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <a href="{{ route('categories.create') }}" class="text-sm font-medium leading-none text-white">Add Balade's Category</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800  ">
                    <th class="font-normal text-left pl-20">Categorie Name</th>
                </tr>
                </thead>
                <tbody class="w-full">
                @if(count($data) > 0)
                    @foreach($data as $row)
                        <tr tabindex="0"
                            class="focus:outline-none h-20 text-sm leading-none text-gray-800   bg-white   hover:bg-gray-100   border-b border-t border-gray-100 ">
                            <td class="pl-12">
                                <p class="text-sm font-medium leading-none text-gray-800">{{ $row->category_name }}</p>
                            </td>
                            <td class="px-7 2xl:px-0">
                                <form class="flex" method="post" action="{{ route('categories.destroy', $row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <br>
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <a href="{{ route('categories.show', $row->id) }}">View</a>
                                    </div>
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <a href="{{ route('categories.edit', $row->id) }}">Edit</a>
                                    </div>
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <input type="submit" value="Delete"/>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Balade's Category Found</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! $data->links() !!}
        </div>
    </div>

@endsection
