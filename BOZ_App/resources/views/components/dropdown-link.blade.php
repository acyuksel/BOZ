@props(['active' => false, 'href'])

@php
$activeClasses = $active ? 'border-b-8 border-b-pickled-bluewood font-bold' : '';
@endphp
<li role="menuitem" class="py-3 text-center bg-white rounded  px-4 ease-in w-full border border-slate-200 hover:bg-slate-200 inline-block
{{ $activeClasses }}">
<a  href="{{$href}}">
{{ $slot }}
</a>
</li>
