<footer class="relative flex flex-row items-center justify-center px-6 mt-10 overflow-hidden bg-white">
    <div class="absolute block rotate-45 bg-fountain-blue h-60 md:w-5 lg:w-10 left-10"></div>

    <div class="absolute block rotate-45 bg-fountain-blue h-60 md:w-5 lg:w-10 md:left-20 lg:left-28"></div>
    
    <div class="flex flex-col-reverse items-center md:flex-row">
        <div class="flex flex-col justify-center w-full mb-4 text-center">
            <div class="flex flex-col items-center justify-center w-full md:flex-row">
                <x-social_media_button link="https://facebook.com" Platform="facebook" Size="large" />
                <x-social_media_button link="https://instagram.com" Platform="instagram" Size="large" />
                <x-social_media_button link="https://linkedin.com" Platform="linkedin" Size="large" />
            </div>
            <span>Copyright &copy;<b>{{ date('Y') }}</b> Bureau Onbeperkte Zaken - {{ __('AllRights') }}</span>
        </div>
        <img class="w-1/2 m-4 md:w-1/12" src="{{ asset('img/anbi.jpeg') }}"/>
    </div>
</footer>
