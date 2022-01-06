<div>
@include('../layouts/customer/header')
<div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <!--Basic User Details Starts-->
                    <section id="user-profile">
                        <div class="row">
                            <div class="col-12">
                                <div class="card gradient-border profile-with-cover">
                                    <div class="card-img-top img-fluid bg-cover height-300"
                                        style="background: url({{ asset('app-assets/img/photos/15.jpg') }}) 50%;"></div>
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
                                                    @if ($scustomer->image)
                                                        <img src="{{ asset('images/customer') }}/{{ $scustomer->image }}"
                                                            alt="" width="100" height="100"
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
                                            <div class="col-lg-5 col-md-5">
                                                <ul class="profile-menu no-list-style">
                                                    <li>
                                                        <a href="#about"
                                                            class="primary font-medium-2 font-weight-600">About</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2 col-md-2 text-center">
                                                <span class="card-title white text-uppercase">{{ Auth::user()->name }}
                                                </span>

                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <ul class="profile-menu no-list-style">
                                                    <li>
                                                        <a href="#" class="primary font-medium-2 font-weight-600">Edit
                                                            Profile</a>
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
                                <div class="card gradient-border">
                                    <div class="card-header">
                                        <h5 class="card-title white">Personal Information</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-mail font-small-3"></i> Email:</a></span>
                                                            <span
                                                                class="d-block overflow-hidden white">{{ Auth::user()->email }}</span>
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
                                                                class="d-block overflow-hidden white">{{ $scustomer->phone }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-globe font-small-3"></i> Address
                                                                    :</a></span>
                                                            <span
                                                                class="d-block overflow-hidden white">{{ $scustomer->address}}</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!--About section ends-->
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
