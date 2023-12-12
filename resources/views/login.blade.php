@extends('layouts.main')
@section('login/signup')

<div id="login-card">
    <div class="login-card">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="group">
                <div class="overlap">
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group">
                            <div class="text-wrapper">Log In</div>
                            <input class="div-wrapper" placeholder="Email" name="email" required></input>
                            <div class="text-wrapper-2">Forgot Password?</div>
                            <div class="text-wrapper-3"><a href="{{ url('/sign-up') }}">Don't have an account?</a></div>
                            <input type="password" class="overlap-2" placeholder="Password" name="password" required></input>
                            <img class="user" alt="User" src="img/user-112-512-1.png" />
                        </div>
                    </div>
                    <div class="overlap-wrapper">
                        <div class="overlap-3">
                            <button type="submit" class="text-wrapper-4">
                                Enter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@stop
