<form action="{{ route('set-lang') }}" method="POST">
    @csrf
    <select onchange="this.form.submit()" name="lang" aria-label=".form-select-lg example"
        class="form-select form-select-lg mb-3appearance-none block w-full px-4 py-2 text-xl font-normal text-gray-700
        bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
        @foreach ($languages as $language)
            <option {{ Cookie::get('app_language') == $language->code ? "selected='true" : '' }}
                value="{{ $language->code }}">
                {{ $language->name }}</option>
        @endforeach
    </select>
    {{-- <select onchange="this.form.submit()" name="fontsize" aria-label=".form-select-lg example"
        class="form-select form-select-lg mb-3appearance-none block w-full px-4 py-2 text-xl font-normal text-gray-700
        bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
        @foreach ($fontsizes as $fontsize)
            <option {{ Cookie::get('app_fontsize') == $fontsize->code ? "selected='true" : '' }}
                value="{{ $fontsize->code }}">
                {{ $fontsize->name }}</option>
        @endforeach
    </select> --}}
</form>


