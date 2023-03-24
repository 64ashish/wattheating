<x-main-layout>
    <x-hero-video-component></x-hero-video-component>
    <div class=" grid grid-cols-1 md:grid-cols-4 gap-3.5">
        @foreach( [1,2,3,4] as $item )
            <x-text-overlay-box
                title="Title"
                image="/images/WR4_3.png"
                url="#"></x-text-overlay-box>
        @endforeach
    </div>
    <x-effect-calculator-plug></x-effect-calculator-plug>
    <x-contact-plug></x-contact-plug>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">
        @foreach( [1,2,3] as $item )
            <x-text-overlay-box title="Title"
                image="/images/emporia.jpg"
                url="#"></x-text-overlay-box>
        @endforeach
    </div>

</x-main-layout>
