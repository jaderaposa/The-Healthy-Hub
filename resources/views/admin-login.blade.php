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
    <div class="admin-title">
        <div class="text-wrapper">The Healthy Hub</div>
    </div>
    <div class="admin-box">
        <div class="group">
            <div class="overlap">
                <img class="icon-user-lock" src="{{ asset('img/icon-user-lock.png') }}" />

                <div class="div">Admin Log In</div>

                <input class="rectangle" placeholder="Username">

                <input class="rectangle-2" placeholder="Password">

                <div class="overlap-group-wrapper">
                    <button class="overlap-group">Enter</button>
                </div>
                <div class="bp">
                    <a class="p">Back to Normal Log In</a>
                    <a class="text-wrapper-2">Password Retrieval</a>
                </div>
            </div>
        </div>
    </div>



</body>
</html>