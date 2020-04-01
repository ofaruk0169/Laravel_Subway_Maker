@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <img src="/img/sub-shop.png" alt="sub logo">
        <div class="title m-b-md">
            
            Subs made your way!
        </div>
        <p class="mssg"> {{ session('mssg') }}</p>
        <a href="/subs/create">Order a Sub</a>

     
    </div>
</div>
@endsection
