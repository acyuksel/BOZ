@if(!CookieHelper::isCookiesAllowed())
    <div id="cookie" class="p-6 text-center text-white rounded fixed bg-pickled-bluewood shadow-xl w-100 bottom-[25px] left-[25px] xl:w-[500px] md:w-[500px]" style="z-index:450;">
        <div class="flex flex-col">
            <span autofocus>{{ $message }}</span>
            <div class="mt-3">
                <a href="{{route("cookie.allow")}}" class="px-3 py-1 font-bold text-white bg-green-500 rounded cursor-pointer hover:bg-green-600">{{ __('Ja') }}</a>
                <a href="{{route("cookie.decline")}}" class="px-3 py-1 font-bold text-white bg-red-500 rounded cursor-pointer hover:bg-red-600">{{ __('Nee') }}</a>
                <a class="px-3 py-1 font-bold text-white rounded cursor-pointer bg-fountain-blue hover:bg-paradiso-light">{{ __('Privacyverklaring')}}</a>
            </div>
        </div>
    </div>
@endif
