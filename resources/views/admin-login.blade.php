<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <title>Admin Login</title>
</head>

@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach
</div>
@endif


<body>
    <div class="admin-title">
        <div class="text-wrapper">The Healthy Hub</div>
    </div>
    <div class="admin-box">
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="group">
                <div class="overlap">
                    <img class="icon-user-lock" src="{{ asset('img/icon-user-lock.png') }}" />

                    <div class="div">Admin Log In</div>

                    <input class="rectangle" name="username" placeholder="Username">

                    <input class="rectangle-2" name="password" type="password" placeholder="Password">

                    <div class="overlap-group-wrapper">
                        <button class="overlap-group" type="submit">Enter</button>
                    </div>
                    <div class="bp">
                        <a class="p" href="{{ route('login') }}">Back to Normal Log In</a>
                        <a class="text-wrapper-2">Password Retrieval</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<style>
    .alert {
        position: absolute;
        top: 1rem;
        left: 1rem;
    }
</style>

<script>
    window.onload = function() {
        setTimeout(function() {
            $('.alert-danger').fadeOut('slow');
        }, 3000); // 3 seconds
    }
</script>

</html>
