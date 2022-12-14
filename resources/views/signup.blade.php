

@extends('components.layout')

@section('content')







<body>

<div class="bg-gray-100">
    <div
        class="h-screen xl:px-20 md:px-10 sm:px-6 px-4 md:py-12 py-9 2xl:mx-auto 2xl:container md:flex items-center justify-center">
        <div class=" md:hidden sm:mb-8 mb-6">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg1.svg" alt="logo">
        </div>
        <div
            class="bg-white shadow-lg rounded xl:w-1/3 lg:w-5/12 md:w-1/2 w-full lg:px-10 sm:px-6 sm:py-10 px-2 py-6">
            <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Create your
                account</p>
            <p tabindex="0" class="focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500">Already
                have an account? <a href="{{route('login')}}"
                                    class="hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none text-gray-800 cursor-pointer">
                    Login here</a></p>
            <div class="w-full flex items-center justify-between py-5">
                <hr class="w-full bg-gray-400" />
                <hr class="w-full bg-gray-400" />
            </div>

            <form method="post" action="{{route('postsignup')}}">
                @csrf
                <div>
                    <label for="name" class="text-sm font-medium leading-none text-gray-800"> Full Name </label>
                    <input id="name" aria-labelledby="Name" type="text" name="name"
                           class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                           placeholder="e.g: john chon " />
                    @if ($errors->has('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div>
                    <label for="email" class="text-sm font-medium leading-none text-gray-800"> Email </label>
                    <input id="email" aria-labelledby="email" type="email" name="email"
                           class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                           placeholder="e.g: john.chon@gmail.com " />
                    @if ($errors->has('email'))
                        <span class="text-red-600">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mt-6 w-full">
                    <label for="password" class="text-sm font-medium leading-none text-gray-800"> Password </label>
                    <div class="relative flex items-center justify-center">
                        <input placeholder="***************" id="password" type="password" name="password"
                               class="bg-gray-200 border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2" />
                        <div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showPassword()">
                            <div id="show">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg5.svg" alt="eye">
                            </div>
                            <div id="hide" class="hidden">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg6.svg" alt="eye">
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-red-600">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="mt-8">
                    <button type="submit" role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">Create
                        my account
                    </button>
                </div>
            </form>




        </div>
        <div class="xl:w-1/3 md:w-1/2 lg:ml-16 ml-8 md:mt-0 mt-6">
            <a href="/" class="pl-8 md:block hidden">
                <img src="../../assets/logo.svg" class="w-[200px]" alt="logo">
            </a>
            <div class="flex items-start mt-8">
                <div>
                    <img class="w-24" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg7.svg"
                         alt="quote">
                </div>
                <p class="sm:text-2xl text-xl leading-7 text-gray-600 pl-2.5">Don't miss your gold chance, it's time
                    to discover new places, create your account and join us ??????</p>
            </div>
            <div class="flex items-center pl-8 mt-10">
                <img src="https://img.icons8.com/color/48/000000/facebook-new.png" />
                <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" />
                <img src="https://img.icons8.com/color/48/000000/linkedin-circled--v1.png" />
            </div>
        </div>
    </div>
</div>



</body>
@endsection('content')
