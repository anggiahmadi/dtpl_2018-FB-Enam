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

        <div class="row intro_items">

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <div class="intro_item_background" style="background-image:url(images/kotatua.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date2">Jakarta Masa Lalu</div>
                        <div class="button intro_button"><div class="button_bcg"></div>
                        <a href="{{ url('package') }}">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h3 style="color:#FFFF;">Kota Tua</h3>
                            <h3 style="color:#FFFF;">Monumen Nasional</h3>
                            <h3 style="color:#FFFF;">Taman Mini Indonesia Indah</h3>
                            <h4 style="color:#FFFF;">= 2 hari 1 malam =</h4>
                            <div class="intro_price">*Mulai dari Rp 300.000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <div class="intro_item_background" style="background-image:url(images/jktaquarium.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date2">Jakarta Fun Game</div>
                        <div class="button intro_button"><div class="button_bcg"></div>
                        <a href="{{ url('package') }}">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h3 style="color:#FFFF;">Ancol</h3>
                            <h3 style="color:#FFFF;">Dunia Fantasi</h3>
                            <h3 style="color:#FFFF;">Sea World</h3>
                            <h4 style="color:#FFFF;">= 3 hari 2 malam =</h4>
                            <div class="intro_price">*Mulai dari Rp 500.000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date2">Kepulauan Seribu</div>
                        <div class="button intro_button"><div class="button_bcg"></div>
                        <a href="{{ url('package') }}">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h3 style="color:#FFFF;">Pulau Pramuka</h3>
                            <h3 style="color:#FFFF;">Pulau Tidung</h3>
                            <h3 style="color:#FFFF;">Pulau Tidore</h3>
                            <h4 style="color:#FFFF;">= 4 hari 3 malam =</h4>
                            <div class="intro_price">*Mulai dari Rp 500.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row intro_items">

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <div class="intro_item_background" style="background-image:url(images/latest_2.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date2">Karimunjawa</div>
                        <div class="button intro_button"><div class="button_bcg"></div>
                        <a href="{{ url('package') }}">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h3 style="color:#FFFF;">Hutan Mangrove</h3>
                            <h3 style="color:#FFFF;">Pantai Tanjung Gelam</h3>
                            <h3 style="color:#FFFF;">Coral Reef Gosong</h3>
                            <h4 style="color:#FFFF;">= 4 hari 3 malam =</h4>
                            <div class="intro_price">*Mulai dari Rp 500.000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <div class="intro_item_background" style="background-image:url(images/offer_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date2">Paket</div>
                        <div class="button intro_button"><div class="button_bcg"></div>
                        <a href="{{ url('package') }}">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h3 style="color:#FFFF;">Destinasi 1</h3>
                            <h3 style="color:#FFFF;">Destinasi 2</h3>
                            <h3 style="color:#FFFF;">Destinasi 3</h3>
                            <h4 style="color:#FFFF;">= 4 hari 3 malam =</h4>
                            <div class="intro_price">*Mulai dari Rp 500.000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <div class="intro_item_background" style="background-image:url(images/offer_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date2">Paket</div>
                        <div class="button intro_button"><div class="button_bcg"></div>
                        <a href="{{ url('package') }}">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h3 style="color:#FFFF;">Destinasi 1</h3>
                            <h3 style="color:#FFFF;">Destinasi 2</h3>
                            <h3 style="color:#FFFF;">Destinasi 3</h3>
                            <h4 style="color:#FFFF;">= 4 hari 3 malam =</h4>
                            <div class="intro_price">*Mulai dari Rp 500.000</div>
                        </div>
                    </div>
                </div>
            </div>
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
