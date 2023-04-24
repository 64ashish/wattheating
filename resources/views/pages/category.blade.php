<x-main-layout>
<div class="bg-alabaster-50 pt-36.5 px-4 sm:px-10%">
    <div >
        <div class="mt-14 pb-20 grid grid-cols-2 xl:grid-cols-4 gap-y-7 gap-x-10 text-center text-sm  lg:text-lg">
            <a>
                <div class=" border-2 border-mine-shaft-900 py-4 px-9 rounded-full
                    hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                    Radiatorer
                </div>
            </a>

            <a>
                <div class=" border-2 border-mine-shaft-900 py-4 px-9 rounded-full
                hover:border-primary-500  hover:bg-primary-500 hover:text-white">
                    Konvektorer
                </div>
            </a>
            <a>
                <div class=" border-2 border-mine-shaft-900 py-4 px-9 rounded-full
                hover:border-primary-500  hover:bg-primary-500 hover:text-white">
                    Handdukstorkar
                </div>
            </a>
            <a>
                <div class=" border-2 border-mine-shaft-900 py-4 px-9 rounded-full
                hover:border-primary-500  hover:bg-primary-500 hover:text-white">
                    Tillbehör
                </div>
            </a>
        </div>
    </div>

    <div class="max-w-4xl m-auto p-[2%] border border-alabaster-200 text-center text-sm mb-12">
        <p>
            Radiatorer för vattenburen värme i horisontellt eller vertikalt utförande. Olika anslutningsmodeller och
            design för att passa Er installation eller byggnadstyp.
        </p>

        <a class="block pt-20 text-primary-500 underline font-bold">
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
