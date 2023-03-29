{{--<div  class="bg-[#f9f9f9] relative">--}}
{{--    <a href="#"--}}
{{--    class="text-overlay-box absolute  top-0 left-0 right-0 bottom-0 hover:bg-[#00b5cbcc] text-white flex flex-col--}}
{{--    justify-center items-center">--}}
{{--        <h2 class="hidden">Title</h2>--}}
{{--        <p class="hidden">Visa alla</p>--}}
{{--    </a>--}}
{{--    <img src="/images/WR4_3.png" >--}}
{{--</div>--}}


<div class="w-full h-0  pb-full bg-[#f9f9f9] relative bg-no-repeat bg-center bg-contain"
        style="background-image:url({{ $image }})">
        <a href="{{ $url }}"
        class="text-overlay-box absolute  top-0 left-0 right-0 bottom-0 hover:bg-[#00b5cbcc] text-white flex flex-col
        justify-center items-center">
            <p class="hidden text-[26px] font-semibold">{{ $title }}</p>
            <p  class="hidden text-lg	font-normal">Visa alla</p>
        </a>
{{--        <img src="/images/WR4_3.png" >--}}
</div>
