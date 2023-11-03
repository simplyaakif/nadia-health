<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="/vite.svg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,700|poppins:400,700" rel="stylesheet"/>
    <link href="{{asset('iconsax/iconsax.css')}}" rel="stylesheet"/>
    @vite('resources/css/app.css')
    <title>{{config('app.name')}}</title>

</head>
<body class="flex items-center justify-center flex-col relative  h-screen overflow-hidden">

{{--<div class="absolute -z-10 top-0 left-0">--}}
{{--    <img src="{{asset('symbol.jpg')}}" alt="" class=" -z-10 scale-50 ">--}}
{{--</div>--}}
<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="absolute -z-10 top-0 left-0 w-64 lg:w-96 -mt-24 -ml-24">
    <path fill="#058FDE" d="M54.4,-56.5C67.5,-41.2,73.1,-20.6,74.6,1.5C76.1,23.6,73.4,47.1,60.2,61.2C47.1,75.2,23.6,79.8,2.5,77.3C-18.5,74.7,-37,65.1,-51.6,51C-66.3,37,-77.1,18.5,-77.3,-0.2C-77.5,-18.9,-67.1,-37.7,-52.4,-53C-37.7,-68.2,-18.9,-79.8,0.9,-80.7C20.6,-81.6,41.2,-71.7,54.4,-56.5Z" transform="translate(100 100)" />
</svg>
<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="absolute -z-10 bottom-0 right-0 w-64 lg:w-96 -mb-24 -mr-24">
    <path fill="#058FDE" d="M54.4,-56.5C67.5,-41.2,73.1,-20.6,74.6,1.5C76.1,23.6,73.4,47.1,60.2,61.2C47.1,75.2,23.6,79.8,2.5,77.3C-18.5,74.7,-37,65.1,-51.6,51C-66.3,37,-77.1,18.5,-77.3,-0.2C-77.5,-18.9,-67.1,-37.7,-52.4,-53C-37.7,-68.2,-18.9,-79.8,0.9,-80.7C20.6,-81.6,41.2,-71.7,54.4,-56.5Z" transform="translate(100 100)" />
</svg>
<div>
    <img src="{{asset('logo.png')}}" alt="" class="inline-block">
</div>
<section class="max-w-7xl mx-auto flex justify-center my-8 ">
    <form action="{{route('onboarding-submit')}}" method="POST">
        @csrf
    <span action="" class="bg-[#ebebeb] inline-block  rounded shadow  p-2 rounded-lg">
        <input type="email" name="email"
               class="bg-transparent w-80 pl-2 focus:outline-none border-0" placeholder="Enter your Email">
        <button type="submit" class="bg-lb text-white rounded-md py-2 px-4">Submit</button>
    </span>
        @error('email')  @enderror
    </form>
</section>

{{--<footer class="bg-db py-4 text-center mx-auto">--}}
{{--    <span class="text-white/20">--}}
{{--    © NadiaHealth All Right Reserved 2023--}}
{{--    </span>--}}
{{--</footer>--}}

</body>
</html>
