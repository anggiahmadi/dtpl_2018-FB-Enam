@extends('layouts.app')

@section('title')
DTPL Kelompok 6
@endsection

@section('content')
<!-- Home -->

<div class="home">

<!-- Daftar Wisata Kota -->

<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title"></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Wisata Kota Slider -->

                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">

                        <!-- Daftar Kota -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('images/kotajakarta.jpg') }}" alt="https://unsplash.com/@anniegray"></div>
                                <div class="test_icon"><img src="{{ asset('images/backpack.png') }}" alt=""></div>
                            </div>
                        </div>

                        <!-- Daftar Kota -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('images/kotabandung.jpg') }}" alt="https://unsplash.com/@anniegray"></div>
                                <div class="test_icon"><img src="{{ asset('images/backpack.png') }}" alt=""></div>
                            </div>
                        </div>

                           <!-- Daftar Kota -->
                           <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="{{ asset('images/kotajogja.jpg') }}" alt="https://unsplash.com/@anniegray"></div>
                                    <div class="test_icon"><img src="{{ asset('images/backpack.png') }}" alt=""></div>
                                </div>
                            </div>


                        <!-- Daftar Kota -->
                        <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="{{ asset('images/kotamalang.jpg') }}" alt="https://unsplash.com/@anniegray"></div>
                                    <div class="test_icon"><img src="{{ asset('images/backpack.png') }}" alt=""></div>
                                </div>
                            </div>


                    </div>

                    <!-- Testimonials Slider Nav - Prev -->
                    <div class="test_slider_nav test_slider_prev">
                        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_prev'>
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

                    <!-- Testimonials Slider Nav - Next -->
                    <div class="test_slider_nav test_slider_next">
                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_next'>
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
        </div>

    </div>
</div>

<div class="trending">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">trending now</h2>
            </div>
        </div>
        <div class="row trending_container">

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_1.png') }}" alt="https://unsplash.com/@fransaraco"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">grand hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_2.png') }}" alt="https://unsplash.com/@grovemade"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_3.png') }}" alt="https://unsplash.com/@jbriscoe"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">queen hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_4.png') }}" alt="https://unsplash.com/@oowgnuj"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_5.png') }}" alt="https://unsplash.com/@mindaugas"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">grand hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_6.png') }}" alt="https://unsplash.com/@itsnwa"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_7.png') }}" alt="https://unsplash.com/@rktkn"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">queen hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <!-- Trending Item -->
            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{ asset('images/trend_8.png') }}" alt="https://unsplash.com/@thoughtcatalog"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="contact">
    <div class="contact_background" style="background-image:url({{ asset('images/contact.png') }})"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_image">

                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_container">
                    <div class="contact_title">get in touch</div>
                    <form action="#" id="contact_form" class="contact_form">
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
