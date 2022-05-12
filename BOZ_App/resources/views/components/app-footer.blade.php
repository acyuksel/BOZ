<footer class="px-6 bg-white mt-10 flex flex-row justify-center items-center overflow-hidden relative">
    <div class="block bg-fountain-blue h-60 md:w-5 lg:w-10 rotate-45 absolute left-10"></div>

    <div class="block bg-fountain-blue h-60 md:w-5 lg:w-10 rotate-45 absolute md:left-20 lg:left-28"></div>
    <div class="flex flex-col justify-center mb-4">
        <div class="w-full flex flex-row justify-center">
            <x-social_media_button link="https://facebook.com" Platform="facebook" Size="small" />
            <x-social_media_button link="https://instagram.com" Platform="instagram" Size="small" />
            <x-social_media_button link="https://linkedin.com" Platform="linkedin" Size="small" />
        </div>
        <span >Copyright &copy;<b>{{ date('Y') }}</b> Bureau Onbeperkte Zaken - {{ __('AllRights') }}</span>
    </div>

</footer>
