<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- import js --}}
    @vite('resources/js/app.js')
    <title></title>
</head>
<body>
    <div class="container-fluid p-5">
        @yield('content')
    </div>
</body>
</html>