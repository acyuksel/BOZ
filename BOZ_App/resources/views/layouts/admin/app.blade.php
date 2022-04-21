<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <script src="https://kit.fontawesome.com/21c5dc441e.js" crossorigin="anonymous"></script>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/admin_style.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
        <script src="{{ asset('js/cms_media_library.js') }}" defer></script>
        <script src="{{ asset('js/context_hulp.js') }}" defer></script>
        <script src="{{ asset('js/admin-script.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased " id="page-top">
        <div id="wrapper">
            @include('layouts.admin.navbar')
            
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layouts.admin.topbar')
                    @yield("content")
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    </body>
</html>
