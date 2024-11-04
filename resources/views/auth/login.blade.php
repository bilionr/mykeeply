@extends('layouts.default')
@section('title', 'Login')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <form  method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email atau Nomor Telepon" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <div class="login-footer">
                <a >Daftar</a>
                <span>|</span>
                <a >Lupa password?</a>
            </div>
        </div>
    </div>
@endsection