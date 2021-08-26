<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'Hatirpal' }}</title>
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="icon" href="{{ asset('images/default/favicon.png') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/bb2f33706c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/backend/nav_left_navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/googletranslator.css') }}">

    @yield('css')

</head>

<body>
    <div id="app">
        @include('layouts.includes.nav')
        <div class="container-fluid main_container">
            <div class="row full_height">
                <div class="col-lg-2 col-md-3 col-sm-4 left_navigation toggle_left_navigation"
                    id="toggle_left_navigation">
                    @include('layouts.includes.leftNavigation')
                </div>
                <div class="col-lg-10 col-md-9 col-sm-8 main_content">
                    @include('message.alert')
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.includes.messenger')
        <footer class="">

            <div class="text-center copyright">
                All Rights reserver by &copy; Admin
            </div>
        </footer>
    </div>
    <!-- google translator
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript"
        src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>
    <script src="{{ asset('js/backend/global.js') }}"></script>

    @yield('js')
</body>

</html>
