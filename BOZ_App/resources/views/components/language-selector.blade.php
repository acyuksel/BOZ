
@foreach ($languages as $language)
@php
    $activeClasses = Local::getLocal(request()) == $language->code?
    'border-b-8 border-b-pickled-bluewood font-bold' : '';
@endphp
    <li>
        <form action="{{ route('set-lang') }}" method="POST" class="w-full px-2 mt-2 mb-3">
        @csrf
        <input type="hidden" name="lang" value="{{ $language->code }}">
        <button type="submit" local="{{ $language->code }}"
            class="py-3 text-center bg-white rounded  px-4 ease-in w-full border border-slate-200 hover:bg-slate-200
            {{ $activeClasses }}">
            {{ $language->name }}
        </button>
    </form>
    </li>
@endforeach
