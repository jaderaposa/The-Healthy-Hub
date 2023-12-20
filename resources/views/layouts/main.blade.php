<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div class="desc">
        <p class="text-wrapper">A community for people who want to improve their health through nutrition</p>
    </div>
    <div class="login">
        <div>
            <a href="{{ url('/admin-login') }}"><img class="healthy-eating-app" src="img/healthy-eating-app.png" /></a>
        </div>
        <div class="text-wrapper">The Healthy Hub</div>
        <p class="div">“Eat for your future, not just your taste buds”</p>
    </div>
    <div class="social-media">
        <div class="group">
            <div>
                <p class="text-wrapper">Follow us through our social media</p>
            </div>
            <div class="icons">
                <div>
                    <img class="facebook-app-symbol" src="img/facebook-app-symbol-1.png" />
                </div>
                <div>
                    <img class="twitter" src="img/twitter-1.png" />
                </div>
                <div>
                    <img class="reddit" src="img/reddit-1.png" />
                </div>
                <div>
                    <img class="instagram" src="img/instagram-1.png" />
                </div>
            </div>

            <div class="div">
                <!-- <img class="line" src="img/line-5.svg" />
                <img class="line" src="img/line-5.svg" />
                <img class="line" src="img/line-5.svg" /> -->
                <div class="text-wrapper-2">Home</div>
                <img class="line" src="img/line-5.svg" />
                <div class="text-wrapper-3">Products</div>
                <img class="line" src="img/line-5.svg" />
                <div class="text-wrapper-4">Company</div>
                <img class="line" src="img/line-5.svg" />
                <div class="text-wrapper-5">Blog</div>
            </div>

        </div>
    </div>
    <div class="main-container">
        @yield('login/signup')
    </div>
</body>

</html>


</body>

</html>
