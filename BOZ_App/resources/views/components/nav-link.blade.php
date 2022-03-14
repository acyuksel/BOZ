@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'py-3 text-center bg-white rounded border-b-8 border-pickled-bluewood box-content block px-4 drop-shadow-lg text-fountain-blue text-xl font-bold md:inline-block md:text-2xl md:border-b-0 md:py-1 md:hover:bg-gray-200 transition-colors ease-in'
                : 'py-3 text-center bg-white rounded box-border block px-4 drop-shadow-lg text-fountain-blue text-xl font-bold md:inline-block md:bg-inherit md:text-white md:font-medium md:text-2xl md:py-1 md:px-0 md:hover:border-b-2 md:transition-all ease-in';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
