<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('default')
    <title>MondoBikes</title>
</head>

<body>

<div class="bg-gray-100">
    <!-- navbar -->
    <nav id="navbar" class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4">
        <!-- For large and Medium-sized Screen -->
        <div class="flex justify-between ">
            @if (Auth::check())
                @if(Auth::User()->role == 1)
                    <div class="hidden sm:flex flex-row items-center space-x-12">
                        <a href="/admin" class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center">Admin</a>
                    </div>
                @endif
            @endif
            <div class="hidden sm:flex flex-row items-center space-x-6">
                <a href="/OurBikes">Our Bikes</a>
                <a href="/OurEvents">Our Events</a>
                <a href="/OurBalades">Our Balades</a>
                <a href="/YourLocations">Your Locations</a>
            </div>
            <div class=" flex space-x-3 items-center">
                <a href="/" class="pl-8 md:block hidden">
                    <img src="../../assets/logo.svg" class="w-[40px]" alt="logo">
                </a>
                <h1 class=" font-normal text-2xl leading-6 text-gray-800"><a href="/">MondoBikes</a></h1>
            </div>
            @if (Auth::check())
                <div class="hidden sm:flex flex-row items-center space-x-6">
                    <a  href="/profile" class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-indigo-700 bg-white border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center">Profile</a>
                    <a href="{{route('signout')}}" class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center">Logout</a>
                </div>
            @else
            <div class="hidden sm:flex flex-row space-x-4">
                <button
                    class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-indigo-700 bg-white border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center"><a
                        href="{{route('register')}}">Register</a>
                </button>
                <button
                    class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center"><a
                        href="{{route('login')}}" class="text-white">Log In</a></button>
            </div>
            @endif
            <!-- Burger Icon -->
            <div id="bgIcon" onclick="toggleMenu()"
                 class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800  flex justify-center items-center sm:hidden cursor-pointer">
                <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg6.svg" alt="burger" />
                <img class=" hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg7.svg"
                     alt="cross" />
            </div>
        </div>

        <!-- Mobile and small-screen devices (toggle Menu) -->
        <div id="MobileNavigation" class="hidden sm:hidden mt-4 mx-auto">
            <div class="flex flex-row items-center justify-center space-x-6">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg1.svg" alt="twitter" />
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg2.svg" alt="facebook" />
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg3.svg" alt="linkdin" />
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg4.svg" alt="instagram" />
            </div>
            <div class="flex flex-col gap-4 mt-4 w-80 mx-auto ">
                <button
                    class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-indigo-700 bg-indigo-600 bg-opacity-0 hover:opacity-100 duration-100 border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center">Sign
                    Up</button>
                <button
                    class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center">Sign
                    In</button>
            </div>
        </div>
    </nav>


    @yield('content')


    <!-- Footer -->
    <div class="bg-linear-pink-invert py-12 px-4">
        <div tabindex="0" aria-label="footer"
             class="focus:outline-none mx-auto container flex flex-col items-center justify-center">
            <div tabindex="0" aria-label="prodify logo" role="img">
                <a href="/" class=" pl-8 md:block hidden">
                    <img src="../../assets/logo.svg" class="w-[80px]" alt="logo">
                </a>
            </div>
            <div class="text-black flex flex-col md:items-center f-f-l pt-3">
                <h1 tabindex="0" class="focus:outline-none  text-2xl font-black ml-10">MondoBikes</h1>
                <div class="my-6 text-base text-color f-f-l">
                    <ul class="md:flex items-center">
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/contact"
                                                                           class="focus:outline-none   focus:underline hover:text-gray-500">Contact us </a>
                        </li>
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="#Features"
                                                                           class="focus:outline-none   focus:underline hover:text-gray-500">Features </a></li>
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                                                           class="focus:outline-none   focus:underline hover:text-gray-500">License </a></li>
                        <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="#How_It_Works"
                                                                           class="focus:outline-none   focus:underline hover:text-gray-500">Help </a></li>
                        <li class="cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)"
                                                                   class="focus:outline-none focus:underline  hover:text-gray-500">Privacy Policy </a>
                        </li>
                    </ul>
                </div>
                <div class="text-sm text-color mb-10 f-f-l">
                    <p tabindex="0" class=" focus:outline-none">© 2022. All rights reserved</p>
                </div>
            </div>
            <div class="w-9/12 h-0.5 bg-gray-100  rounded-full"></div>
            <div class="flex items-center pl-8 mt-4">
                <img src="https://img.icons8.com/color/48/000000/facebook-new.png" />
                <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" />
                <img src="https://img.icons8.com/color/48/000000/linkedin-circled--v1.png" />
            </div>
        </div>
    </div>

    <a href="#navbar" class="fixed top-[85vh] right-10 ">
        <img
            src="https://img.icons8.com/external-others-inmotus-design/40/000000/external-Up-basic-web-ui-elements-others-inmotus-design-2.png" />
    </a>
</div>



</body>

</html>
