<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary box" style="border-top: 1px solid #000;border-bottom: 1px solid #000;background: #00327C !important;">
        <div class="container-fluid rectangle">
            <div class="image"><img class="healthy-eating-app" src="img/healthy-eating-app.png" /></div>
            <a id="thh" href=""></a>
            <!-- <a style="color: #FFF;font-family: IM FELL Double Pica;font-size: 40px;font-style: normal;font-weight: 400;line-height: normal;">The Healthy Hub</a> -->

        <div id="search-bar" class=""></div>

        <div style="position: relative;width: max-content;left: 204px;">
            <div class="line-md-switch-off">
                <a href=""><img class="mask-group" src="" /></a>
            </div>
        </div>

        <div id="udd"></div>

        </div>
    </nav>



    <!-- Content -->
    
    @yield('content')


</body>
</html> 