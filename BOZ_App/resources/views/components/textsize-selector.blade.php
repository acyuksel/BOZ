<form action="{{ route('set-textsize') }}" method="POST">
    @csrf
    <select onchange="this.form.submit()" name="size" aria-label=".form-select-lg example"
        class="form-select form-select-lg mb-3appearance-none block w-full px-4 py-2 text-xl font-normal text-gray-700
        bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
        @foreach (['md','l','xl'] as $size)
            <option {{ Cookie::get('app_textsize') == $size ? "selected='true" : '' }}
                value="{{ $size }}">
                {{ $size }}</option>
        @endforeach
    </select>

</form>
