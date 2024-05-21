<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

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
