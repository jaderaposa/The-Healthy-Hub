@extends('layouts.main')
@section('login/signup')

<div id="signup-card">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="signup-card">
            <div class="group">
                <div class="overlap">
                    <img class="user" alt="User" src="img/user-112-512-1.png" />
                    <div class="div">Sign Up</div>
                    <input name="email" class="div-wrapper" placeholder="Email"></input>
                    <input name="password" type="password" class="overlap-2" placeholder="Password"></input>
                    <input name="confirmPassword" type="password" class="overlap-group" placeholder="Confirm Password"></input>
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group-2">
                            <button type="submit" class="text-wrapper-3">
                                Enter
                            </button>
                        </div>
                    </div>
                    <div class="text-wrapper-2">Back</div>
                </div>
            </div>
        </div>
    </form>
</div>

@stop
