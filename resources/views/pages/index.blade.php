<x-main-layout>
    <x-hero-video-component></x-hero-video-component>
    <div class=" grid grid-cols-1 md:grid-cols-4 gap-3.5">
        @foreach( [1,2,3,4] as $item )
            <x-text-overlay-box></x-text-overlay-box>
        @endforeach
    </div>
    <x-effect-calculator-plug></x-effect-calculator-plug>
</x-main-layout>
