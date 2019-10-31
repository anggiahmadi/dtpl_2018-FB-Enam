@extends('layouts.app')

@section('title')
DTPL Kelompok 6
@endsection

@section('content')
<!-- Home -->

<div class="home">

    <!-- Home Slider -->

    <div class="home_slider_container">

        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <!-- Image by https://unsplash.com/@anikindimitry -->
                <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">

                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">

                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">

                    </div>
                </div>
            </div>

        </div>

        <!-- Home Slider Nav - Prev -->
        <div class="home_slider_nav home_slider_prev">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <linearGradient id='home_grad_prev'>
                        <stop offset='0%' stop-color='#fa9e1b'/>
                        <stop offset='100%' stop-color='#8d4fff'/>
                    </linearGradient>
                </defs>
                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                C22.545,2,26,5.541,26,9.909V23.091z"/>
                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                11.042,18.219 "/>
            </svg>
        </div>

        <!-- Home Slider Nav - Next -->
        <div class="home_slider_nav home_slider_next">
            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <linearGradient id='home_grad_next'>
                        <stop offset='0%' stop-color='#fa9e1b'/>
                        <stop offset='100%' stop-color='#8d4fff'/>
                    </linearGradient>
                </defs>
            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
            M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
            C22.545,2,26,5.541,26,9.909V23.091z"/>
            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
            17.046,15.554 "/>
            </svg>
        </div>
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
                            <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/cruise.png') }}" alt=""><span>Paket Wisata</span></div>
                            <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/island.png') }}" alt="">Lokasi Wisata</div>
                            <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/bus.png') }}" alt="">Sewa Kendaraan</div>
                            <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/suitcase.png') }}" alt="">Hotel</div>
                            <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{ asset('images/diving.png') }}" alt="">Penyedia Jasa</div>
                        </div>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel active">
                        <form method="GET" action="{{ url('packages') }}" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
<<<<<<< HEAD
                            <!-- @csrf -->
=======
                            {{-- @csrf --}}
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
                            <div class="search_item" style="width:80% !important;margin-top: 20px;">
                                <div>Kota</div>
                                <input type="text" name="location" class="destination search_input" required="required">
                            </div>
                            <button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form method="GET" action="{{ url('tourism_site') }}" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                            @csrf
                            <div class="search_item" style="width:64% !important;margin-top: 20px;">
                                <div>Kota</div>
                                <input type="text" name="location" class="destination search_input" required="required">
                            </div>
                            <div class="search_item" style="margin-top: 20px;">
                                <div>Tipe Wisata</div>
                                <select name="category_id" id="category_id" class="dropdown_item_select search_input" required="required">
                                    <option value="">Pilih Tipe Wisata</option>
<<<<<<< HEAD
                                    <!-- @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach -->
=======
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
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
                                    {{-- @foreach($service_provider_types as $service_provider_type)
                                        <option value="{{ $service_provider_type->id }}">{{ $service_provider_type->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Search Result -->

    <div class="offers" style="margin-top:20px">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="section_title">the best offers with rooms</h2>
                    </div>
                </div>
                <div class="row offers_items" >
                    <!-- Offers Item -->
                    @if (count($result))
                    @foreach($result as $data)
                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                                        <!-- Image by https://unsplash.com/@kensuarez -->
                                        <div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>
                                        <div class="offer_name"><a href="#">{{ $data->name }}</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
<<<<<<< HEAD
                                        <div class="offers_price">{{ $data->price }}<span>per package</span></div>
=======
                                        <div class="offers_price">$70<span>per night</span></div>
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
                                        <div class="rating_r rating_r_4 offers_rating">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
<<<<<<< HEAD
                                        <p class="offers_text">{{ $data->desc }}</p>
=======
                                        <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="offers_link"><a href="offers.html">read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$package}}</b> Tidak Ditemukan</div>
                    @endif
                </div>
            </div>
        </div>



{{-- </div> --}}

{{-- <!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">We have the best tours</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="intro_text text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
                </div>
            </div>
        </div>
        <div class="row intro_items">

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h1>Mauritius</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@hellolightbulb -->
                    <div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h1>Greece</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@willianjusten -->
                    <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <h1>Scotland</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Offers -->

<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">the best offers with rooms</h2>
            </div>
        </div>
        <div class="row offers_items">

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@kensuarez -->
                                <div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>
                                <div class="offer_name"><a href="#">grand castle</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$70<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by Egzon Bytyqi -->
                                <div class="offers_image_background" style="background-image:url(images/offer_2.jpg)"></div>
                                <div class="offer_name"><a href="#">turkey hills</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$50<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@nevenkrcmarek -->
                                <div class="offers_image_background" style="background-image:url(images/offer_3.jpg)"></div>
                                <div class="offer_name"><a href="#">island dream</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$90<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@mantashesthaven -->
                                <div class="offers_image_background" style="background-image:url(images/offer_4.jpg)"></div>
                                <div class="offer_name"><a href="#">travel light</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$30<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}



@endsection
