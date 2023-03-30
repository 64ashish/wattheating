<x-main-layout>
    <div class=" bg-[#f9f9f9] max-w-3xl md:max-w-none w-full m-auto pt-[146px] px-[15px] md:px-">
        <h1 class="text-center mt-9 mb-[90px]  text-4xl font-semibold">Behöver du hjälp?
        </h1>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-12 lg:px-[10%] md:divide-x">
            <div class="md:px-4">
                <h2 class="font-semibold text-[#00B5CB] text-[22px] mb-6">
                    Kom gärna och besök oss
                </h2>
                <p class="mb-10">

                    Vi bjuder dig gärna på en kopp kaffe på vårt kontor i Eslöv (ca 3 mil
                    från Malmö).
                </p>

                <div>
                    <span class="font-semibold">
                        BESÖKSADRESS:
                    </span>
                    <address class="not-italic">

                        Watt Heating AB<br>

                        Transportvägen 7<br>

                        241 38 Eslöv
                    </address>
                </div>

                <div class="flex gap-2.5 items-center mt-8">
                    <a class="font-semibold text-[#00B5CB] ">
                        Personlig kontakt
                     </a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 stroke-[#00B5CB]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                </div>

            </div>

            <div class="md:pl-10 md:pr-4">
                <h2 class="font-semibold text-[#00B5CB] text-[22px] mb-6">
                    Ring oss gärna på 0413-664 60

                </h2>

                <p class="mb-[50px]">

                    Eller om du hellre skickar ett mail:
                </p>
                <div class="flex flex-col gap-5">
                    <a href="#"  class="border-2 border-[#292929] py-[7px] px-9	text-center text-base rounded-full w-full max-w-[275px]">
                        order@watt.se
                    </a>
                    <a href="#"  class="border-2 border-[#292929] py-[7px] px-9	text-center text-base rounded-full w-full max-w-[275px]">
                        offert@watt.se
                    </a>
                </div>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-20  lg:px-[10%]">
            @foreach([1,2,3,4,5,6,7,8,9] as $item)
                <x-personnel-card></x-personnel-card>
            @endforeach
        </div>

    </div>
</x-main-layout>
