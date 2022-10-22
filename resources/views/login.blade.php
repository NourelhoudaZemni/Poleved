<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('default')
    <title>Document</title>
</head>

<body>

    <div class="bg-gray-100">
        <!-- NavBar -->
        <nav id="navbar" class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4">
            <!-- For large and Medium-sized Screen -->
            <div class="flex justify-between ">
                <div class="hidden sm:flex flex-row items-center space-x-6">
                    <img class="  p-1 rounded  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg1.svg" alt="twitter" />
                    <img class="  p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg2.svg" alt="facebook" />
                    <img class="  p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg3.svg" alt="linkdin" />
                    <img class="  p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg4.svg" alt="instagram" />
                </div>
                <div class=" flex space-x-3 items-center">
                    <a href="/" class="pl-8 md:block hidden">
                        <img src="../../assets/logo.svg" class="w-[40px]" alt="logo">
                    </a>
                    <h1 class=" font-normal text-2xl leading-6 text-gray-800">Velo.tn</h1>
                </div>
                <div class="hidden sm:flex flex-row space-x-4">
                    <button
                        class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-indigo-700 bg-white border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center"><a
                            href="/signup">Sign Up</a></button>
                    <button
                        class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center"><a
                            href="/login" class="text-white">Sign In</a></button>
                </div>

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
        <div
            class="h-screen xl:px-20 md:px-10 sm:px-6 px-4 md:py-12 py-9 2xl:mx-auto 2xl:container md:flex items-center justify-center">
            <div class=" md:hidden sm:mb-8 mb-6">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg1.svg" alt="logo">
            </div>
            <div
                class="bg-white shadow-lg rounded xl:w-1/3 lg:w-5/12 md:w-1/2 w-full lg:px-10 sm:px-6 sm:py-10 px-2 py-6">
                <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Login to your
                    account</p>
                <p tabindex="0" class="focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500">Dont have
                    account? <a href="/signup"
                        class="hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none text-gray-800 cursor-pointer">
                        Sign up here</a></p>
                <button aria-label="Continue with google" role="button"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 p-3 border rounded-lg border-gray-700 flex items-center w-full mt-10 hover:bg-gray-100">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg2.svg" alt="google">
                    <p class="text-base font-medium ml-4 text-gray-700">Connect with Google</p>
                </button>
                <button aria-label="Continue with github" role="button"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 p-3 border rounded-lg border-gray-700 flex items-center w-full mt-4 hover:bg-gray-100">
                    <img src="https://img.icons8.com/color/30/000000/facebook-new.png" />
                    <p class="text-base font-medium ml-4 text-gray-700">Connect with Facebook</p>
                </button>
                <div class="w-full flex items-center justify-between py-5">
                    <hr class="w-full bg-gray-400" />
                    <p class="text-base font-medium leading-4 px-2.5 text-gray-500">OR</p>
                    <hr class="w-full bg-gray-400" />
                </div>
                <div>
                    <label for="email" class="text-sm font-medium leading-none text-gray-800"> Email </label>
                    <input id="email" aria-labelledby="email" type="email"
                        class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                        placeholder="e.g: john@gmail.com " />
                </div>
                <div class="mt-6 w-full">
                    <label for="myInput" class="text-sm font-medium leading-none text-gray-800"> Password </label>
                    <div class="relative flex items-center justify-center">
                        <input id="myInput" type="password"
                            class="bg-gray-200 border rounded text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2" />
                        <div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showPassword()">
                            <div id="show">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg5.svg" alt="eye">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <button role="button"
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">Create
                        my account</button>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 lg:ml-16 ml-8 md:mt-0 mt-6">
                <a href="/" class=" pl-8 md:block hidden">
                    <img src="../../assets/logo.svg" class="w-[200px]" alt="logo">
                </a>
                <div class="flex items-start mt-8">
                    <div>
                        <img class="w-24" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in_2-svg7.svg"
                            alt="quote">
                    </div>
                    <p class="sm:text-2xl text-xl leading-7 text-gray-600 pl-2.5">Do you want to go on a adventure in
                        the nature or discover new places, your are never late , join us 🔥
                    </p>
                </div>
                <div class="flex items-center pl-8 mt-10">
                    <img src="https://img.icons8.com/color/48/000000/facebook-new.png" />
                    <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" />
                    <img src="https://img.icons8.com/color/48/000000/linkedin-circled--v1.png" />
                </div>
            </div>
        </div>

        <div class="bg-linear-pink-invert py-12 px-4">
            <div tabindex="0" aria-label="footer"
                class="focus:outline-none mx-auto container flex flex-col items-center justify-center">
                <div tabindex="0" aria-label="prodify logo" role="img">
                    <a href="/" class=" pl-8 md:block hidden">
                        <img src="../../assets/logo.svg" class="w-[80px]" alt="logo">
                    </a>
                </div>
                <div class="text-black flex flex-col md:items-center f-f-l pt-3">
                    <h1 tabindex="0" class="focus:outline-none  text-2xl font-black">Website Name</h1>
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
    </div>



</body>

</html>