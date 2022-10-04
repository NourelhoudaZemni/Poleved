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

    <div class="bg-indigo-50">
            <div class="relative py-6 lg:py-8">
                <img class="z-0 w-full h-full absolute inset-0 object-cover" src="https://tuk-cdn.s3.amazonaws.com/assets/webapp/common/bg_image_dark.png" alt="bg" />
                <div class="z-10 relative container px-6 mx-auto flex flex-col md:flex-row items-start md:items-center justify-between">
                    <div>
                        <h4 tabindex="0" class="focus:outline-none text-2xl font-bold leading-tight text-white">My Profile</h4>
                        <ul class="flex flex-col md:flex-row items-start md:items-center text-gray-300 text-sm mt-3">
                            <li class="flex items-center mr-4">
                                <div class="mr-1">
                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg1.svg" alt="Remote">
                                </div>
                                <span tabindex="0" class="focus:outline-none mr-3">Remote</span>
                            </li>
                            <li class="flex items-center mr-4 mt-4 md:mt-0">
                                <div class="mr-1">
                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg2.svg" alt="Trending">
                                </div>
                                <span tabindex="0" class="focus:outline-none mr-3"> Trending</span>
                            </li>
                            <li class="flex items-center mt-4 md:mt-0">
                                <div class="mr-1">
                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg3.svg" alt="date">
                                </div>
                                <span tabindex="0" class="focus:outline-none">Started on 29 Jan 2020</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 md:mt-0">
                        <button class="focus:ring-2  focus:ring-indigo-300 focus:bg-indigo-600  transition focus:outline-none duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Save changes</button>
                    </div>
                </div>
            </div>
    </div>



</body>

</html>