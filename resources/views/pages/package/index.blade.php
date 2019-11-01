@extends('layouts.app')

@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/bromolandscape.jpg') }}"></div>
    <div class="home_content">
        <div class="home_title">Paket Wisata</div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
    <div class="row">
            <div class="col text-center">
                <h2 class="section_title"></h2>
            </div>
        </div>
        <div class="row offers_items">
        @foreach($packages as $no => $package)
            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@kensuarez -->
                                <div class="offers_image_background" style="background-image:url({{ asset($package->default_picture) }})"></div>
                                <div class="offer_name"><a href="{{ url('package/'.$package->id) }}">{{ $package->name }}</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">Rp {{ number_format($package->price, 0, ',', '.') }}</div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">{{ $package->desc }}</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><i class="fa fa-arrow-right"></i> <a href="{{ url('package/'.$package->id) }}">read more</a> &nbsp;&nbsp;&nbsp; <a href="{{ url('order') }}"> <i class="fa fa-shopping-cart"></i> order now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
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
