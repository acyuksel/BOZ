@props(['active'])

@php
$classes = ($active ?? false)
            ? 'py-3 text-center bg-white rounded border-b-8 border-pickled-bluewood box-content block px-4 drop-shadow-lg text-fountain-blue text-xl font-bold'
            : 'py-3 text-center bg-white rounded box-border block px-4 drop-shadow-lg text-fountain-blue text-xl font-bold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
