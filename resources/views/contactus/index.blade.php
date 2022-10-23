@extends('admin.layout')
@section('content')
    <div class="w-full sm:px-6">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                   class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800  ">
                    Contacts & Messages</p>
            </div>
        </div>
        <div class="bg-white shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800  ">
                    <th class="font-normal text-left pl-4">Full Name</th>
                    <th class="font-normal text-left pl-12">Email</th>
                    <th class="font-normal text-left pl-12">Phone</th>
                    <th class="font-normal text-left pl-12">Message</th>
                    <th class="font-normal text-left pl-12">Sended at</th>
                </tr>
                </thead>
                <tbody class="w-full">
                @if(count($contactus) > 0)
                    @foreach($contactus as $row)
                        <tr tabindex="0"
                            class="focus:outline-none h-20 text-sm leading-none text-gray-800   bg-white   hover:bg-gray-100   border-b border-t border-gray-100 ">
                            <td class="pl-12">
                                <p class="font-medium">{{ $row->full_name }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->email }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->phone }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->message }}</p>
                            </td>
                            <td class="pl-20">
                                <p class="font-medium">{{ $row->created_at }}</p>
                            </td>
                            <td class="px-7 2xl:px-0">
                                    <div tabindex="0"
                                         class="text-center focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                        <a href="{{ route('contactus.show', $row->id) }}">View</a>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Messages or Contacts Found</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! $contactus->links() !!}
        </div>
    </div>

@endsection
