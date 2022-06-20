@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'py-3 text-center bg-white rounded border-b-8 border-fountain-blue box-content block px-4 drop-shadow-lg md:text-black text-xl font-bold md:inline-block md:text-2xl md:whitespace-nowrap md:border-b-0 md:py-1 md:hover:bg-gray-200 transition-colors ease-in'
                : 'py-3 text-center bg-white rounded box-border block px-4 drop-shadow-lg text-black text-xl font-bold md:inline-block md:bg-inherit md:text-black md:font-medium md:text-2xl md:whitespace-nowrap md:py-1 md:px-0 md:hover:border-b-2 md:border-black md:transition-all ease-in';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

