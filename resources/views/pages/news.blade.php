<x-main-layout>
    <div class=" max-w-3xl lg:max-w-none w-full m-auto pt-[146px]">
        <h1 class="text-center mt-9 mb-[94px]  text-4xl font-semibold">Aktuellt</h1>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach( [1,2,3,4,5,6,7,8] as $item )
                <x-text-overlay-box title="Title"
                                    image="/images/emporia.jpg"
                                    url="#"></x-text-overlay-box>
            @endforeach
        </div>
    </div>
</x-main-layout>
