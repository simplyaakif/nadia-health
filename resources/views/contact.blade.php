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
<body>

<section class="relative px-4 lg:px-0">

    <div class="max-w-7xl lg:flex lg:justify-between lg:pt-8 mt-4 lg:mt-0 lg:items-center mb-8 lg:mb-16 mx-auto">
        <div class="lg:w-1/4 flex items-center gap-24">
            <img src="{{asset('logo.png')}}" class="max-h-[120px] lg:max-h-[180px]" alt="">
            <ul class="text-db uppercase flex items-center space-x-4 lg:space-x-8 ">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About</li>
                <li class="lg:hidden"><a href="{{route('contact')}}">Contact</a></li>
            </ul>

        </div>
        <div class="hidden lg:block">
            <ul class="lg:text-white uppercase">
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
        <div class="hidden lg:block lg:absolute right-0 -z-10 bg-lb lg:w-[40%] h-80"></div>
    </div>
</section>

<div class="max-w-7xl mx-auto ">
    <iframe class="lg:-mt-8" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3224.8132979287775!2d-79.2764682!3d36.0736577!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1698763664591!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<section class="max-w-7xl md:flex mx-auto my-24 items-center gap-16 px-4 lg:px-0">
    <div class="lg:w-2/3">
        <div>
            <h3 class="text-xl">Contact Us</h3>
            <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            </p>
            <ul class="mt-8">
                <li><h5>Darrell Harris</h5></li>
                <li><h5>NADIA-HEALTH</h5></li>
            </ul>
            <ul class="iconlist grid mt-4 lg:grid-cols-2 gap-x-8 gap-y-2">
                <li>
                    <span>
                        <span class="isax-bold-location"></span>
                    </span>
                    <span>
                    1024 Mebane Oaks Drive
                    Mebane, North Carolina 27302
                    </span>
                </li>
                <li>
                    <span>
                        <span class="isax-bold-global"></span>
                    </span>
                    <span>
                    www.nadia-health.com
                    </span>
                </li>
                <li>
                    <span>
                        <span class="isax-bold-sms"></span>
                    </span>
                    <span>
                    info@nadia-health.com
                    </span>
                </li>
                <li>
                    <span>
                        <span class="isax-bold-call"></span>
                    </span>
                    <span>
                    Darrell Harris: (516) 581-9339
                    </span>
                </li>
                <li>
                    <span>
                        <span class="isax-bold-call"></span>
                    </span>
                    <span>
                    Brian Baucom: (919) 451-7903
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="lg:w-1/3 mt-12 lg:mt-0">
        <form action="#" class="contact space-y-4">
            <input type="text" placeholder="Enter Name">
            <input type="text" placeholder="Enter Email">
            <input type="text" placeholder="Enter Number">
            <button class="w-full py-2 text-center bg-lb text-white rounded-md">Submit</button>
        </form>
    </div>
</section>





<footer class="bg-db py-4 text-center mx-auto">
    <span class="text-white/20">
    © NadiaHealth All Right Reserved 2023
    </span>
</footer>

</body>
</html>
