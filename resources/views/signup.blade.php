@extends('layouts.main')
@section('login/signup')

<div id="signup-card">



    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="signup-card">
            <div class="group">
                <div class="overlap">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <img class="user" alt="User" src="img/user-112-512-1.png" />
                    <div class="div">Sign Up</div>
                    <input name="email" class="div-wrapper" placeholder="Email"></input>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input name="password" type="password" class="overlap-2" placeholder="Password"></input>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input name="confirmPassword" type="password" class="overlap-group" placeholder="Confirm Password"></input>
                    @error('confirmPassword')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group-2">
                            <button type="submit" class="text-wrapper-3">
                                Enter
                            </button>
                        </div>
                    </div>
                    <a style="background: none;border: none;text-decoration:none;" href="{{ url('/log-in') }}" class="text-wrapper-2">Back</a>
                </div>
            </div>
        </div>
    </form>
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
