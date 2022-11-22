<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Downloader</title>
    @include('partials.css')
</head>
<body>

    <div class="container">
        @yield('content')
    </div>
    @include('partials.js')
</body>
    @include('partials.footer')
</html>