@props(['sectionnr'])
<div class="flex justify-center items-center mt-5 relative">
    <div class="absolute hidden z-10 bottom-16 bg-white h-12 px-6 flex items-center rounded-lg" addoptioncontainer="true"
         possiblesectionnr="{{$sectionnr}}">
        <form action="{{route('add-section', ['number' => $sectionnr])}}" method="post">
            @csrf
            <button type="submit" class="text-blue-800 font-medium">
                {{__('Add text section')}}
            </button>
        </form>
{{--        <span class="mx-3">|</span>--}}
{{--        <button class="text-blue-800 font-medium">--}}
{{--            {{__('Add media section')}}--}}
{{--        </button>--}}
    </div>
    <div class="w-10 hidden bg-white absolute h-10 rotate-45 bottom-14" addoptioncontainer="true" possiblesectionnr="{{$sectionnr}}"></div>
    <button addbutton="true" possiblesectionnr="{{$sectionnr}}"
        class="z-10 rounded-full bg-pickled-bluewood w-10 h-10 flex flex-row justify-center items-center text-white hover:bg-gray-600 transition-colors">
        <i class="fa fa-solid fa-plus pointer-events-none"></i>
    </button>
</div>
