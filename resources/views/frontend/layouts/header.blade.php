<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Total Service - Online Service Provider for your House Needs</title>
    <link rel="manifest" href="/manifest.json">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/chblue.css') }}" rel="stylesheet" media="screen">

    <link href="{{ url('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/css/custom_css.css') }}" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{ url('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/tiltjs.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    @livewireStyles
</head>

<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+911234567890"><i class="fa fa-phone"></i> +91-1234567890</a></li>
                            <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                    contact@totalservices.in</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                    +91-1234567890</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Uttar Pradesh, Lucknow</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-right">
                            <li><i class="fa fa-comment"></i> Live Chat</li>
                            <li><a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i> Uttar Pradesh,
                                    Lucknow</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-v3 ">
            <nav class="flat-mega-menu ">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img style="width:146px" src="{{ asset('assets\img\Total Services-1.png') }}"
                                alt="logo"></a>
                        {{-- <a href="/">On~Demand Services</a> --}}
                    </li>
                    <li> <a href="{{ route('home') }}">Home</a> </li>

                    <li> <a href="{{ route('home.service_categories') }}">Service Category</a> </li>
                    <li> <a href="#">About Us</a></li>

                    <li> <a href="#">Our Team</a></li>

                    <li><a href="{{ route('home.contact') }}">Contact Us</a></li>

                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->u_type === 'ADM')
                                <li class="login-form"><a href="#" title="Register"> <i class="fa fa-user"
                                            aria-hidden="true">
                                            {{ Auth::user()->name }}(Admin)</i></a>
                                    <ul class="drop-down one-column hover-fade">

                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->u_type === 'SPV')
                                <li class="login-form"><a href="#" title="Register"><i class="fa fa-user"
                                            aria-hidden="true">
                                            {{ Auth::user()->name }} ( @if (Auth::user()->service_category_id)
                                                {{ Auth::user()->category->name }}
                                            @endif
                                            )</i></a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('sprovider.dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class=""> <i class="fa fa-user-circle" aria-hidden="true">
                                        <strong> {{ Auth::user()->name }} (Customer) </strong></i>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{ route('costumer.dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
                                @csrf
                            </form>
                        @else
                            <li class="login-form"> <a href="{{ route('register') }}" title="Register">Register</a>
                            </li>
                            <li class="login-form"> <a href="{{ route('login') }}" title="Login">Login</a></li>
                        @endif
                        @endif
                        <li class="search-bar">
                        </li>
                    </ul>
                </nav>
            </header>
