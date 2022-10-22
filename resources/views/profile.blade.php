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
        <div class="relative py-6 lg:py-8">
            <img class="z-0 w-full h-full absolute inset-0 object-cover"
                src="https://tuk-cdn.s3.amazonaws.com/assets/webapp/common/bg_image_dark.png" alt="bg" />
            <div
                class="z-10 relative container px-6 mx-auto flex flex-col md:flex-row items-start md:items-center justify-between">
                <div>
                    <h4 tabindex="0" class="focus:outline-none text-2xl font-bold leading-tight text-white">My Profile
                    </h4>
                    <ul class="flex flex-col md:flex-row items-start md:items-center text-gray-300 text-sm mt-3">
                        <li class="flex items-center mr-4">
                            <div class="mr-1">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg1.svg"
                                    alt="Remote">
                            </div>
                            <!-- <span tabindex="0" class="focus:outline-none mr-3">Remote</span> -->
                        </li>
                        <li class="flex items-center mr-4 mt-4 md:mt-0">
                            <div class="mr-1">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg2.svg"
                                    alt="Trending">
                            </div>
                            <!-- <span tabindex="0" class="focus:outline-none mr-3"> Trending</span> -->
                        </li>
                        <li class="flex items-center mt-4 md:mt-0">
                            <div class="mr-1">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg3.svg"
                                    alt="date">
                            </div>
                            <span tabindex="0" class="focus:outline-none">Started on 29 Jan 2020</span>
                        </li>
                    </ul>
                </div>
                <div class="mt-6 md:mt-0">
                    <button
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
                    <button aria-label="Close this banner"
                        class="md:block hidden focus:outline-none focus:ring-2 focus:ring-gray-700 rounded">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_layout_wizard2-svg2.svg"
                            alt="cross">
                    </button>
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
                    <div>
                        <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                            <div class="md:w-64">
                                <label class="text-sm leading-none text-gray-800" id="firstName">First name</label>
                                <input type="name" tabindex="0"
                                    class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                    aria-labelledby="firstName" placeholder="John" />
                            </div>
                            <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                <label class="text-sm leading-none text-gray-800" id="lastName">Last name</label>
                                <input type="name" tabindex="0"
                                    class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                    aria-labelledby="lastName" placeholder="Doe" />
                            </div>
                        </div>
                        <div class="md:flex items-center lg:ml-24 mt-8">
                            <div class="md:w-64">
                                <label class="text-sm leading-none text-gray-800" id="emailAddress">Email
                                    address</label>
                                <input type="email" tabindex="0"
                                    class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                    aria-labelledby="emailAddress" placeholder="youremail@example.com" />
                            </div>
                            <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                <label class="text-sm leading-none text-gray-800" id="phone">Phone number</label>
                                <input type="name" tabindex="0"
                                    class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                    aria-labelledby="phone" placeholder="123-1234567" />
                            </div>
                        </div>
                    </div>
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

</html>