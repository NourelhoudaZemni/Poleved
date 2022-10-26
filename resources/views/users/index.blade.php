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
                    Users Management</p>
            </div>
        </div>
        <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800  ">
                    <th class="font-normal text-left pl-4">Full Name</th>
                    <th class="font-normal text-left pl-12">Email</th>
                    <th class="font-normal text-left pl-12">Role</th>
                </tr>
                </thead>
                <tbody class="w-full">
                @if(count($data) > 0)
                    @foreach($data as $row)
                        <tr tabindex="0"
                            class="focus:outline-none h-20 text-sm leading-none text-gray-800   bg-white   hover:bg-gray-100   border-b border-t border-gray-100 ">
{{--                            <td class="pl-4 cursor-pointer">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <div class="w-10 h-10">--}}
{{--                                        <img class="w-full h-full" src="{{ asset('images/' . $row->image) }}" width="75"--}}
{{--                                             alt="UX Design and Visual Strategy"/>--}}
{{--                                    </div>--}}
{{--                                    --}}{{--                            <div class="pl-4">--}}
{{--                                    --}}{{--                                <p class="font-medium">UX Design &amp; Visual Strategy</p>--}}
{{--                                    --}}{{--                                <p class="text-xs leading-3 text-gray-600  pt-2">Herman Group</p>--}}
{{--                                    --}}{{--                            </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
                            <td class="pl-12">
                                <p class="font-medium">{{ $row->name }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->email }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->role }}</p>
                            </td>
                            <td class="px-7 2xl:px-0">
                                <form class="flex" method="post" action="{{ route('users.destroy', $row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <input type="submit" value="Delete"/>
                                    </div>
                                </form>
                                <form method="post" action="{{route('updateRole',$row->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <input type="submit" value="Change Role"/>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Users Found</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! $data->links() !!}
        </div>
    </div>

@endsection
