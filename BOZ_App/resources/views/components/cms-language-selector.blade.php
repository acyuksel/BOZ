<div class="mr-3 dropdown">
    <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Taal: {{Cookie::get('app_language')}}</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($languages as $language)
            <form action="{{ route('set-lang') }}" method="POST">
                @csrf
                <input class="d-none" name="lang" value="{{ $language->code }}">
                <button type="submit" class="dropdown-item" >{{ $language->name }}</button>
            </form>
        @endforeach
    </div>
</div>