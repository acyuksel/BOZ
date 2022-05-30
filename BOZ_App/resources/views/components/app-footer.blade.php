<footer class="px-6 bg-white mt-10 flex flex-row justify-center items-center overflow-hidden relative">
    <div class="block bg-fountain-blue h-60 md:w-5 lg:w-10 rotate-45 absolute left-10"></div>

    <div class="block bg-fountain-blue h-60 md:w-5 lg:w-10 rotate-45 absolute md:left-20 lg:left-28"></div>
    <div class="flex flex-col justify-center mb-4 w-full text-center">
        <div class="w-full flex md:flex-row items-center justify-center">
            <x-social_media_button link="https://facebook.com" Platform="facebook" Size="large" />
            <x-social_media_button link="https://instagram.com" Platform="instagram" Size="large" />
            <x-social_media_button link="https://linkedin.com" Platform="linkedin" Size="large" />
        </div>
        <span>Copyright &copy;<b>{{ date('Y') }}</b> Bureau Onbeperkte Zaken - {{ __('AllRights') }}</span>
    </div>

</footer>
