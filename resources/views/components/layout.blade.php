<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @vite(['resources/sass/app.scss','resources/js/app.js'])
    @stack('scripts')
</head>
<body>
    <main class="container pt-5">
        {{ $slot }}
    </main>
</body>
</html>
