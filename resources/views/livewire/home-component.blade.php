<div>
    <section class="tp-banner-container">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid hero-img" src="{{ asset('images/1-1.png') }}">
                <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                </div>
                <div class="filter-title">
                    <div class="title-header">
                        <h1 class="animate__animated animate__fadeInLeft" style="color:#1597e5;">Welcome To Total
                            Services </h1>
                        <p class="lead">Book On Demand Home Services On Your Finger Tip</p>

                    </div>
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->u_type === 'ADM')
                                <div class="filter-header">
                                    <form id="sform" action="{{ route('searchService') }}" method="post">
                                        @csrf
                                        <input type="text" id="q" name="q" required="required"
                                            placeholder="What Services do you want?" class="input-large typeahead"
                                            autocomplete="off">
                                        <button type="submit" name="submit" value="Search"
                                            class="search btn-color  btn-hover "> Search
                                        </button>
                                    </form>
                                </div>
                            @elseif(Auth::user()->u_type === 'SPV')
                                <div class="filter-header">
                                    <form id="sform" action="{{ route('searchService') }}" method="post">
                                        @csrf
                                        <input type="text" id="q" name="q" required="required"
                                            placeholder="What Services do you want?" class="input-large typeahead"
                                            autocomplete="off">
                                        <button type="submit" name="submit" value="Search"
                                            class="search btn-color  btn-hover"> Search
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="filter-header">
                                    <form id="sform" action="{{ route('searchService') }}" method="post">
                                        @csrf
                                        <input type="text" id="q" name="q" required="required"
                                            placeholder="What Services do you want?" class="input-large typeahead"
                                            autocomplete="off">
                                        <button type="submit" name="submit" value="Search"
                                            class="search btn-color  btn-hover"> Search
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @else
                            <button type="submit" name="submit" value="Search" class="btn-hover color-hover "
                                style="margin:auto; display:block; box-shadow:0px 0px 5px #000;"> <a
                                    href="{{ route('register') }}" style="text-decoration: none; color:white;">Get
                                    Started</a>
                            </button>
                        @endif
                        @endif
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid hero-img" src="{{ asset('images/2-1.png') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center"
                        style="background: rgba(53, 53, 53, .7);">
                    </div>
                    <div class="filter-title">
                        <div class="title-header">
                            <h1 class="animate__animated animate__fadeInLeft" style="color:#1597e5;"> Are You Looking For A
                                Home Services</h1>
                            <p class="lead">Find Variety Of Services At One Place, </p>

                        </div>
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->u_type === 'ADM')
                                    <div class="filter-header">
                                        <form id="sform" action="{{ route('searchService') }}" method="post">
                                            @csrf
                                            <input type="text" id="q" name="q" required="required"
                                                placeholder="What Services do you want?" class="input-large typeahead"
                                                autocomplete="off">
                                            <button type="submit" name="submit" value="Search" class="search "> Search
                                            </button>
                                        </form>
                                    </div>
                                @elseif(Auth::user()->u_type === 'SPV')
                                    <div class="filter-header">
                                        <form id="sform" action="{{ route('searchService') }}" method="post">
                                            @csrf
                                            <input type="text" id="q" name="q" required="required"
                                                placeholder="What Services do you want?" class="input-large typeahead"
                                                autocomplete="off">
                                            <button type="submit" name="submit" value="Search" class="search "> Search
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <div class="filter-header">
                                        <form id="sform" action="{{ route('searchService') }}" method="post">
                                            @csrf
                                            <input type="text" id="q" name="q" required="required"
                                                placeholder="What Services do you want?" class="input-large typeahead"
                                                autocomplete="off">
                                            <button type="submit" name="submit" value="Search" class="search "> Search
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @else
                                <button type="submit" name="submit" value="Search" class="btn-hover color-hover "
                                    style="margin:auto; display:block;"> <a href="{{ route('register') }}"
                                        style="text-decoration: none; color:white;">Book Now</a>
                                </button>
                            @endif
                            @endif
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid hero-img" src="{{ asset('images/3-1.png') }}" alt="">
                        <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center"
                            style="background: rgba(53, 53, 53, .7);">
                        </div>
                        <div class="filter-title">
                            <div class="title-header">
                                <h1 class="animate__animated animate__fadeInLeft" style="color:#1597e5;">BooK A Quality Service
                                </h1>
                                <p class="lead">Book A Service At Very Affordable Price </p>

                            </div>
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->u_type === 'ADM')
                                        <div class="filter-header">
                                            <form id="sform" action="{{ route('searchService') }}" method="post">
                                                @csrf
                                                <input type="text" id="q" name="q" required="required"
                                                    placeholder="What Services do you want?" class="input-large typeahead"
                                                    autocomplete="off">
                                                <button type="submit" name="submit" value="Search" class="search "> Search
                                                </button>
                                            </form>
                                        </div>
                                    @elseif(Auth::user()->u_type === 'SPV')
                                        <div class="filter-header">
                                            <form id="sform" action="{{ route('searchService') }}" method="post">
                                                @csrf
                                                <input type="text" id="q" name="q" required="required"
                                                    placeholder="What Services do you want?" class="input-large typeahead"
                                                    autocomplete="off">
                                                <button type="submit" name="submit" value="Search" class="search "> Search
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="filter-header">
                                            <form id="sform" action="{{ route('searchService') }}" method="post">
                                                @csrf
                                                <input type="text" id="q" name="q" required="required"
                                                    placeholder="What Services do you want?" class="input-large typeahead"
                                                    autocomplete="off">
                                                <button type="submit" name="submit" value="Search" class="search "> Search
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                @else
                                    <button type="submit" name="submit" value="Search" class="btn-hover color-hover "
                                        style="margin:auto; display:block;"> <a href="{{ route('register') }}"
                                            style="text-decoration: none; color:white;">Get
                                            Started</a>
                                    </button>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="tp-bannertimer"></div>
                </section>
                {{-- Mini Slider start here --}}
                <section id="clients" class="clients">
                    <div class="container">
                        <div class="owl-carousel owl-theme" id="client">
                            @foreach ($scategories as $scategory)
                                <div class="item owl-item-slider">
                                    <a href="{{ route('home.services_by_category', ['category_slug' => $scategory->slug]) }}"><img
                                            title="{{ $scategory->name }}"
                                            src="{{ asset('images/services-categories') }}/{{ $scategory->image }}"
                                            alt="{{ $scategory->name }}" data-aos="fade-right"></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                {{-- Mini Slider end here --}}
                <div class="section best-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="titles text-center">
                                        <h2 class="head-title hh-secondary head-primary" data-aos="fade-down">Best Offers %</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="products-tabs">
                                        <div id="tab1" class="tab-pane active">
                                            <div class="products-slick " data-nav="#slick-nav-1">
                                                <div class="product" data-aos="fade-in">
                                                    <div class="product-img tb">
                                                        <img src="{{ asset('images/best-offer/cleaning-services.jpeg') }}"
                                                            alt="Home Cleaning">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Home Cleaning</a>
                                                        </h3>
                                                        <h4 class="product-price">Upto 30% off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product" data-aos="zoom-in">
                                                    <div class="product-img tb">
                                                        <img src="{{ asset('images/best-offer/salon-for-men.jpg') }}"
                                                            alt="Salon for Men">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Salon for Men</a>
                                                        </h3>
                                                        <h4 class="product-price">Flat Rs.100 off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product" data-aos="zoom-in">
                                                    <div class="product-img tb">
                                                        <img src="{{ asset('images/best-offer/auto-repair.jpg') }}"
                                                            alt="AutoCare">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">AutoCare</a>
                                                        </h3>
                                                        <h4 class="product-price">Flat 20% off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product" data-aos="zoom-in">
                                                    <div class="product-img tb">
                                                        <img src="{{ asset('images/best-offer/painter.jpg') }}" alt="Painter">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Painter</a>
                                                        </h3>
                                                        <h4 class="product-price">Consultation at Rs.99
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="product" data-aos="zoom-in">
                                                    <div class="product-img tb">
                                                        <img src="{{ asset('images/best-offer/The-Science.jpg') }}"
                                                            alt="Painter">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#">Disinfection</a>
                                                        </h3>
                                                        <h4 class="product-price">Upto 25% off
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="slick-nav-1" class="products-slick-nav"></div>
                                        </div>
                                    </div>
                                    {{-- @include('\livewire\service-cards') --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content_info category" style="padding-bottom:70px !important; padding-top: 0px !important;">
                    <div class="titles text-center ">
                        <h2 class="head-title hh-secondary head-primary" data-aos="fade-down"> Top Categories</h2>
                    </div>
                    <div class="bg-dark color-white border-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 " data-aos="fade-right">
                                    <div class="services-lines-info ">
                                        <h2>WELCOME TO TOTAL SERVICE</h2>
                                        <p class="lead">
                                            Book best services at one place.
                                            <span class="line"></span>
                                        </p>
                                        <p>Find a wide variety of home services.</p>
                                    </div>
                                </div>
                                <div class="col-md-8" data-aos="fade-left">
                                    <ul class="services-lines">
                                        @foreach ($fscategories as $fscategory)
                                            <li>
                                                <a
                                                    href="{{ route('home.services_by_category', ['category_slug' => $fscategory->slug]) }}">
                                                    <div class="item-service-line">
                                                        <i class="fa"><img class="icon-img" data-aos="fade-left"
                                                                src="{{ asset('images/services-categories') }}/{{ $fscategory->image }}"
                                                                alt="{{ $fscategory->name }}" width="80" height="80"></i>
                                                        <h5>{{ $fscategory->name }}</h5>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section service-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="titles">
                                        <h2 class="head-title hh-secondary head-primary" data-aos="fade-down">Choice Of Services
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="products-tabs">
                                        <div id="tab1" class="tab-pane active">
                                            <div class="products-slick" data-nav="#slick-nav-2">
                                                @foreach ($fserivces as $service)
                                                    <div class="product" data-aos="zoom-in-up">
                                                        <a
                                                            href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}">
                                                            <div class="product-img tb">
                                                                <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                    alt="{{ $service->name }}">
                                                            </div>
                                                            <div class="product-body">
                                                                <p class="product-category">{{ $service->category->name }}</p>
                                                                <h3 class="product-name"><a href="#">{{ $service->name }}</a>
                                                                </h3>
                                                                <h4 class="product-price">???{{ $service->price }}
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <button class="add-to-cart-btn btn-hover color-hover "
                                                                    style="margin-top:-1px;">
                                                                    <a
                                                                        href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}"><i
                                                                            class="fa fa-shopping-cart"></i> Book Now</a></button>
                                                            </div>
                                                        </a>
                                                    </div>

                                                @endforeach
                                            </div>
                                            <div id="slick-nav-2" class="products-slick-nav"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="ftco-section">
                    <div class="container">
                        <div class="titles text-center ">
                            <h2 class="head-title hh-secondary head-primary" data-aos="fade-down"> Why Choose Us</h2>
                        </div>
                        <div class="row no-gutters ftco-services">
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="zoom-in-right">
                                    <div class="icon bg-color-1 d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-award"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Quality Service</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="zoom-in-right">
                                    <div class="icon bg-color-1 d-flex justify-content-center align-items-center "
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-headphones-alt"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">24/7 Customer Support</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="zoom-in-left">
                                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-drafting-compass"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Free Consultation</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services mb-md-0 mb-4" data-aos="zoom-in-left">
                                    <div class="icon bg-color-1 d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 10px">
                                        <span class="fas fa-users"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Verified Providers</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </section>
            </div>
            <div class="alan-btn"></div>
            <script type="text/javascript" src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
            <script>
                var alanBtnInstance = alanBtn({
                    key: "0a852218513167bb5fd45dba3e4d99c72e956eca572e1d8b807a3e2338fdd0dc/stage",
                    onCommand: function(commandData) {
                        if (commandData.command === 'goto-service') {
                            let redirectTo = window.location.href;
                            window.location.href = "{{ route('login') }}?redirectTo=" + redirectTo;

                        }

                    },
                    rootEl: document.getElementById("alan-btn"),
                });
            </script>


            <!-- Testimonial Start -->
            <div class="container-xxl  wow fadeInUp" data-wow-delay="0.1s" style="padding-top: 3rem;">
                <div class="container px-lg-5">
                    <div class="titles" style="margin-top:0 !important; margin-bottom:50px;">
                        <h2 class="head-title hh-secondary head-primary" data-aos="fade-down">What Our Clients Says!</h2>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimonial as $testimonial_item)
                            <div class="testimonial-item bg-light rounded gradient-box">
                                <p class="fs-5"><i
                                        class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>{{ $testimonial_item->feedback_description }}
                                </p>
                                <div class="d-flex align-items-center">
                                    @if ($testimonial_item->profile_pic)
                                        <img class="img-fluid flex-shrink-0 rounded-circle"
                                            src="{{ asset('images/customer') }}/{{ $testimonial_item->profile_pic }}"
                                            style="width: 65px; height: 65px;">
                                    @else
                                        <img class="img-fluid flex-shrink-0 rounded-circle"
                                            src="{{ asset('images/sproviders/default.png') }}"
                                            style="width: 65px; height: 65px;">

                                    @endif
                                    <div class="ps-4">
                                        <h5 class="mb-1">{{ $testimonial_item->name }}</h5>
                                        <span>{{ $testimonial_item->feedback_title }}</span>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div> 
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
            </div>
            @push('scripts')
                <script type="text/javascript">
                    var path = "{{ route('autocomplete') }}";

                    $('input.typeahead').typeahead({
                        source: function(query, process) {
                            return $.get(path, {
                                query: query
                            }, function(data) {
                                return process(data);
                            })
                        }
                    });
                </script>
            @endpush
