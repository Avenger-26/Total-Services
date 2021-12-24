<div>
        @include('../layouts/sprovider/header')
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
                                                    <h3 class="card-title white">{{ $sprovider->name }}</h3>
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
                                                    class="font-medium-2 text-uppercase">{{ $sprovider->name }}</span>
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
                                            {{-- <div class="mb-3">
                                                <span class="text-bold-500 primary">About Me:</span>
                                                <span class="d-block overflow-hidden">{{ $sprovider->about }}
                                                </span>
                                            </div> --}}
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-mail font-small-3"></i> Email:</a></span>
                                                            <span
                                                                class="d-block overflow-hidden">{{ $sprovider->email }}</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-globe font-small-3"></i> Lives
                                                                    in:</a></span>
                                                            <span
                                                                class="d-block overflow-hidden">{{ $sprovider->address }}</span>
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
                                                            <span class="d-block overflow-hidden">{{ $sprovider->gender }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-book font-small-3"></i> Provider
                                                                    Profession:</a></span>
                                                            <span class="d-block overflow-hidden">
                                                                @if ($sprovider->service_category_id)
                                                                    {{ $sprovider->category->name }}
                                                                @endif
                                                            </span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-codepen font-small-3"></i>
                                                                    Provide Service</a></span>
                                                            <span class="d-block overflow-hidden">
                                                            @if ($sprovider->slug_id)
                                                                {{ $sprovider->slug->name }}
                                                            @endif
                                                            </span>
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
                                            <h4><b>address: </b>{{ $sprovider->address }}</h4>
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
