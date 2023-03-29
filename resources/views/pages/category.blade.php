<x-main-layout>
<div class="bg-[#f9f9f9] pt-[146px] px-4 sm:px-[10%]">
    <div >
        <div class="mt-14 pb-6 grid grid-cols-2 xl:grid-cols-4 gap-y-7 gap-x-10 text-center text-sm  lg:text-lg">
            <a>
                <div class=" border-2 border-[#292929] py-4 px-9 rounded-full
                    hover:border-[#00b5cc] hover:bg-[#00b5cc] hover:text-white">
                    Radiatorer
                </div>
            </a>

            <a>
                <div class=" border-2 border-[#292929] py-4 px-9 rounded-full
                hover:border-[#00b5cc] hover:bg-[#00b5cc] hover:text-white">
                    Konvektorer
                </div>
            </a>
            <a>
                <div class=" border-2 border-[#292929] py-4 px-9 rounded-full
                hover:border-[#00b5cc] hover:bg-[#00b5cc] hover:text-white">
                    Handdukstorkar
                </div>
            </a>
            <a>
                <div class=" border-2 border-[#292929] py-4 px-9 rounded-full
                hover:border-[#00b5cc] hover:bg-[#00b5cc] hover:text-white">
                    Tillbehör
                </div>
            </a>
        </div>
    </div>

    <div class="max-w-4xl m-auto p-[2%] border border-[#e5e5e5] text-center text-sm mb-12">
        <p>
            Radiatorer för vattenburen värme i horisontellt eller vertikalt utförande. Olika anslutningsmodeller och
            design för att passa Er installation eller byggnadstyp.
        </p>

        <a class="block pt-20 text-[#00b5cc] underline">
            Klicka här för att jämföra våra populäraste modeller!
        </a>

    </div>



    <div class="pb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([1,2,3,4,5] as $item)
            <x-product-filter></x-product-filter>
        @endforeach
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach( [1,2,3,4,5,6,7,8,9] as $item )
        <x-product-card></x-product-card>
        @endforeach
    </div>
</div>


</x-main-layout>
