@extends('components.layout')

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
                    Bike List</p>
                <div>
                    <button
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <a href="{{ route('velo.create') }}" class="text-sm font-medium leading-none text-white">Add New
                            Bike</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800  ">
                    <th class="font-normal text-left pl-4">Picture</th>
                    <th class="font-normal text-left pl-12">Brand</th>
                    <th class="font-normal text-left pl-12">Status</th>
                    <th class="font-normal text-left pl-20">Price</th>
                    <th class="font-normal text-left pl-20">Type</th>
                </tr>
                </thead>
                <tbody class="w-full">
                @if(count($data) > 0)
                    @foreach($data as $row)
                        <tr tabindex="0"
                            class="focus:outline-none h-20 text-sm leading-none text-gray-800   bg-white   hover:bg-gray-100   border-b border-t border-gray-100 ">
                            <td class="pl-4 cursor-pointer">
                                <div class="flex items-center">
                                    <div class="w-10 h-10">
                                        <img class="w-full h-full" src="{{ asset('images/' . $row->image) }}" width="75"
                                             alt="UX Design and Visual Strategy"/>
                                    </div>
                                    {{--                            <div class="pl-4">--}}
                                    {{--                                <p class="font-medium">UX Design &amp; Visual Strategy</p>--}}
                                    {{--                                <p class="text-xs leading-3 text-gray-600  pt-2">Herman Group</p>--}}
                                    {{--                            </div>--}}
                                </div>
                            </td>
                            <td class="pl-12">
                                <p class="text-sm font-medium leading-none text-gray-800">{{ $row->marque }}</p>
                            </td>
                            <td class="pl-12">
                                <p class="font-medium">{{ $row->etat }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->prix }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->type }}</p>
                            </td>
                            {{--                    <td class="pl-16">--}}
                            {{--                        <div class="flex items-center">--}}
                            {{--                            <img class="shadow-md w-8 h-8 rounded-full" src="https://cdn.tuk.dev/assets/templates/olympus/projects(8).png" alt="collaborator 1" />--}}
                            {{--                            <img class="shadow-md w-8 h-8 rounded-full -ml-2" src="https://cdn.tuk.dev/assets/templates/olympus/projects(9).png" alt="collaborator 2" />--}}
                            {{--                            <img class="shadow-md w-8 h-8 rounded-full -ml-2" src="https://cdn.tuk.dev/assets/templates/olympus/projects(10).png" alt="collaborator 3" />--}}
                            {{--                            <img class="shadow-md w-8 h-8 rounded-full -ml-2" src="https://cdn.tuk.dev/assets/templates/olympus/projects(11).png" alt="collaborator 4" />--}}
                            {{--                        </div>--}}
                            {{--                    </td>--}}
                            <td class="px-7 2xl:px-0">
                                <form class="flex" method="post" action="{{ route('velo.destroy', $row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <br>
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <a href="{{ route('velo.show', $row->id) }}">View</a>
                                    </div>
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <a href="{{ route('velo.edit', $row->id) }}">Edit</a>
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
                        <td colspan="5" class="text-center">No Velo Found</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! $data->links() !!}
        </div>
    </div>

@endsection
