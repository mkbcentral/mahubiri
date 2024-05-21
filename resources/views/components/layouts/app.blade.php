<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @if (config('app.env') != 'local')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
            integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endif
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('logo.svg') }}">
    <script src="{{ asset('moment/moment.min.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('components.layouts.patials.navbar')
        @include('components.layouts.patials.sidebar')
        <div class="content-wrapper">
            {{ $slot }}
        </div>
        @include('components.layouts.patials.footer')
    </div>
    @stack('js')
    @livewireScripts
</body>

</html>
