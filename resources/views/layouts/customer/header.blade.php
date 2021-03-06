<link rel="stylesheet" href="{{ asset('assets/css/border.css') }}">

<head>
    <title>Customer Dashboard</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<!-- main menu-->
<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
<div data-active-color="white" data-background-color="black"
    data-image="{{ asset('app-assets/img/sidebar-bg/01.jpg') }}" class="app-sidebar ">
    <!-- main menu header-->
    <!-- Sidebar Header starts-->
    <div class="sidebar-header ">
        <div class="logo clearfix"><a href="/" class="logo-text font-weight-bolder float-left">
                <span class="text align-left">Totat Services</span>
            </a>
            <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                    data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose"
                href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i
                    class="ft-x"></i></a>
        </div>
    </div>
    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true"
                class="navigation navigation-main">
                <li class=" nav-item"><a href="{{ route('customer.dashboard') }}" class="font-weight-bold"><i
                            class="ft-home"></i><span data-i18n="" class="">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('customer.profile') }}"><i
                            class="ft-user mr-2"></i><span data-i18n="" class="">
                            Profile</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('customer.edit_profile') }}"><i
                            class="ft-edit mr-2"></i><span data-i18n="" class="">Edit
                            Profile</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('customer.changepassword') }}">

                        <i class="fa fa-key"></i><span data-i18n="" class="">Change
                            Password</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('customer.feedback') }}">

                        <i class="fa fa-comments"></i><span data-i18n="" class="">Feedback</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="ft-power mr-2"></i><span data-i18n="" class="">Logout</span></a>
                </li>
                </li>
            </ul>
        </div>
    </div>
    @if (Route::has('login'))
        @auth
            @if (Auth::user()->u_type === 'ADM')
                <li class="login-form"><a href="#" title="Register">My Account( Admin )</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="{{ route('admin.dashboard') }}">Dasboard</a></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </li>
            @elseif(Auth::user()->u_type === 'SPV')
                <li class="login-form"><a href="#" title="Register">My Account(S Provider)</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="{{ route('sprovider.dashboard') }}">Dasboard</a></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </li>
            @else
                <li class="login-form"><a href="" title="Register">My Account( customer )</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="{{ route('customer.dashboard') }}">Dasboard</a></li>
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
        @endif
        @endif
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->
    <!-- Navbar (Header) Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button><span
                    class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent"
                        href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>

            </div>


            <div class="navbar-container">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;"
                                class="nav-link apptogglefullscreen"><i
                                    class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">fullscreen</p>
                            </a></li>

                        <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                class="nav-link position-relative dropdown-toggle"><i
                                    class="ft-user font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">User Settings</p>
                            </a>
                            <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3"
                                class="dropdown-menu text-left dropdown-menu-right"><a
                                    href="{{ route('customer.edit_profile') }}" class="dropdown-item py-1"><i
                                        class="ft-edit mr-2"></i><span>Edit
                                        Profile</span></a>
                                <div class="dropdown-divider"></div><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar (Header) Ends-->
