<style>
    .gallery-card {

position: relative;
transform-style: preserve-3d;
transform: perspective(300px);
/* box-shadow: -10px 20px 86px 0 rgba(92, 15, 15, 0.36); */

}
.info-gallery-2, .info-gallery {
    background-color:#112031;
}

</style>

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
                <h1  style="
                 text-shadow: 0 0 3px #00ccff;
                 background-color: #63a4ff;
background-image: linear-gradient(#63a4ff 0%, #83eaf1 74%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">BOOK A SERVICE</h1>
                <p class="" style="font-size:1.5rem;">Book a service at very affordable price, </p>

            </div>
            <div class="filter-header">
                <form id="sform" action="{{ route('searchService') }}" method="post">
                    @csrf
                    <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                        class="input-large typeahead" autocomplete="off">
                    <button type="submit" name="submit" value="Search" class="search btn-hover color-hover mx-auto shadow-small border-none"> Search </button>
                </form>
            </div>
        </div>


    </section>
    {{-- Services Carosel Slider start --}}
    <section class="content-central ">
        <div class="content_info content_resalt">
            <div class="container">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 services-carousel py-3 ">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach ($scategories as $scategory)
                                <li data-toggle="tooltip" title="" data-original-title="{{ $scategory->name }}"> <a
                                        href="{{ route('home.services_by_category', ['category_slug' => $scategory->slug]) }}"><img class="hover-img"
                                            src="{{ asset('images/services-categories') }}/{{ $scategory->image }}"
                                            alt="{{ $scategory->name }}"></a>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- Banner Section start --}}
        <section class="container service-banner ">
            <div class="row">
                <div class="titles text-center">
                     <h2>On <span> Demand</span> Services</h2>
                    <img src="{{ asset('images/services/apps.png') }}" alt="Banner">
                </div>
            </div>
        </section>

        {{-- Banner Section end --}}
        {{-- Service Carosel Slider start --}}
        <section class="container  best-offer ">
            <div class="row">
                {{-- <div class="row px-md-n5">
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
                            <img class="card-img-top img-responsive"
                                src="{{ asset('images/best-offer/salon-for-men.jpg') }}" alt="Salon for men">
                            <div class="card-body">
                                <h5 class="card-title">Salon for Men</h5>
                                <p class="card-text">Flat Rs.100 off</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-11 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top img-responsive"
                                src="{{ asset('images/best-offer/auto-repair.jpg') }}" alt="Autocare">
                            <div class="card-body">
                                <h5 class="card-title">Auto Repair</h5>
                                <p class="card-text">Flat 20% off</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-11 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top img-responsive"
                                src="{{ asset('images/best-offer/painter.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Painter</h5>
                                <p class="card-text">Consultation at Rs.99</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="content_info">
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="titles text-center">
                                    <h2>Best <span>Offers %</span></h2>
                                </div>
                            </div>
                            <div class="portfolioContainer">
                                <div class="col-xs-6  col-sm-4 col-md-3 hsgrids gallery-card"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="service-details/ac-dry-servicing.html">
                                        <div class="img-hover b-img">
                                            <img src="{{ asset('images/best-offer/cleaning-services.jpeg') }}" alt="Home Cleaning"
                                                class="img-responsive">
                                        </div>
                                        <div class=" info-gallery-2 ">
                                            <h3 style="color: #1597e5; font-weight:500;">Home Cleaning</h3>
                                            <h5 style="color: #1597e5; font-weight:500">Upto 30% off</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids gallery-card "
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list main-baner-card" href="service-details/ac-installation.html">
                                        <div class="img-hover b-img">
                                            <img src="{{ asset('images/best-offer/salon-for-men.jpg') }}" alt="Salon for men"
                                                class="img-responsive">
                                        </div>
                                        <div class=" info-gallery-2">
                                            <h3 style="color: #1597e5; font-weight:500;">Salon for Men</h3>
                                            <h5 style="color: #1597e5; font-weight:500;">Flat Rs.100 off</h5>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids filter-shadow gallery-card"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="service-details/ac-gas-top-up.html">
                                        <div class="img-hover b-img">
                                            <img src="{{ asset('images/best-offer/auto-repair.jpg') }}" alt="Autocare"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery-2">
                                            <h3 style="color: #1597e5; font-weight:500;" >Auto Repair</h3>
                                            <h5 style="color: #1597e5; font-weight:500;">Flat 20% off</h5>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids shadow gallery-card "
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="service-details/ac-gas-refill.html">
                                        <div class="img-hover b-img">
                                            <img src="{{ asset('images/best-offer/painter.jpg') }}" alt="Card image cap"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery-2">
                                            <h3 style="color: #1597e5; font-weight:500;">Painter</h3>
                                            <h5 style="color: #1597e5; font-weight:500;">Consultation at Rs.99</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            {{-- @include('\livewire\service-cards') --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="content_info category"  style="">
            <div class="titles text-center ">
                <h2> Top <span>Categories<span></h2>
            </div>
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info ">
                                <h2>WELCOME TO TOTAL SERVICE</h2>
                                <p class="lead">
                                    Book best services at one place.
                                    <span class="line"></span>
                                </p>
                                <p>Find a wide variety of home services.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">
                                @foreach ($fscategories as $fscategory)
                                <li>
                                    <a href="{{route('home.services_by_category',['category_slug'=>$scategory->slug])}}">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{asset('images/services-categories')}}/{{$fscategory->image}}" alt="{{$scategory->name}}" width="80" height="80"></i>
                                            <h5>{{$fscategory->name}}</h5>
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
        <section class="container service-section ">
            <div class="row ">
                {{-- <div class="content_info">
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><span>Choice</span> of Services</h2>
                                </div>
                                <div class="portfolioContainer" style="margin-top: -50px; margin-bottom:50px">
                                    @foreach ($fserivces as $service)
                                        <ul class="cards">
                                            <li>
                                                <div href="" class="card">
                                                    <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                        alt="{{ $service->name }}"
                                                        class="card__image img-responsive" />
                                                    <div class="card__overlay">
                                                        <div class="card__header">
                                                            <div class="card__header-text">
                                                                <h3 class="card__title">{{ $service->name }}
                                                                </h3>
                                                                <span class="card__status"><b>From: </b>
                                                                    ₹{{ $service->price }}</span>
                                                                <span class="button"><a
                                                                        href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}">Book</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p class="card__description">{{ $service->inclusion }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}
                <div class="content_info">
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><span>Choice</span> of Services</h2>
                                </div>
                            </div>
                            <div class="portfolioContainer">
                                @foreach ($fserivces as $service)
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids filter-shadow gallery-card"
                                    style="padding-right: 5px;padding-left: 5px;">

                                    <a class="g-list" href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}">
                                        <div class="img-hover tb">
                                            <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                            alt="{{ $service->name }}"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>{{ $service->name }}</h3>
                                            <p>{{ $service->inclusion }}</p>
                                            <div class="content-btn"><a href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}"
                                                    class="btn btn-primary">Book Now</a></div>
                                            <div class="price"><b>From:</b>₹{{$service->price}}</div>
                                        </div>
                                    </a>

                                </div>
                                @endforeach
                            </div>
                            {{-- @include('\livewire\service-cards') --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script>
    $('.gallery-card').tilt({
  glare: true,
  maxGlare: .3,
  maxTilt: 7,
  speed: 520,
})
</script>
