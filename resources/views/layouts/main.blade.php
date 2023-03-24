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
{{--    Ribbon --}}
    <x-ribbon></x-ribbon>
{{-- Navigation --}}
    <x-header-menu></x-header-menu>
</header>

    {{ $slot }}

<x-footer-block></x-footer-block>
</body>
</html>