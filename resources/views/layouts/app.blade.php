<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="PiknikYuk! Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/offers_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/offers_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_listing_responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    @yield('css')
</head>

<body>
    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="user_box ml-auto">
                                @guest
                                    <div class="user_box_login user_box_link"><a href="{{ url('login') }}">{{ __('Masuk') }}</a></div>
                                    @if (Route::has('register'))
                                        <div class="user_box_register user_box_link"><a href="{{ url('register') }}">{{ __('Daftar') }}</a></div>
                                    @endif
                                @else
                                    <!-- $users as $user -->
                                    <div class="user_box_login user_box_link"><a href="{{ url('visitor') }}">{{ Auth::user()->name }}</a></div>
                                    <div class="user_box_login user_box_link"><a href="{{ url('order') }}">{{ __('Persanan Ku') }}</a></div>
                                    <div class="user_box_register user_box_link"><a href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Keluar') }}</a></div>

                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <div class="logo"><a href="{{ url('') }}"><img src="{{ asset('images/logo.png') }}" alt="">PiknikYuk!</a></div>
                            </div>
                            <div class="main_nav_container ml-auto">
                                <ul class="main_nav_list">
                                    <li class="main_nav_item"><a href="{{ url('') }}">beranda</a></li>
                                    <li class="main_nav_item dropdown">
                                        <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Informasi Wisata
                                        </a>
                                        
                                        <div class="dropdown-menu bg-dark text-dark" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{ url('package') }}">Paket Wisata</a>
                                            <a class="dropdown-item" href="{{ url('tourism_site') }}">Lokasi Wisata</a>
                                            <a class="dropdown-item" href="{{ url('lodgement') }}">Hotel</a>
                                            <a class="dropdown-item" href="{{ url('vehicle') }}">Sewa Kendaraan</a>
                                            <a class="dropdown-item" href="{{ url('service_provider') }}">Penyedia Jasa</a>
                                        </div>
                                    </li>
                                    <li class="main_nav_item"><a href="{{ url('about') }}">Tentang Kami</a></li>
                                    <li class="main_nav_item"><a href="{{ url('contact') }}">Hubungi Kami</a></li>
                                </ul>
                            </div>
                            <div class="content_search ml-lg-0 ml-auto">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                                                s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                                                C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                                                M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                                                c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                                                c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                                                C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container"><div class="menu_close"></div></div>
                <div class="logo menu_logo"><a href="{{ url('') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a></div>
                <ul>
                    <li class="menu_item"><a href="{{ url('') }}">home</a></li>
                    <li class="menu_item"><a href="{{ url('') }}">about us</a></li>
                    <li class="menu_item"><a href="{{ url('') }}">offers</a></li>
                    <li class="menu_item"><a href="{{ url('') }}">news</a></li>
                    <li class="menu_item"><a href="{{ url('') }}">contact</a></li>
                </ul>
            </div>
        </div>
        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-4 footer_column">
                        <div class="footer_col">
                            <div class="footer_content footer_about">
                                <div class="logo_container footer_logo">
                                    <div class="logo"><a href="#"><img src="{{ asset('images/logo.png') }}" alt="">PiknikYuk!</a></div>
                                </div>
                                <p class="footer_about_text">Website ini merupakan website agen travel yang dibangun dan dikelola oleh mahasiswa Fakultas Ilmu Komputer Universitas Indonesia.<br>Jakarta 2019</p>
                                <ul class="footer_social_list">
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-4 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">tags</div>
                            <div class="footer_content footer_tags">
                                <ul class="tags_list clearfix">
                                    <li class="tag_item"><a href="#">piknik</a></li>
                                    <li class="tag_item"><a href="#">liburan</a></li>
                                    <li class="tag_item"><a href="#">jawa</a></li>
                                    <li class="tag_item"><a href="#">video</a></li>
                                    <li class="tag_item"><a href="#">indonesia</a></li>
                                    <li class="tag_item"><a href="#">fotografi</a></li>
                                    <li class="tag_item"><a href="#">petualangan</a></li>
                                    <li class="tag_item"><a href="#">travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-4 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">Informasi Kontak</div>
                            <div class="footer_content footer_contact">
                                <ul class="contact_info_list">
                                    <li class="contact_info_item d-flex flex-row">
                                        <div><div class="contact_info_icon"><img src="{{ asset('images/placeholder.svg') }}" alt=""></div></div>
                                        <div class="contact_info_text">Universitas Indonesia, Salemba, Jakarta</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div><div class="contact_info_icon"><img src="{{ asset('images/phone-call.svg') }}" alt=""></div></div>
                                        <div class="contact_info_text">085123123123</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div><div class="contact_info_icon"><img src="{{ asset('images/message.svg') }}" alt=""></div></div>
                                        <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">admin@piknikyuk.com</a></div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div><div class="contact_info_icon"><img src="{{ asset('images/planet-earth.svg') }}" alt=""></div></div>
                                        <div class="contact_info_text"><a href="https://colorlib.com">www.piknikyuk.com</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2  ">
                        <div class="copyright_content d-flex flex-row align-items-center">
                            <div>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                            <div class="footer_nav">
                                <ul class="footer_nav_list">
                                    <li class="footer_nav_item"><a href="{{ url('') }}">home</a></li>
                                    <li class="footer_nav_item"><a href="{{ url('') }}">about us</a></li>
                                    <li class="footer_nav_item"><a href="{{ url('') }}">offers</a></li>
                                    <li class="footer_nav_item"><a href="{{ url('') }}">news</a></li>
                                    <li class="footer_nav_item"><a href="{{ url('') }}">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('plugins/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{ asset('js/single_listing_custom.js') }}"></script>
    <script src="{{ asset('js/offers_custom.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5dbd9c45154bf74666b72b93/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();

        var total_request = 0;

        function submitForm(formId){
            if(total_request > 0)
            {
                alert("you already make a request");
            }
            else
            {
                total_request++;
                document.getElementById(formId).submit();
            }
        }

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    </script>
    <!--End of Tawk.to Script-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    @yield('js')
</body>

</html>
