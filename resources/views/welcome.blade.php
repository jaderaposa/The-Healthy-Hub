<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS and JS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary" style="border-top: 1px solid #000;border-bottom: 1px solid #000;background: #00327C !important;">
    <div class="container-fluid">
        <a id="thh" href=""></a>
        <!-- <a style="color: #FFF;font-family: IM FELL Double Pica;font-size: 40px;font-style: normal;font-weight: 400;line-height: normal;">The Healthy Hub</a> -->
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </nav>
</body>
</html>