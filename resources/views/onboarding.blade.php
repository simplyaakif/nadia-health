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
<body class="flex items-center justify-center flex-col  h-screen w-full ">

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
