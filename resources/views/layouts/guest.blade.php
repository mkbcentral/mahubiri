<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('logo.svg') }}">
    @livewireStyles
    <script src="{{ asset('moment/moment.min.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="hold-transition login-page antialiased">
    {{ $slot }}
    @livewireScripts
</body>

</html>
