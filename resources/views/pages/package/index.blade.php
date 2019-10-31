@extends('layouts.app')

@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/bromolandscape.jpg') }}"></div>
    <div class="home_content">
        <div class="home_title ">Paket Wisata</div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">Pilih paket wisata yang kamu sukai</h2>
                <h2 class="intro_title text-center">atau</h2>
                <h2 class="intro_title text-center">Buat paket wisatamu sendiri</h2>
            </div>
        </div>

        @foreach($packages as $no => $package)
            @if($no % 3 == 0)
                <div class="row intro_items">
            @endif

                <!-- Intro Item -->

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url(images/kotatua.jpg)"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date2">{{ $package->name }}</div>
                            <div class="button intro_button"><div class="button_bcg"></div>
                            <a href="{{ url('package/'.$package->id) }}">see more<span></span><span></span><span></span></a></div>
                            <div class="intro_center text-center">
                                {{ $package->desc }}
                                <div class="intro_price">Rp {{ number_format($package->price, 0, ',', '.') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

            @if($no % 3 == 2)
                </div>
            @endif
        @endforeach
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
