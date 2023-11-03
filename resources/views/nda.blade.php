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
<body class="bg-gray-200">

<section class="border-8 border-lb"></section>
@if($errors->any())
    <div class="alert alert-danger text-red-600 text-center text-xl my-12 font-bold">Kindly fix the error in below form</div>
@endif
<section class="max-w-5xl  bg-white shadow-md mx-auto my-12 prose prose-headings:text-center px-4 lg:px-8 py-12 rounded-md">
    {!! $nda !!}

    <div class="max-w-xl mx-auto mb-8 px-4 lg:px-0">
        <form action="{{route('nda-submit')}}" method="POST" class="contact space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Enter Name">
            @error('name')
            <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
            <input type="email" name="email" placeholder="Enter Email">
            @error('email')
            <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
            <input type="text" name="address" placeholder="Enter Address">
            @error('address')
            <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
            <input type="text" name="title" placeholder="Enter Title">
            @error('title')
            <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror

            <div>
                <input type="checkbox" name="accept">
                <span>
                I have read & accept NDA
            </span>
            </div>
            @error('accept')
            <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror

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
