<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS and JS -->
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

            <div id="udd">
                <div class="box3">
                    <div class="group">
                        <div class="ellipse" />
                        <img class="sort-down dropdown" alt="Sort down" src="img/sort-down.png" />
                        <div class="jaded">
                            <p class="" alt="Username">{{ Auth::check() ? Auth::user()->email : 'Guest' }}</p>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="" style="white-space: nowrap;border: none;background: none;display: contents;">Log Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>


    @yield('content')

</body>

</html>
