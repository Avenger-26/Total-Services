<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="black"
        data-image="{{ asset('app-assets/img/sidebar-bg/01.jpg') }}" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
                    <span class="text align-left">Total Service</span>
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
                    <li class=" nav-item"><a href="{{ route('sprovider.dashboard') }}"><i
                                class="ft-home"></i><span data-i18n=""
                                class="menu-title">Dashboard</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('sprovider.profile') }}"><i
                                class="ft-user mr-2"></i><span data-i18n="" class="menu-title">
                                Profile</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('sprovider.edit_profile') }}"><i
                                class="ft-edit mr-2"></i><span data-i18n="" class="menu-title">Edit
                                Profile</span></a>
                    </li>

                    <li class=" nav-item"><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="ft-power mr-2"></i><span data-i18n="" class="menu-title">Logout</span></a>
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
                @elseif(Auth::user()->u_type==='SPV')
                    <li class="login-form"><a href="#" title="Register">My Account(S Provider)</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{ route('sprovider.dashboard') }}">Dasboard</a></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="login-form"><a href="" title="Register">My Account( Costumer )</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{ route('costumer.dashboard') }}">Dasboard</a></li>
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
                            href="javascript:;" class="open-navbar-container black"><i
                                class="ft-more-vertical"></i></a></span>
                    <form role="search" class="navbar-form navbar-right mt-1">
                        <div class="position-relative has-icon-right">
                            <input type="text" placeholder="Search" class="form-control round" />
                            <div class="form-control-position"><i class="ft-search"></i></div>
                        </div>
                    </form>
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
                                        href="{{ route('sprovider.edit_profile') }}" class="dropdown-item py-1"><i
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

        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <!--Basic User Details Starts-->
                    <section id="user-profile">
                        <div class="row">
                            <div class="col-12">
                                <div class="card profile-with-cover">
                                    <div class="card-img-top img-fluid bg-cover height-300"
                                        style="background: url({{ asset('app-assets/img/photos/14.jpg') }}) 50%;"></div>
                                    <div class="media profil-cover-details row">
                                        <div class="col-5">
                                            <div class="align-self-start halfway-fab pl-3 pt-2">
                                                <div class="text-left">
                                                    <h3 class="card-title white">{{ Auth::user()->name }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="align-self-center halfway-fab text-center">
                                                <a class="profile-image">
                                                    @if ($sprovider->image)
                                                        <img src="{{ asset('images/sproviders') }}/{{ $sprovider->image }}"
                                                            width="100" height="100" alt=""
                                                            class="rounded-circle img-border gradient-summer">

                                                    @else
                                                        <img src="{{ asset('images/sproviders/default.png') }}" alt=""
                                                            class="rounded-circle img-border gradient-summer width-100">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                        </div>
                                        <div class="profile-cover-buttons">
                                            <div class="media-body halfway-fab align-self-end">

                                                <div class="text-right d-block d-sm-block d-md-block d-lg-none">
                                                    <button type="button" class="btn btn-primary btn-raised mr-2"><i
                                                            class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-success btn-raised mr-3"><i
                                                            class="fa fa-dashcube"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-section">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 ">
                                                <ul class="profile-menu no-list-style">
                                                    <li>
                                                        <a href="#about"
                                                            class="primary font-medium-2 font-weight-600">About</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="col-lg-2 col-md-2 text-center">
                                                <span
                                                    class="font-medium-2 text-uppercase">{{ Auth::user()->name }}</span>
                                                <p class="grey font-md-4">
                                                    @if ($sprovider->service_category_id)
                                                        {{ $sprovider->category->name }}
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <ul class="profile-menu no-list-style">

                                                    <li>
                                                        <a href="{{ route('sprovider.edit_profile') }}"
                                                            class="primary font-medium-2 font-weight-600">Edit Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Basic User Details Ends-->
                    <!--About section starts-->
                    <section id="about">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-header">About</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <span class="text-bold-500 primary">About Me:</span>
                                                <span class="d-block overflow-hidden">{{ $sprovider->about }}
                                                </span>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-mail font-small-3"></i> Email:</a></span>
                                                            <span
                                                                class="d-block overflow-hidden">{{ Auth::user()->email }}</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-globe font-small-3"></i> Lives
                                                                    in:</a></span>
                                                            <span
                                                                class="d-block overflow-hidden">{{ $sprovider->city }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-smartphone font-small-3"></i> Phone
                                                                    Number:</a></span>
                                                            <a
                                                                class="d-block overflow-hidden">{{ $sprovider->phone }}</a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-user font-small-3"></i>
                                                                    Gender:</a></span>
                                                            <span class="d-block overflow-hidden">Male</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-book font-small-3"></i>Provider
                                                                    Profession:</a></span>
                                                            <span class="d-block overflow-hidden">
                                                                @if ($sprovider->service_category_id)
                                                                    {{ $sprovider->category->name }}
                                                                @endif
                                                            </span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-map-pin font-small-3"></i>
                                                                    Service Location:</a></span>
                                                            <span
                                                                class="d-block overflow-hidden">{{ $sprovider->service_locations }}</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mt-3">
                                                <span class="text-bold-500 primary">Hobbies:</span>
                                                <span class="d-block overflow-hidden">I like to ride the cycle to work,
                                                    swimming, listning music and
                                                    working out. I also like reading magazines, go to museums, watching good
                                                    movies and eat spicy food
                                                    while
                                                    it’s raining outside.Twin siblings Dipper and Mabel Pines spend the
                                                    summer
                                                    at their uncle's tourist
                                                    trap
                                                    in the enigmatic town of Gravity Falls.A mysterious Hollywood stuntman
                                                    and
                                                    mechanic moonlights as a
                                                    getaway driver.Scuba Diving, Skiing, Surfing, Photography, Long drive.
                                                </span>
                                            </div>
                                            <div class="mt-2 overflow-hidden">
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-plane danger font-large-2"></i>
                                                    <div class="mt-2">Travelling</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-speedometer danger font-large-2"></i>
                                                    <div class="mt-2">Driving</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-camera danger font-large-2"></i>
                                                    <div class="mt-2">Photography</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-game-controller danger font-large-2"></i>
                                                    <div class="mt-2">Gaming</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-music-tone-alt danger font-large-2"></i>
                                                    <div class="mt-2">Music</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="ft-monitor danger font-large-2"></i>
                                                    <div class="mt-2">Surfing</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="ft-pie-chart danger font-large-2"></i>
                                                    <div class="mt-2">Foodie</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="ft-tv danger font-large-2"></i>
                                                    <div class="mt-2">TV</div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Educational Information</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> Broklin
                                                                    Institute</a></span>
                                                            <span class="grey line-height-0 d-block mb-2 font-small-2">2008
                                                                -
                                                                2009</span>
                                                            <span class="line-height-2 d-block overflow-hidden">Professor:
                                                                Leonardo Stagg. Six months of best
                                                                Developing tools course.</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> The Ninja College
                                                                </a></span>
                                                            <span class="grey line-height-0 d-block mb-2 font-small-2">2012
                                                                -
                                                                2013</span>
                                                            <span class="line-height-2 d-block overflow-hidden">Professor:
                                                                Steve Ustreil. Gave me the best
                                                                educational information for Ninja.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> Ninja
                                                                    Developer</a></span>
                                                            <span
                                                                class="grey line-height-0 d-block mb-2 font-small-2">2009-2011</span>
                                                            <span class="line-height-2 d-block overflow-hidden">Ninja
                                                                Developer
                                                                for the “PIXINVENT” creative
                                                                studio. </span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> Senior Ninja
                                                                    Developer</a></span>
                                                            <span
                                                                class="grey line-height-0 d-block mb-2 font-small-2">2014-Now</span>
                                                            <span class="line-height-2 d-block overflow-hidden">Senior
                                                                Ninja
                                                                Developer for the “PIXINVENT”
                                                                creative studio.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--About section ends-->

                    {{-- <div class="row justify-content-md-center">
                        <div class="col-md-6 ">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                        id="from-actions">Service Provider Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row d-flex justify-content0 ">
                                        <div class="col-md-10">
                                            @if ($sprovider->image)
                                                <img src="{{ asset('storage\app\sproviders\1638529582.png') }}" alt=""
                                                    width="150" height="150" class="rounded-circle mx-auto d-flex my-2">

                                            @else
                                                <img src="{{ asset('images/sproviders/default.png') }}" alt="" width="150"
                                                    height="150" class="rounded-circle mx-auto d-flex my-2">
                                            @endif

                                            <h3>{{ Auth::user()->name }}</h3>
                                            <h4><b>About: </b>{{ $sprovider->about }}</h4>
                                            <h4><b>Email: </b>{{ Auth::user()->email }}</h4>
                                            <h4><b>Phone: </b>{{ $sprovider->phone }}</h4>
                                            <h4><b>City: </b>{{ $sprovider->city }}</h4>
                                            <h4><b>Provider Profession: </b>
                                                @if ($sprovider->service_category_id)
                                                    {{ $sprovider->category->name }}
                                                @endif
                                            </h4>
                                            <h4><b>Service Location: </b>{{ $sprovider->service_locations }}</h4>

                                            <button type="submit" class="btn btn-raised btn-primary mx-auto d-flex">
                                                <a href="{{ route('sprovider.edit_profile') }}"
                                                class="  btn-primary">Edit Profile</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- END : End Main Content-->

            <!-- BEGIN : Footer-->
            <footer class="footer footer-static footer-light">
                <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2021 <a
                            href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink"
                            target="_blank" class="text-bold-800 primary darken-2">Team 26 </a>, All rights
                        reserved. </span></p>
            </footer>
            <!-- End : Footer-->

        </div>
    </div>
</div>
