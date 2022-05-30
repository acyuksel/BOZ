
@foreach ($languages as $language)
@php
    $activeClasses = ($language->code == "nl" && Cookie::get('app_language') == null) || Cookie::get('app_language') == $language->code?
    'border-b-8 border-b-pickled-bluewood font-bold' : '';
@endphp
    <form action="{{ route('set-lang') }}" method="POST" class="px-2 mb-3 mt-2 w-full">
        @csrf
        <input type="hidden" name="lang" value="{{ $language->code }}">
        <button type="submit" local="{{ $language->code }}"
            class="py-3 text-center bg-white rounded  px-4 ease-in w-full border border-slate-200 hover:bg-slate-200
            {{ $activeClasses }}">
            {{ $language->name }}
        </button>
    </form>
@endforeach
