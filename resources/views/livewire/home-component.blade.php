<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset('assets\img\slide\1-1.png') }}" alt="fullslide1" data-bgposition="center center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
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
                                <li data-toggle="tooltip" title="" data-original-title="{{ $scategory->name }}"> <a href="{{route('home.services_by_category',['category_slug'=>$scategory->slug])}}"><img
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
        <div class="title text-center">

            <h2 class="title-text">Home Needs Services</h2>
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-9">

                        </div>

                    </div>
                    <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Laundry</h5>
                                                        <h5 class="price-text-color">
                                                            Flat 25% offs</h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                        <i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Electrician</h5>
                                                        <h5 class="price-text-color">
                                                            Flat 20% off </h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Next Sample Product</h5>
                                                        <h5 class="price-text-color">
                                                            $149.99</h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                        <i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive"
                                                    alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color">
                                                            $199.99</h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                        <i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive"
                                                    alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Product with Variants</h5>
                                                        <h5 class="price-text-color">
                                                            $199.99</h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                        <i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive"
                                                    alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Grouped Product</h5>
                                                        <h5 class="price-text-color">
                                                            $249.99</h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive"
                                                    alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Product with Variants</h5>
                                                        <h5 class="price-text-color">
                                                            $149.99</h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                        <i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive"
                                                    alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>
                                                            Product with Variants</h5>
                                                        <h5 class="price-text-color">
                                                            $199.99</h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                        <i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i
                                                            class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>

                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 " style="margin-right: 10px">
                        <!-- Controls -->
                        <div class="controls pull-right hidden-xs">
                            <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                                data-slide="prev"></a>
                            <a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example"
                                data-slide="next"></a>
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
