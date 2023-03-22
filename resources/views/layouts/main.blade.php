<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
    <title>Watt Heating</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://use.typekit.net/dlu3qxc.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://use.typekit.net/hav8ltd.css">--}}
    <link rel="stylesheet" href="https://use.typekit.net/hav8ltd.css">
</head>

<body>
<header>
{{--    Ribbon small screen --}}
    <div class="flex text-sm  text-white font-normal lg:hidden">
        <div class="bg-[#005874] h-10 w-1/2 flex  justify-center items-center">
            <a href="#">
                Privatperson
            </a>
        </div>
        <div class="bg-[#00B5CB] h-10 w-1/2 flex justify-center items-center">
            <a href="#">
                Företag
            </a>
        </div>
    </div>
{{--  Ribbon large screen --}}
    <div class="hidden lg:block">
        <div class="h-10 text-sm text-center bg-[#005874] text-white flex items-center justify-center">
            SNABBA LEVERANSER | ÖVER 50.000 RADIATORER I LAGER
        </div>
    </div>
{{-- Navigation --}}
    <nav>
        <div class="h-24">
            <div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
        </div>
    </nav>
</header>

    {{ $slot }}
</body>
</html>
