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
        
                <div class="container mx-auto pt-28 h-screen">
                    <div class="lg:flex">
                        <div class="xl:w-2/5 lg:w-2/5 bg-indigo-700 py-16 xl:rounded-bl rounded-tl rounded-tr xl:rounded-tr-none">
                            <div class="xl:w-5/6 xl:px-0 px-8 mx-auto">
                                <h1 class="xl:text-4xl text-3xl pb-4 text-white font-bold">Get in touch</h1>
                                <p class="text-xl text-white pb-8 leading-relaxed font-normal lg:pr-4">Got a question about us? Are you interested in partnering with us? Have some suggestions or just want to say Hi? Just contact us. We are here to asset you.</p>
                                <div class="flex pb-4 items-center">
                                    <div aria-label="phone icon" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg1.svg" alt="phone"/>
                                        
                                    </div>
                                    <p class="pl-4 text-white text-base">+1 (308) 321 321</p>
                                </div>
                                <div class="flex items-center">
                                    <div aria-label="email icon" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg2.svg" alt="email"/>
                                       
                                    </div>
                                    <p class="pl-4 text-white text-base">Info@alphas.com</p>
                                </div>
                                <p class="text-lg text-white pt-10 tracking-wide">
                                    545, Street 11, Block F
                                    <br />
                                    Dean Boulevard, Ohio
                                </p>
                                <div class=" pt-16" >
                                    <a href="javascript:void(0)" class="text-white font-bold tracking-wide underline focus:outline-none focus:ring-2 focus:ring-white ">View Job Openings</a>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-3/5 lg:w-3/5 bg-gray-200  h-full pt-5 pb-5 xl:pr-5 xl:pl-0 rounded-tr rounded-br">
                            <form id="contact" class="bg-white  py-4 px-8 rounded-tr rounded-br">
                                <h1 class="text-4xl text-gray-800  font-extrabold mb-6">Enter Details</h1>
                                <div class="block xl:flex w-full flex-wrap justify-between mb-6">
                                    <div class="w-2/4 max-w-xs mb-6 xl:mb-0">
                                        <div class="flex flex-col">
                                            <label for="full_name" class="text-gray-800  text-sm font-semibold leading-tight tracking-normal mb-2">Full Name</label>
                                            <input required id="full_name" name="full_name" type="text" class=" focus:outline-none focus:border focus:border-indigo-700 font-normal w-64 h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Full Name" aria-label="enter your full name input" />
                                        </div>
                                    </div>
                                    <div class="w-2/4 max-w-xs xl:flex xl:justify-end">
                                        <div class="flex flex-col">
                                            <label for="email" class="text-gray-800  text-sm font-semibold leading-tight tracking-normal mb-2">Email</label>
                                            <input required id="email" name="email" type="email" class=" focus:outline-none focus:border focus:border-indigo-700 font-normal w-64 h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="example@email.com" aria-label="enter your email input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full flex-wrap">
                                    <div class="w-2/4 max-w-xs">
                                        <div class="flex flex-col">
                                            <label for="phone" class="text-gray-800  text-sm font-semibold leading-tight tracking-normal mb-2">Phone</label>
                                            <input required id="phone" name="phone" type="tel" class=" focus:outline-none focus:border focus:border-indigo-700 font-normal w-64 h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="+92-12-3456789" aria-label="enter your phone number input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-6">
                                    <div class="flex flex-col">
                                        <label class="text-sm font-semibold text-gray-800  mb-2" for="message">Message</label>
                                        <textarea placeholder="" name="message" class=" border-gray-300 border mb-4 rounded py-2 text-sm outline-none resize-none px-3 focus:border focus:border-indigo-700" rows="8" id="message" aria-label="enter your message input"></textarea>
                                    </div>
                                    <button  class="focus:outline-none bg-white transition duration-150 ease-in-out hover:bg-white rounded text-indigo-600 px-8 py-3 text-sm leading-6 focus:border-4 focus:ring-2 focus:ring-offset-2 focus:ring-white"><a href="/">Cancel</a></button>
                                    <button type="submit" class="focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-3 text-sm leading-6 focus:border-4 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
    </div>



</body>

</html>