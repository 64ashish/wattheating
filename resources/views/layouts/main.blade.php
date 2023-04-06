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
    <script>
        window.markerConfig = {
            project: '642e6bc041b9c07243646b47',
            source: 'snippet'
        };
    </script>

    <script>
        !function(e,r,a){if(!e.__Marker){e.__Marker={};var t=[],n={__cs:t};["show","hide","isVisible","capture","cancelCapture","unload","reload","isExtensionInstalled","setReporter","setCustomData","on","off"].forEach(function(e){n[e]=function(){var r=Array.prototype.slice.call(arguments);r.unshift(e),t.push(r)}}),e.Marker=n;var s=r.createElement("script");s.async=1,s.src="https://edge.marker.io/latest/shim.js";var i=r.getElementsByTagName("script")[0];i.parentNode.insertBefore(s,i)}}(window,document);
    </script>
</head>

<body>
<header
    class="fixed z-50 w-full bg-white">
{{--    Ribbon --}}
    <x-ribbon></x-ribbon>
{{-- Navigation --}}
    <x-header-menu></x-header-menu>
</header>

    {{ $slot }}

<x-footer-block></x-footer-block>
</body>
</html>
