<div>
    <!-- main menu-->
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
                    <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i
                                class="ft-home"></i><span data-i18n=""
                                class="menu-title">Dashboard</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="ft-user mr-2"></i><span data-i18n=""
                                class="menu-title">
                                Profile</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="ft-edit mr-2"></i><span data-i18n=""
                                class="menu-title">Edit
                                Profile</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{route('admin.service_categories')}}"><i class="
                        ft-briefcase mr-2"></i><span data-i18n=""
                                class="menu-title">Service Categories</span></a>
                    </li>

                    <li class=" nav-item"><a href="{{ route('admin.all_services') }}"><i
                        class="
                        ft-grid mr-2"></i><span data-i18n=""
                        class="menu-title"> All Service </span></a>
            </li>
                    <li class=" nav-item"><a href="{{route('admin.contacts')}}"><i class="
                        ft-user-plus mr-2"></i><span data-i18n=""
                                class="menu-title">All Contact</span></a>
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
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                </div>
                                <div class="card-content">

                                    <p class="font-medium-2 text-muted text-center">Hobbies</p>
                                    <div id="bar-chart" class="height-250 BarChartShadow BarChart">
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2"
                                                    style="width:10px; height:10px;"></span>
                                                <span class="font-large-1 d-block mb-2">48</span>
                                                <span>Sport</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2"
                                                    style="width:10px; height:10px;"></span>
                                                <span class="font-large-1 d-block mb-2">9</span>
                                                <span>Music</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2"
                                                    style="width:10px; height:10px;"></span>
                                                <span class="font-large-1 d-block mb-2">26</span>
                                                <span>Travel</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2"
                                                    style="width:10px; height:10px;"></span>
                                                <span class="font-large-1 d-block mb-2">17</span>
                                                <span>News</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">User List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media mb-1">
                                            <a>
                                                <img alt="96x96"
                                                    class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"
                                                    src="{{ asset('app-assets/img/portrait/small/avatar-s-12.png') }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mt-1 mb-0">Jessica Rice</h4>
                                                <p class="text-muted font-small-3">UX Designer</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="customcheckbox1">
                                                    <label class="custom-control-label" for="customcheckbox1"></label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="media mb-1">
                                            <a>
                                                <img alt="96x96"
                                                    class="media-object d-flex mr-3 bg-danger height-50 rounded-circle"
                                                    src="{{ asset('app-assets/img/portrait/small/avatar-s-11.png') }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mt-1 mb-0">Jacob Rios</h4>
                                                <p class="text-muted font-small-3">HTML Developer</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customcheckbox2">
                                                    <label class="custom-control-label" for="customcheckbox2"></label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="media mb-1">
                                            <a>
                                                <img alt="96x96"
                                                    class="media-object d-flex mr-3 bg-success height-50 rounded-circle"
                                                    src="{{ asset('app-assets/img/portrait/small/avatar-s-3.png') }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mt-1 mb-0">Russell Delgado</h4>
                                                <p class="text-muted font-small-3">Database Designer</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customcheckbox3">
                                                    <label class="custom-control-label" for="customcheckbox3"></label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="media mb-1">
                                            <a>
                                                <img alt="96x96"
                                                    class="media-object d-flex mr-3 bg-warning height-50 rounded-circle"
                                                    src="{{ asset('app-assets/img/portrait/small/avatar-s-6.png') }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mt-1 mb-0">Sara McDonald</h4>
                                                <p class="text-muted font-small-3">Team Leader</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="customcheckbox4">
                                                    <label class="custom-control-label" for="customcheckbox4"></label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="media mb-1">
                                            <a>
                                                <img alt="96x96"
                                                    class="media-object d-flex mr-3 bg-info height-50 rounded-circle"
                                                    src="{{ asset('app-assets/img/portrait/small/avatar-s-18.png') }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="font-medium-1 mt-1 mb-0">Janet Lucas</h4>
                                                <p class="text-muted font-small-3">Project Manger</p>
                                            </div>
                                            <div class="mt-1">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customcheckbox5">
                                                    <label class="custom-control-label" for="customcheckbox5"></label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="action-buttons mt-2 text-center">
                                            <a class="btn btn-raised gradient-blackberry py-2 px-4 white mr-2">Add
                                                New</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Project Stats</h4>
                                </div>
                                <div class="card-content">

                                    <p class="font-medium-2 text-muted text-center">Project Tasks</p>
                                    <div id="donut-dashboard-chart" class="height-250 donut">
                                    </div>

                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">23% - Started</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 23%;" aria-valuenow="23" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">14% - In Progress</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-amber" role="progressbar"
                                                        style="width: 14%;" aria-valuenow="14" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">35% - Remaining</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-deep-purple bg-lighten-1"
                                                        role="progressbar" style="width: 35%;" aria-valuenow="35"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <span class="mb-1 text-muted d-block">28% - Done</span>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-blue" role="progressbar"
                                                        style="width: 28%;" aria-valuenow="28" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
