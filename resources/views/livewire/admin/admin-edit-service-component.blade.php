<div>
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
                    <li class=" nav-item"><a href="{{ route('admin.service_categories') }}"><i
                                class="
                        ft-briefcase mr-2"></i><span data-i18n=""
                                class="menu-title">Service Categories</span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('admin.all_services') }}"><i
                                class="
                                ft-grid mr-2"></i><span data-i18n=""
                                class="menu-title"> All Service </span></a>
                    </li>
                    <li class=" nav-item"><a href="{{ route('admin.contacts') }}"><i
                                class="
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
                            <input type="text" placeholder="Search" class="form-control border-primary round" />
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

                    <section id="extended">
                        <div class="row justify-content-md-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Edit Service Category</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.all_services') }}"
                                                    class="btn btn-info pull-right">All Categories</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                                            </div>
                                        @endif
                                        <div class="px-2">
                                            <form class="form-horizontal" wire:submit.prevent="updateService">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Name: </label>
                                                        <input id="name" type="text" class="form-control border-primary" name="name"
                                                            wire:model="name" wire:keyup="generateSlug()" />
                                                        @error('name')<p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Slug: </label>
                                                        <input id="slug" type="text" class="form-control border-primary" name="slug"
                                                            wire:model="slug" />
                                                        @error('slug')<p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Tagline: </label>
                                                        <input id="tagline" type="text" class="form-control border-primary"
                                                            name="tagline" wire:model="tagline" />
                                                        @error('tagline')<p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="service_category_id"
                                                        class=" control-label text-light ">Service
                                                        
                                                        Category: </label>
                                                        <select name="service_category_id" id="service_category_id"
                                                            class="form-control border-primary" wire:model="service_category_id">
                                                            <option value="">Select Service Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('service_category_id')<p class="text-danger">
                                                            {{ $message }}</p>@enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Price: </label>
                                                        <input id="price" type="text" class="form-control border-primary" name="price"
                                                            wire:model="price" />
                                                        @error('price')<p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Discount: </label>
                                                        <input id="discount" type="text" class="form-control border-primary"
                                                            name="discount" wire:model="discount" />
                                                        @error('discount')<p class="text-danger">{{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Discount Type:
                                                        
                                                    </label>
                                                        <select name="discount_type" id="discount_type"
                                                            class="form-control border-primary" wire:model="discount_type">
                                                            <option value="">Select Service Category</option>
                                                            <option value="fixed">Fixed</option>
                                                            <option value="percent">Percent</option>
                                                        </select>
                                                        @error('discount_type')<p class="text-danger">
                                                                {{ $message }}
                                                        </p>@enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Description: </label>
                                                        <textarea name="description" id="description"
                                                            class="form-control border-primary" wire:model="description"></textarea>
                                                        @error('description')<p class="text-danger">{{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Inclusion: </label>
                                                        <textarea name="inclusion" id="inclusion" class="form-control border-primary"
                                                            wire:model="inclusion"></textarea>
                                                        @error('inclusion')<p class="text-danger">{{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="name" class=" control-label text-light ">Exclusion: </label>
                                                        <textarea name="exclusion" id="exclusion" class="form-control border-primary"
                                                            wire:model="exclusion"></textarea>
                                                        @error('exclusion')<p class="text-danger">{{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="thumbnail" class=" control-label text-light ">Thumbnail:
                                                        
                                                    </label>
                                                        <input id="newthumbnail" type="file" class="form-control border-primary"
                                                            name="thumbnail" wire:model="newthumbnail" />
                                                        @error('newthumbnail')<p class="text-danger">
                                                                {{ $message }}</p>
                                                        @enderror
                                                        @if ($newthumbnail)
                                                            <img src="{{ $newthumbnail->temporaryUrl() }}" alt=""
                                                                width="60">
                                                        @else
                                                            <img src="{{ asset('images/services/thumbnails') }}/{{ $thumbnail }}"
                                                                alt="" width="60">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label for="image" class=" control-label text-light ">Image: </label>
                                                        <input id="newimage" type="file" class="form-control border-primary"
                                                            name="image" wire:model="newimage" />
                                                        @error('newimage')<p class="text-danger">{{ $message }}
                                                            </p>
                                                        @enderror
                                                        @if ($newimage)
                                                            <img src="{{ $newimage->temporaryUrl() }}" alt="" width="150">
                                                        @else
                                                            <img src="{{ asset('images/services') }}/{{ $image }}"
                                                                alt="" width="100">
                                                        @endif
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success mx-auto d-flex">Update
                                                    Service</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>

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