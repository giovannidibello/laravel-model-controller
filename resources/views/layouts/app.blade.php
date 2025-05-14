<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- importo fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>@yield('titolo')</title>

    @vite(["resources/sass/app.scss" , "resources/js/app.js" ])

</head>
<body>

    @include('partials.header')

    @yield('contenuto')   
    
</body>
</html>