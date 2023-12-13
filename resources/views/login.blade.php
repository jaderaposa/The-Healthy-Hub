@extends('layouts.main')
@section('login/signup')



<!-- rest of your form here -->
<div id="login-card">
    <div class="login-card">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="group">
                <div class="overlap">
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group">
                            <img class="user" alt="User" src="img/user-112-512-1.png" />
                            <div class="text-wrapper">Log In</div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- ... -->
                                <input class="div-wrapper" placeholder="Email" name="email" required></input>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="password" class="overlap-2" placeholder="Password" name="password" required></input>
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <!-- ... -->
                            </form>
                            <div class="text-wrapper-2">Forgot Password?</div>
                            <div class="text-wrapper-3"><a style="text-decoration: none;color: inherit;" href="{{ url('/sign-up') }}">Don't have an account?</a></div>
                        </div>
                    </div>
                    <div class="overlap-wrapper">
                        <div class="overlap-3">
                            <button style="background: none;border: none;" type="submit" class="text-wrapper-4">
                                Enter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    div.alert {
        padding: 5px;
        /* Adjust as needed */
        margin: 5px;
        /* Adjust as needed */
        background-color: white;
    }
</style>

<script>
    $(document).ready(function() {
        $(".alert").delay(3000).slideUp(200, function() {
            $(this).alert('close');
        });
    });
</script>

@stop
