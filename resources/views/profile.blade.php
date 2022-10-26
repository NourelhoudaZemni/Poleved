

@extends('components.layout')

@section('content')






<body>
<div class="bg-gray-100">
    <div class="relative py-6 lg:py-8">
        <img class="z-0 w-full h-full absolute inset-0 object-cover"
             src="https://tuk-cdn.s3.amazonaws.com/assets/webapp/common/bg_image_dark.png" alt="bg" />
        <div
            class="z-10 relative container px-6 mx-auto flex flex-col md:flex-row items-start md:items-center justify-between">
            <div>
                <h4 tabindex="0" class="focus:outline-none text-2xl font-bold leading-tight text-white">My Profile
                </h4>
                <ul class="flex flex-col md:flex-row items-start md:items-center text-gray-300 text-sm mt-3">
                    <li class="flex items-center mt-4 md:mt-0">
                        <div class="mr-1">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg3.svg"
                                 alt="date">
                        </div>
                        <span tabindex="0" class="focus:outline-none">Created at {{\Illuminate\Support\Facades\Auth::user()->created_at}}</span>
                    </li>
                </ul>
            </div>
            <div class="mt-6 md:mt-0">
                <button
                    type="submit"
                    class="focus:ring-2  focus:ring-indigo-300 focus:bg-indigo-600  transition focus:outline-none duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Save
                    changes</button>
            </div>
        </div>
    </div>
    <div aria-label="form" tabindex="0" class="focus:outline-none xl:w-10/12 w-full px-8">
        <div class="xl:px-24">
            <div class="px-5 py-4 bg-gray-100 rounded-lg flex items-center justify-between mt-7">
                <div class="flex items-center">
                    <div tabindex="0" class="focus:outline-none flex-shrink-0">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_layout_wizard2-svg1.svg"
                             alt="lock">
                    </div>

                    <p tabindex="0" class="focus:outline-none text-sm text-gray-800 pl-3">We take privacy issues
                        seriously. You can be sure that your personal data is securely protected.</p>
                </div>

            </div>
            <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16">
                <div class="w-80">
                    <div class="flex items-center">
                        <h1 tabindex="0"
                            class="focus:outline-none text-xl font-medium pr-2 leading-5 text-gray-800">Personal
                            Information</h1>
                    </div>
                    <p tabindex="0" class="focus:outline-none mt-4 text-sm leading-5 text-gray-600">Information
                        about the section could go here and a brief description of how this might be used.</p>
                </div>

                <form enctype="multipart/form-data">
                    <div>
                        <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                            <div class="md:w-full">
                                <label class="text-sm leading-none text-gray-800" id="firstName">Full Name</label>
                                <input type="name" tabindex="0"
                                       name="name"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->name}}"
                                       class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                       aria-labelledby="firstName" placeholder="John White" />
                            </div>
                        </div>
                        <div class="md:flex items-center lg:ml-24 mt-8">
                            <div class="md:w-full">
                                <label class="text-sm leading-none text-gray-800" id="firstName">Email </label>
                                <input type="email" tabindex="0"
                                       name="email"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                       class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                       aria-labelledby="firstName" placeholder="John White" />
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16 mb-4">
                <div class="w-80">
                    <div class="flex items-center">
                        <h1 tabindex="0"
                            class="focus:outline-none text-xl font-medium pr-2 leading-5 text-gray-800">Security
                        </h1>
                    </div>
                    <p tabindex="0" class="focus:outline-none mt-4 text-sm leading-5 text-gray-600">Information
                        about the section could go here and a brief description of how this might be used.</p>
                </div>
                <div>
                    <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                        <div class="md:w-64">
                            <label class="text-sm leading-none text-gray-800" id="password">Password</label>
                            <input type="name" tabindex="0"
                                   class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                   aria-labelledby="password" placeholder="Enter your password" />
                        </div>
                        <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                            <label class="text-sm leading-none text-gray-800" id="securityCode">Security
                                Code</label>
                            <input type="name" tabindex="0"
                                   class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                   aria-labelledby="securityCode" placeholder="Enter your security code" />
                        </div>
                    </div>
                    <div class="md:flex items-center lg:ml-24 mt-8">
                        <div class="md:w-64">
                            <label class="text-sm leading-none text-gray-800" id="recoverEmail">Recovery Email
                                address</label>
                            <input type="name" tabindex="0"
                                   class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                   placeholder="Your recovery email" />
                        </div>
                        <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                            <label class="text-sm leading-none text-gray-800" id="altPhone">Alternate phone
                                number</label>
                            <input type="name" tabindex="0"
                                   class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                   aria-labelledby="altPhone" placeholder="Your alternate phone number" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection('content')
