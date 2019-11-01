@extends('layouts.app')

@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/bromolandscape.jpg') }}"></div>
    <div class="home_content">
        <div class="home_title">Lokasi Wisata</div>
    </div>
</div>


<!-- Search -->

<div class="search">
    <!-- Search Contents -->
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="col fill_height">

                <!-- Search Tabs -->

                <div class="search_tabs_container">
                    <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/cruise.png') }}" alt=""><span>Paket Wisata</span></div>
                        <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/island.png') }}" alt="">Lokasi Wisata</div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/bus.png') }}" alt="">Sewa Kendaraan</div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/suitcase.png') }}" alt="">Hotel</div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/diving.png') }}" alt="">Penyedia Jasa</div>
                    </div>
                </div>

                <!-- Search Panel -->

                <div class="search_panel">
                    <form method="GET" action="{{ url('package') }}" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                        {{-- @csrf --}}
                        <div class="search_item" style="width:80% !important;margin-top: 20px;">
                            <div>Kota</div>
                            <input type="text" name="location" class="destination search_input" required="required">
                        </div>
                        <button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
                    </form>
                </div>

                <!-- Search Panel -->

                <div class="search_panel active">
                    <form method="GET" action="{{ url('tourism_site') }}" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                        {{-- @csrf --}}
                        <div class="search_item" style="width:64% !important;margin-top: 20px;">
                            <div>Kota</div>
                            <input type="text" name="location" class="destination search_input" required="required" value="{{ Request::get('location') }}">
                        </div>
                        <div class="search_item" style="margin-top: 20px;">
                            <div>Tipe Wisata</div>
                            <select name="category_id" id="category_id" class="dropdown_item_select search_input" required="required">
                                <option value="">Pilih Tipe Wisata</option>
                                @foreach($categories as $category)
                                    @php
                                        $selected = '';
                                        if(Request::get('category_id') == $category->id){
                                            $selected = 'selected';
                                        }
                                    @endphp
                                    <option value="{{ $category->id }}" {{ $selected }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
                    </form>
                </div>

                <!-- Search Panel -->

                <div class="search_panel">
                    <form method="GET" action="{{ url('vehicle') }}" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                        @csrf
                        <div class="search_item" style="width:64% !important;margin-top: 20px;">
                            <div>Kota</div>
                            <input type="text" name="location" class="destination search_input" required="required">
                        </div>
                        <div class="search_item" style="margin-top: 20px;">
                            <div>Tipe Kendaraan</div>
                            <select name="type" id="type" class="dropdown_item_select search_input" required="required">
                                <option value="" disabled>Pilih Tipe Kendaraan</option>
                                <option value="bike">Motor</option>
                                <option value="car">Mobil</option>
                            </select>
                        </div>
                        <button class="button search_button">search<span></span><span></span><span></span></button>
                    </form>
                </div>

                <!-- Search Panel -->

                <div class="search_panel">
                    <form method="GET" action="{{ url('lodgement') }}" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                        @csrf
                        <div class="search_item" style="width:80% !important;margin-top: 20px;">
                            <div>Kota</div>
                            <input type="text" name="location" class="destination search_input" required="required">
                        </div>
                        <button class="button search_button">search<span></span><span></span><span></span></button>
                    </form>
                </div>

                <!-- Search Panel -->

                <div class="search_panel">
                    <form method="GET" action="{{ url('service_provider') }}" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                        @csrf
                        <div class="search_item" style="width:64% !important;margin-top: 20px;">
                            <div>Kota</div>
                            <input type="text" name="location" class="destination search_input" required="required">
                        </div>
                        <div class="search_item" style="margin-top: 20px;">
                            <div>Tipe Layanan</div>
                            <select name="service_provider_type_id" id="service_provider_type_id" class="dropdown_item_select search_input" required="required">
                                <option value="" disabled>Pilih Tipe Layanan</option>
                                @foreach($service_provider_types as $service_provider_type)
                                    <option value="{{ $service_provider_type->id }}">{{ $service_provider_type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="button search_button">search<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
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
        @foreach($tourism_sites as $no => $tourism_site)
            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@kensuarez -->
                                <div class="offers_image_background" style="background-image:url({{ asset($tourism_site->default_picture) }})"></div>
                                <div class="offer_name"><a href="{{ url('tourism_site/'.$tourism_site->id) }}">{{ $tourism_site->name }}</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">Rp {{ number_format($tourism_site->price, 0, ',', '.') }}</div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">{{ $tourism_site->desc }}</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><i class="fa fa-arrow-right"></i> <a href="{{ url('tourism_site/'.$tourism_site->id) }}">read more</a> &nbsp;&nbsp;&nbsp; <a href="{{ url('order') }}"> <i class="fa fa-shopping-cart"></i> order now</a></div>
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
