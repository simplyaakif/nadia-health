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

<section class="max-w-7xl md:flex items-center gap-8 mx-auto px-4 lg:px-0">
    <div class="lg:w-1/4">
        <div class="text-db ">
            <p class="">Watch this video to see how Nadia Health Is improving patient care and autonomy</p>
            <p class="text-4xl uppercase mt-8 mb-8 lg:mb-0">Inspired Simplicity</p>
        </div>
    </div>
    <div class="lg:w-3/4 lg:-mt-28">
        <video controls autoplay>
            <source src="{{asset('vid/vid.mp4')}}">
        </video>
{{--        <img src="{{asset('video.png')}}" alt="">--}}
    </div>

</section>

<section class="max-w-7xl md:flex mx-auto my-24 items-center gap-16 px-4 lg:px-0">
    <div class="lg:w-1/4 ">
        <img src="{{asset('pump.png')}}" class="w-48 mb-8 lg:mb-0 lg:w-auto" alt="">
    </div>
    <div class="lg:w-3/4">
        <div>
            <p class="text-xl">Current Oxygen meter attachments are outdated, cumbersome and add unnecessary, more expensive steps for nurses and respiratory therapists.
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

</section>

<section class="max-w-7xl mx-auto">
    <div class="md:flex md:items-center gap-12 bg-db text-white p-8 lg:px-16">
        <div class="lg:w-1/4 p-8">
            <img src="{{asset('pump-single.png')}}" class="w-48" alt="">
        </div>
        <div class="lg:w-3/4">
            <div>
                <p class="text-4xl uppercase">The Atom Bidirectional Oxygen Flow Device by Nadia Health</p>
                <button class="bg-lb px-4 py-2 mt-8 rounded-md">Set up your free trial for your Hospital Today</button>
            </div>
        </div>
    </div>

</section>

<section class="max-w-7xl mx-auto">
    <div class="md:flex md:items-center gap-12  p-8">
        <div class="lg:w-3/4">
            <h3>ABOUT US</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. I</p>
        </div>
        <div class="lg:w-1/4">
            <div class="lg:-mt-36 mt-8">
                <img src="{{asset('bidirection+in+action%20(1).png')}}">
            </div>
        </div>
    </div>

</section>

<section class="max-w-7xl mx-auto">
    <div class="md:flex md:items-center gap-12  p-8">
        <div class="">
            <h3>NEVER DISRUPT OXYGEN FLOW AGAIN</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. I</p>
        </div>
    </div>

</section>

<section class="max-w-7xl mx-auto flex justify-center my-8 ">
    <span action="" class="bg-[#ebebeb] inline-block  rounded shadow  p-2 rounded-lg">
        <input type="text" class="bg-transparent w-80 pl-2 focus:outline-none border-0" placeholder="Leave your Contact">
        <button type="button" class="bg-red-600 text-white rounded-md py-2 px-4">Submit</button>
    </span>
</section>

<footer class="bg-db py-4 text-center mx-auto">
    <span class="text-white/20">
    © NadiaHealth All Right Reserved 2023
    </span>
</footer>

</body>
</html>
