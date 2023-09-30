<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap, React CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary box" style="border-top: 1px solid #000;border-bottom: 1px solid #000;background: #00327C !important;">
        <div class="container-fluid rectangle">
            <div class="image"><img class="healthy-eating-app" src="img/healthy-eating-app.png" /></div>
            <a id="thh" href=""></a>
            <!-- <a style="color: #FFF;font-family: IM FELL Double Pica;font-size: 40px;font-style: normal;font-weight: 400;line-height: normal;">The Healthy Hub</a> -->

        <div id="search-bar" class=""></div>

        <div id="lisu"></div>

        </div>
    </nav>

    <!-- Sidebar -->

    <div id="side-bar"></div>
    
    <div id="pic-nav"></div>

    <div id="pop-box"></div>

    <div id="post-create"></div>

    <div class="post-display">
        <div class="group">
            <img class="image" src="img/image-8.png" />
            <div class="div">
                <a href=""><img class="ellipse" src="img/funny-food.png" /></a>
                <p class="text-wrapper">tth/FunnyFoods • 8 hrs ago</p>
                <a href=""><img class="ellipsis" src="img/ellipsis.png" /></a>
                <a href=""><img class="close" src="img/close.png" /></a>
            </div>
        </div>
    </div>

</body>
</html>