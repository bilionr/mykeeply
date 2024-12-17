<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyKeeply</title>
    <link rel="icon" type="image/png" href="{{ asset('images/mykeep.png') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    @include('layouts.head')
    
    @yield('content')

    <footer class="footer">
        @include('layouts.foot')
    </footer>

</body>
</html>
