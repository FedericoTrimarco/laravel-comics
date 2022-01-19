<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>DC COMICS</title>
</head>
<body class="d-flex flex-column">
    @include('partiarls.header')

    <main class="flex-grow-1 py-5">
        @yield('main-content')
    </main>

    @include('partiarls.footer')
</body>
</html>