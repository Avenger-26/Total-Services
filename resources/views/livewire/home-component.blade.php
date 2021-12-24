<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset('assets\img\slide\1-1.png') }}" alt="fullslide1"
                        data-bgposition="center center" data-kenburns="on" data-duration="6000"
                        data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100"
                        data-bgpositionend="right center">
                </li>
                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset('assets/img/slide/2-1.png') }}" alt="fullslide1" data-bgposition="top center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset('assets/img/slide/3-1.png') }}" alt="fullslide1" data-bgposition="top center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h1 style="" style="color:#1597e5;">BOOK A SERVICE</h1>
                <p class="lead">Book a service at very affordable price, </p>

            </div>
            <div class="filter-header">
                <form id="sform" action="{{ route('searchService') }}" method="post">
                    @csrf
                    <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                        class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>


    </section>
    {{-- Services Carosel Slider start --}}
    <section class="content-central ">
        <div class="content_info   content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 services-carousel py-3">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach ($scategories as $scategory)
                                <li data-toggle="tooltip" title="" data-original-title="{{ $scategory->name }}"> <a
                                        href="{{ route('home.services_by_category', ['category_slug' => $scategory->slug]) }}"><img
                                            src="{{ asset('images/services-categories') }}/{{ $scategory->image }}"
                                            alt="{{ $scategory->name }}"></a>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
{{-- Services Carosel Slider end --}}
{{-- Banner Section start --}}
{{-- <section class="container service-banner ">
        <div class="row ">
            <div class="title text-center">

                    <h2>On Demand Services</h2>
               <img src="{{asset('images/services/apps.png')}}"
                                        alt="Banner">
            </div>
        </div>
    </section> --}}

{{-- Banner Section end --}}
{{-- Service Carosel Slider start --}}
{{-- <section class="container  best-offer ">
        <div class="row p-4 ">
            <div class="title text-center">
                    <h2>Best Offers%</h2>
            </div>
            <div class="row px-md-n5">
                <div class="col-md-3 col-sm-11 mx-auto">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="{{asset('images/best-offer/cleaning-services.jpeg')}}" alt="Home Cleaning">
                    <div class="card-body">
                        <h5 class="card-title">Home Cleaning</h5>
                        <p class="card-text">Upto 30% off</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-11 mx-auto">
               <div class="card" style="width: 18rem;">
                <img class="card-img-top img-responsive"  src="{{asset('images/best-offer/salon-for-men.jpg')}}" alt="Salon for men">
                <div class="card-body">
                    <h5 class="card-title">Salon for Men</h5>
                    <p class="card-text">Flat Rs.100 off</p>

                </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-11 mx-auto">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="{{asset('images/best-offer/auto-repair.jpg')}}" alt="Autocare">
                    <div class="card-body">
                        <h5 class="card-title">Auto Repair</h5>
                        <p class="card-text">Flat 20% off</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-11 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-responsive"  src="{{asset('images/best-offer/painter.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Painter</h5>
                            <p class="card-text">Consultation at Rs.99</p>
                        </div>
                        </div>
                </div>
            </div>


        </div>
    </section> --}}
{{-- Service Carosel Slider start --}}
{{-- <section class="container service-banner ">
        <div class="row ">
            <div class="title text-center">

                    <h2>Find All Service on one place</h2>
               <img src="{{asset('images/services/allinone.jpg')}}"
                                        alt="Banner">
            </div>
        </div>
    </section> --}}
{{-- Banner Section start --}}
<section class="container service-banner ">
    <div class="row ">
        <div class="title text-center">

            <h2 class="title-text">On Demand Services</h2>
            <img src="{{ asset('images/services/apps.png') }}" alt="Banner">
        </div>
    </div>
</section>
<hr>

{{-- Banner Section end --}}
{{-- Service Carosel Slider start --}}
<section class="container  best-offer ">
    <div class="row p-4 ">
        <div class="title text-center">
            <h2 class="title-text">Best Offers%</h2>
        </div>
        <div class="row px-md-n5">
            <div class="col-md-3 col-sm-11 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive"
                        src="{{ asset('images/best-offer/cleaning-services.jpeg') }}" alt="Home Cleaning">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bolds">Home Cleaning</h5>
                        <p class="card-text">Upto 30% off</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-11 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="{{ asset('images/best-offer/salon-for-men.jpg') }}"
                        alt="Salon for men">
                    <div class="card-body">
                        <h5 class="card-title">Salon for Men</h5>
                        <p class="card-text">Flat Rs.100 off</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-11 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="{{ asset('images/best-offer/auto-repair.jpg') }}"
                        alt="Autocare">
                    <div class="card-body">
                        <h5 class="card-title">Auto Repair</h5>
                        <p class="card-text">Flat 20% off</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-11 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="{{ asset('images/best-offer/painter.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Painter</h5>
                        <p class="card-text">Consultation at Rs.99</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<hr>
{{-- Service Carosel Slider start --}}
<section class="container service-banner ">
    <div class="row ">
        <div class="title text-center">

            <h2 class="title-text">Find All Service at one place</h2>
            <img src="{{ asset('images/services/allinone.jpg') }}" alt="Banner">
        </div>
    </div>
</section>
<hr>
{{-- Service Carosel Slider start --}}
<section class="container service-section ">
    <div class="row ">
        <div class="content_info">
            <div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="titles">
                            <h2>Total Service <span>Choice</span> of Services</h2>
                            <hr class="tall">
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                            @foreach ($fserivces as $service)
                                {{-- <div class="col-xs-6 col-sm-4 col-md-3 hsgrids mobile"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{route('home.service_details',['service_slug'=>$service->slug])}}">
                                    <div class="img-hover tb m-card">
                                        <img src="{{asset('images/services/thumbnails')}}/{{$service->thumbnail}}" alt="{{$service->name}}"
                                                        class="img-responsive">
                                    </div>
                                    <div class="info-gallery m-card">
                                        <h3>{{$service->name}}</h3>
                                        <hr class="separator">
                                        <p>{{$service->tagline}}</p>
                                        <div class="content-btn"><a href="{{route('home.service_details',['service_slug'=>$service->slug])}}"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span></span><b>From</b>₹ {{$service->price}}</div>
                                    </div>
                                </a>
                            </div> --}}
                                <ul class="cards">
                                    <li>
                                        <div href="" class="card">
                                            <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                alt="{{ $service->name }}" class="card__image img-responsive" />
                                            <div class="card__overlay">
                                                <div class="card__header">
                                                    {{-- <img class="card__thumb" src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}" alt="{{ $service->name }}"/> --}}
                                                    <div class="card__header-text">
                                                        <h3 class="card__title">{{ $service->name }}</h3>
                                                        <span class="card__status"><b>From: </b> ₹{{ $service->price}}</span>
                                                        <span class="button"><a href="{{route('home.service_details',['service_slug'=>$service->slug])}}">Book</a> </span>
                                                    </div>
                                                </div>
                                                <p class="card__description">{{$service->description}}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>



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
