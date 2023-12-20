<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                        <img class="ellipse" alt="User Picture" src="{{ Auth::user()->picture ? asset('images/' . Auth::user()->picture) : asset('img/default.png') }}" /> <img class="sort-down dropdown" alt="Sort down" src="img/sort-down.png" />
                        <div class="jaded">
                            @if(Auth::check())
                            <p class="" alt="Username">{{ Auth::user()->username }}</p>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="logout-button" style="white-space: nowrap; border: none; background: none; display: contents;">Log Out</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>


    @yield('content')

</body>

<style>
    .logout-button:hover {
        color: red;
    }
</style>

</html>
