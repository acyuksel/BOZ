@if($size === "small")
    <a target="_blank" class="px-6 py-2.5 mb-2 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out flex items-center {{$platform}}-button social_media_button {{$size}}" href="{{$link}}">
        <i class="fa fa-brands fa-{{$platform}}" ></i>
    </a>

@else
    <a target="_blank" class="px-6 py-2.5 mb-2 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out flex items-center {{$platform}}-button social_media_button {{$size}}" href="{{$link}}">
        <i class="fa fa-brands fa-{{$platform}}" ></i> <span class="hidden xl:inline">{{$platform}}</span>
    </a>

@endif
