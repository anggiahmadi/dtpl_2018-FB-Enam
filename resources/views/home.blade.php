@extends('layouts.app')

@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about_background.jpg') }}"></div>
    <div class="home_content">
        <div class="home_title">Selamat datang!</div>
    </div>
</div>

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
@endsection
