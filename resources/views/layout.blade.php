<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" /> --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="/">Games</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="/game-add">AddGame</a></li>
                                <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                    href="/game-delete">DeleteGames</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                    href="#">
                    <i class="ri-discord-fill"></i>
                    COMMUNITY   
                </a>
            </div>

        </div>
    </nav>


    @yield('content')
    
</body>
</html>