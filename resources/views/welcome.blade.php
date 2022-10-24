@extends('components.layout')

@section('content')



<body>
<div class=" bg-gray-100">
    <div class="mx-auto container relative z-0 px-4 xl:px-0">
        <div class="flex flex-col-reverse md:flex-row">
            <div class="md:w-3/5 md:pt-24 pb-10 lg:py-32 xl:py-48">
                <h1
                    class="text-3xl lg:text-6xl xl:text-7xl font-black text-indigo-700 text-center md:text-left tracking-tighter f-f-i md:w-7/12 leading-tight text-heading-color">
                    ONE WEBSITE TO DISCOVER THE WORLD</h1>
                <h2 class="md:w-8/12 my-4 text-center md:text-left md:my-8 text-gray-700 text-lg lg:text-2xl">Do you
                    want to go outside of your and get a nice ride !</h2>
            </div>
            <div class="w-1/2 sm:w-3/5 h-64 md:h-auto m-auto flex items-center overflow-hidden">
                <img class="md:absolute md:w-1/2 md:-ml-28"
                     src="https://cdn.wbtourisme.be/sites/default/files/styles/facebook/public/Balade-en-v%C3%A9lo.jpg?itok=ulZ7LnEz&hash=832e3e6db1cf720dce2230fbae29a8f9428d4c888b1f7142d0b8caa904b281b7"
                     alt="Laptop with pivot page on screen" role="img" />
            </div>
        </div>
    </div>







    <!-- Features -->
    <div id='Features'>
        <section class="mx-auto container py-20">
            <div class="flex justify-center items-center flex-col">
                <div class="lg:text-6xl md:text-5xl text-4xl font-black leading-10 text-center text-gray-800 ">
                    <h1>Why choose us</h1>
                </div>
                <div
                    class="pt-24 grid lg:grid-cols-3 md:grid-cols-2 justify-center items-center xl:gap-y-16 gap-y-20 gap-x-16 lg:gap-x-20 xl:gap-x-0 lg:px-10 xl:px-0">
                    <div
                        class="cursor-pointer hover:shadow py-6 xl:px-4 rounded xl:w-96 w-60 flex justify-center items-center flex-col">
                        <div class="mb-6">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_7-svg1.svg"
                                 alt="arrow-1">
                        </div>
                        <div class="text-gray-800  text-2xl font-semibold text-center">
                            <h2>Robust workflow</h2>
                        </div>
                        <div class="text-gray-600  mt-2 text-lg text-center">
                            <p>Workflows can help streamline and automate repeatable business tasks.</p>
                        </div>
                    </div>
                    <div
                        class="cursor-pointer hover:shadow py-6 xl:px-4 rounded xl:w-96 w-60 flex justify-center items-center flex-col">
                        <div class="mb-6">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_7-svg2.svg"
                                 alt="3 bars">
                        </div>
                        <div class="text-gray-800  text-2xl font-semibold text-center">
                            <h2>Flexibility</h2>
                        </div>
                        <div class="text-gray-600  mt-2 text-lg text-center">
                            <p>A flexible software architecture is able to changes in usability requirements</p>
                        </div>
                    </div>
                    <div
                        class="cursor-pointer hover:shadow py-6 xl:px-4 rounded xl:w-96 w-60 flex justify-center items-center flex-col">
                        <div class="mb-6">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_7-svg3.svg" alt="bars">
                        </div>
                        <div class="text-gray-800  text-2xl font-semibold text-center">
                            <h2>User friendly</h2>
                        </div>
                        <div class="text-gray-600  mt-2 text-lg text-center">
                            <p>Good usability can improve a new software chances of successful adoption.</p>
                        </div>
                    </div>
                    <div
                        class="cursor-pointer hover:shadow py-6 xl:px-4 rounded xl:w-96 w-60 flex justify-center items-center flex-col">
                        <div class="mb-6">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_7-svg4.svg" alt="bars">
                        </div>
                        <div class="text-gray-800  text-2xl font-semibold text-center">
                            <h2>Multiple layouts</h2>
                        </div>
                        <div class="text-gray-600  mt-2 text-lg text-center">
                            <p>Smaller components are easier to maintain. Program can be divided</p>
                        </div>
                    </div>
                    <div
                        class="cursor-pointer hover:shadow py-6 xl:px-4 rounded xl:w-96 w-60 flex justify-center items-center flex-col">
                        <div class="mb-6">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_7-svg5.svg" alt="bars">
                        </div>
                        <div class="text-gray-800  text-2xl font-semibold text-center">
                            <h2>Better components</h2>
                        </div>
                        <div class="text-gray-600  mt-2 text-lg text-center">
                            <p>Component-based design makes front-end web development faster.</p>
                        </div>
                    </div>
                    <div
                        class="cursor-pointer hover:shadow py-6 xl:px-4 rounded xl:w-96 w-60 flex justify-center items-center flex-col">
                        <div class="mb-6">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_7-svg6.svg" alt="">
                        </div>
                        <div class="text-gray-800  text-2xl font-semibold text-center">
                            <h2>Well organised</h2>
                        </div>
                        <div class="text-gray-600  mt-2 text-lg text-center">
                            <p>No more running around looking for things.When you write things and plan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- How It Works -->

    <div id='How_It_Works' class="mx-auto container f-f-p px-4 xl:px-0 py-24">
        <h1
            class="focus:outline-none text-center text-3xl lg:text-4xl font-extrabold  lg:leading-9 tracking-wider text-gray-900">
            How it works?</h1>
        <div class="md:mt-24 f-f-p">
            <div class="hidden md:flex justify-center w-full">
                <div
                    class="flex flex-col items-center md:items-end md:pr-12 md:border-r-4 border-gray-300 relative md:w-1/2">
                    <div aria-label="sign up" role="img">
                        <img class="focus:outline-none mt-10"
                             src="https://img.icons8.com/plasticine/150/000000/add-user-male.png" />
                    </div>
                    <div aria-label="2" role="img">
                        <img class="focus:outline-none mt-24"
                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg2.svg"
                             alt="">
                    </div>
                    <div class="flex mt-12 flex-col items-center lg:items-end md:w-8/12">
                        <h1 class="focus:outline-none   text-xl font-bold leading-5">Pick your bicycle or rent one
                        </h1>
                        <h2
                            class="focus:outline-none text-gray-500  mt-3 pl-3 text-center md:text-right text-base leading-6 tracking-wide">
                            Choose the date that your available and join an event or an organization .</h2>
                    </div>
                    <div aria-label="transactions" role="img">
                        <img class="focus:outline-none mt-24"
                             src="https://img.icons8.com/external-tulpahn-outline-color-tulpahn/150/000000/external-journey-digital-nomad-tulpahn-outline-color-tulpahn.png" />
                    </div>
                    <img class="hidden md:block absolute right-0 top-0 -mt-2 -mr-1"
                         src="https://cdn.tuk.dev/assets/components/111220/Fs7/line.png" alt="" />
                </div>

                <div
                    class="flex flex-col items-center md:items-start md:pl-12 lg:border-gray-400 mt-20 md:mt-0 md:w-1/2">
                    <div aria-label="1" role="img">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg4.svg"
                             alt="">
                    </div>

                    <div class="flex mt-6 flex-col items-center md:items-start md:w-8/12">
                        <h1 class="focus:outline-none   text-xl font-bold leading-5">SignUp for an Account</h1>
                        <h2 class="focus:outline-none text-gray-500  mt-3 text-base leading-6 tracking-wide">Sign up
                            on our website and complete your profile required information's . </h2>
                    </div>
                    <div aria-label="wallet" role="img">
                        <img class="focus:outline-none mt-32"
                             src="https://img.icons8.com/avantgarde/150/000000/bicycle--v1.png" />
                        <!-- <img class="focus:outline-none mt-32" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg5.svg" alt=""> -->
                    </div>
                    <div aria-label="3" role="img">
                        <img class="focus:outline-none mt-20"
                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg6.svg"
                             alt="">
                    </div>
                    <div class="flex mt-6 flex-col items-center md:items-start md:w-8/12">
                        <h1 class="focus:outline-none text-xl  font-bold leading-5">Start your journey</h1>
                        <h2 class="focus:outline-none text-gray-500  mt-3 text-base leading-6 tracking-wide">Go for
                            a bicycle ride and discover new places.</h2>
                    </div>
                </div>
            </div>
            <div class="md:hidden flex flex-col items-center w-full">
                <img class="focus:outline-none my-10"
                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg1.svg"
                     alt="how it work">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg4.svg"
                     alt="">
                <div class="mt-10">
                    <h1 class="text-xl text-center   tracking-wide leading-5 font-bold">SignUp for an Account</h1>
                    <h2 class="text-gray-500  mt-3 text-center text-base leading-6 tracking-wide">Sign up on our
                        website and opt for a program that suits you the best .</h2>
                </div>
                <img class="focus:outline-none my-10"
                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg5.svg"
                     alt="">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg2.svg"
                     alt="">
                <div class="mt-10">
                    <h1 class="text-xl tracking-wide   text-center leading-5 font-bold">Create a Wallet</h1>
                    <h2 class="text-gray-500  mt-3 pl-3 text-center text-base leading-6 tracking-wide">Create a
                        wallet by linking a payment method that you’re comfortable with. Paypal, Visa and more</h2>
                </div>
                <img class="focus:outline-none my-10"
                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg3.svg"
                     alt="">
                <img class=""
                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/3_step_center_aligned_how_it_worksSvg6.svg"
                     alt="">
                <div class="flex mt-10 flex-col items-center md:items-start md:w-8/12">
                    <h1 class="text-xl text-center  tracking-wide leading-5 font-bold">Start your Transactions</h1>
                    <h2 class="text-gray-500  mt-3 text-center text-base leading-6 tracking-wide">Start transactions
                        right away. No more complicated process for anything else.</h2>
                </div>
            </div>
        </div>
    </div>


    <!-- Team -->
    <div class="container flex justify-center mx-auto pt-16">
        <div>
            <p class="text-indigo-500  text-lg text-center font-extrabold pb-3">BUILDING TEAM</p>
            <h1 class="xl:text-4xl text-3xl text-center text-gray-800  font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                The Talented People Behind the Scenes of the Organization</h1>
        </div>
    </div>
    <div class="w-full bg-gray-100  px-10 pt-10">
        <div class="container mx-auto">
            <div role="list" aria-label="Behind the scenes People "
                 class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                <div role="listitem"
                     class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white ">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="../../assets/FirasGacha.jpg" alt="Display Picture of Andres Berlin"
                                     role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold  text-3xl text-center mb-1">Firas Gacha</h1>
                            <p class="text-gray-800  text-sm text-center">Junior Full Stack Develope</p>
                            <p class="text-center text-gray-600  text-base pt-3 font-normal">The CEO's role in
                                raising a company's corporate IQ is to establish an atmosphere that promotes
                                knowledge sharing and collaboration.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                             alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                             alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                             alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem"
                     class="xl:w-1/3 lg:mx-3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white ">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="../../assets/nour.jpg" alt="Display Picture of Silene Tokyo" role="img"
                                     class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold  text-3xl text-center mb-1">Nour Zemni</h1>
                            <p class="text-gray-800  text-sm text-center">Product Design Head</p>
                            <p class="text-center text-gray-600  text-base pt-3 font-normal">The emphasis on
                                innovation and technology in our companies has resulted in a few of them
                                establishing global benchmarks in product design and development.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                             alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                             alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                             alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem"
                     class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white ">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="../../assets/jihed.jpg" alt="Display Picture of Johnson Stone" role="img"
                                     class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold  text-3xl text-center mb-1">Jihed Mastouri</h1>
                            <p class="text-gray-800  text-sm text-center">Data Engineer</p>
                            <p class="text-center text-gray-600  text-base pt-3 font-normal">Our services encompass
                                the assessment and repair of property damage caused by water, fire, smoke, or mold.
                                We can also be a part of the restoration.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                             alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                             alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                             alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem"
                     class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white ">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="../../assets/yassine.jpg" alt="Display Picture of Dean Jones" role="img"
                                     class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold  text-3xl text-center mb-1">Yassine Darmoul</h1>
                            <p class="text-gray-800  text-sm text-center">Software Engineer</p>
                            <p class="text-center text-gray-600  text-base pt-3 font-normal">An avid open-source
                                developer who loves to be creative and inventive. I have 20 years of experience in
                                the field.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                             alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                             alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                             alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem"
                     class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white ">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="../../assets/wael.jpg" alt="Display Picture of Charles Keith" role="img"
                                     class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold  text-3xl text-center mb-1">Wael Bouatay</h1>
                            <p class="text-gray-800  text-sm text-center">UX Designer</p>
                            <p class="text-center text-gray-600  text-base pt-3 font-normal">A UX designer is the
                                voice of the customer. Our job is to look beyond the business goals. We don't just
                                experience user interface but also questions it.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                             alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                             alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                             alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



</body>

@endsection('content')
