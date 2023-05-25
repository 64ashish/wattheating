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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
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
{{--    <x-ribbon></x-ribbon>--}}
    {{-- Navigation --}}


    <div class="flex  text-white lg:hidden text-sm">
        <div class="bg-secondary-900 h-10 w-1/2 flex  justify-center items-center">
            <a href="#" >
                Privatperson
            </a>
        </div>
        <div class="bg-primary-500 h-10 w-1/2 flex justify-center items-center">
            <a href="#" class="font-bold">
                Företag
            </a>
        </div>
    </div>
    {{--  Ribbon large screen --}}
    <div class="hidden lg:block text-sm">
        <div class="h-10  text-center bg-secondary-900 text-white flex items-center justify-center gap-x-3">
            <span class="">ALLTID FRI FRAKT INOM SVERIGE</span>
            <span>|</span>
            <span class="font-semibold flex gap-4 items-center">BETALA SÄKERT MED  <img class="w-14 h-3" src="/images/logo_white.png"></span>
        </div>
    </div>

    <x-header-menu></x-header-menu>
</header>

{{ $slot }}

<x-footer-block></x-footer-block>
<script>
    gsap.set(".main_animation_conteiner #lastbilForkliftSvg",{opacity:1});


    gsap.to('#lastbilForkliftSvg #gFLLump',{duration:0.2,repeat:-1,yoyo:true,opacity:0,ease:'power1.inOut'})

    gsap.timeline({repeat:-1,repeatDelay:0.5})
        .to('#lastbilForkliftSvg #gFLW > *',{duration:0.5,transformOrigin:'50% 50%',repeat:1,rotation:360,ease:'none'})
        .to('#lastbilForkliftSvg #gFL',{duration:1,x:30,ease:'none'},'<')
        .to('#lastbilForkliftSvg #gFLfork',{duration:0.8,y:-30,ease:'none'},'>')
        .to('#lastbilForkliftSvg #gFLfork',{duration:0.8,y:0,ease:'none'},'>')
        .to('#lastbilForkliftSvg #gFLW > *',{duration:0.5,transformOrigin:'50% 50%',repeat:1,rotation:0,ease:'none'})
        .to('#lastbilForkliftSvg #gFL',{duration:1,x:0,ease:'none'},'<')

</script>

<script>
    gsap.set(".main_animation_conteiner #lastbilTruckSvg",{opacity:1});

    gsap.set('#lastbilTruckSvg #gTVin > *',{strokeDasharray:32,strokeDashoffset:32*3})
    gsap.to('#lastbilTruckSvg #gTVin > *:nth-child(1)',{duration:0.5,repeat:-1,strokeDashoffset:32,ease:'power1.inOut'})
    gsap.to('#lastbilTruckSvg #gTVin > *:nth-child(2)',{duration:0.5,repeat:-1,delay:0.1,strokeDashoffset:32,ease:'power1.inOut'})
    gsap.to('#lastbilTruckSvg #gTW > *',{duration:0.5,transformOrigin:'50% 50%',repeat:-1,rotation:360,ease:'none'})
    gsap.to('#lastbilTruckSvg #gTAll',{duration:2,repeat:-1,x:5,yoyo:true,ease:'power1.inOut'})

    gsap.timeline({repeat:-1,repeatDelay:0.5})
        .to('#lastbilTruckSvg #gT',{duration:0.3,transformOrigin:'70% 50%',rotation:-1,ease:'none'})
        .to('#lastbilTruckSvg #gT',{duration:0.5,rotation:1,ease:'none'})
        .to('#lastbilTruckSvg #gT',{duration:0.3,rotation:0,ease:'sine.out'})



</script>
</body>
</html>
