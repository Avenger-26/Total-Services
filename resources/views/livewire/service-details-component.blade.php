<div>
    <div class="section-title-02-2 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{ $service->name }}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>{{ $service->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 single-blog">
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-header">
                                            <div class="post-format-icon post-format-standard"
                                                style="margin-top: -10px;">
                                                <i class="fa fa-image"></i>
                                            </div>
                                            <div class="post-info-wrap">
                                                <h2 class="post-title"><a href="" title="Post Format: Standard"
                                                        rel="bookmark">{{ $service->name }}:{{ $service->category->name }}</a>
                                                </h2>
                                                <div class="post-meta" style="height: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="single-carousel" class="custome-owl">
                                            <div class="img-hover bg">
                                                <img src="{{ asset('images/services') }}/{{ $service->image }}"
                                                    alt="{{ $service->name }}" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="post-content">
                                            <h3>{{ $service->name }}</h3>
                                            @if ($service->price == '150')
                                                <p>{{ $service->description }}</p>
                                            @endif
                                            <h4>Inclusion</h4>
                                            <ul class="list-styles">
                                                @foreach (explode('|', $service->inclusion) as $inclusion)
                                                    <li><i class="fa fa-plus"></i>{{ $inclusion }}</li>
                                                @endforeach
                                            </ul>
                                            <h4>Exclusion</h4>
                                            <ul class="list-styles">
                                                @foreach (explode('|', $service->exclusion) as $exclusion)
                                                    <li><i class="fa fa-plus"></i>{{ $exclusion }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <aside class="widget" style="margin-top: 18px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Service Provider Details</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td colspan="2" style="text-align: center">
                                                    @if ($sprovider->image)
                                                        <img src="{{ asset('images/sproviders') }}/{{ $sprovider->image }}"
                                                            width="100" alt=""
                                                            class="rounded-circle img-border gradient-summer">

                                                    @else
                                                        <img src="{{ asset('images/sproviders/default.png') }}"
                                                            alt="" width="100" height="100"
                                                            class="rounded-circle img-border gradient-summer">
                                                    @endif
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Servies Provider Name</td>
                                                <td>{{ $sprovider->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Contact Number</td>
                                                <td>{{ $sprovider->phone }}</td>
                                            </tr>

                                        </table>
                                    </div>

                                    <div class="panel-footer">
                                        <form>
                                            {{-- <button type="submit" name="submit" class="btn btn-primary"><a href="#"
                                                    style="color: white; text-decoration:none">Contact Now</a>
                                                </button> --}}
                                            <button type="submit" name="submit" class="btn btn-primary mx-4"><a
                                                    href="tel:{{ $sprovider->phone }}"
                                                    onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"
                                                    style="color: white; text-decoration:none">Click to
                                                    Call</a></button>

                                        </form>
                                    </div>
                                </div>
                            </aside>

                            <aside class="widget" style="margin-top: 18px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Booking Details</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td style="border-top: none;">Price</td>
                                                <td style="border-top: none;"><span>&#8377;</span>
                                                    {{ $service->price }}</td>
                                            </tr>

                                            @php
                                                $total = $service->price;
                                            @endphp
                                            @if ($service->discount)
                                                @if ($service->discount_type == 'fixed')
                                                    <tr>
                                                        <td>Discount</td>
                                                        <td>₹{{ $service->discount }}</td>
                                                    </tr>
                                                    @php $total = $total- $service->discount; @endphp
                                                @elseif($service->discount_type == 'percent')
                                                    <tr>
                                                        <td>Discount</td>
                                                        <td>{{ $service->discount }}%</td>
                                                    </tr>
                                                    @php $total = $total- ($total*$service->discount/100); @endphp

                                                @endif

                                            @endif

                                            <tr>
                                                <td>Total-Price</td>
                                                <td><span>&#8377;</span>{{ $total }}</td>
                                            </tr>

                                        </table>
                                    </div>
                                    @if ($service->price != '150')
                                        <div class="panel-footer">
                                            <form>
                                                <button type="button" name="submit" class="btn btn-primary"><a
                                                        href="{{ route('payment') }}"
                                                        style="color: white; text-decoration:none">Book Now</a></button>
                                            </form>
                                        </div>
                                    @endif

                                </div>
                            </aside>

                            {{-- <aside>
                                @if ($r_service)
                                    <h3>Related Service</h3>
                                    <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                        style="max-width: 360px">
                                        <a
                                            href="{{ route('home.service_details', ['service_slug' => $r_service->slug]) }}">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services/thumbnails') }}/{{ $r_service->thumbnail }}"
                                                    alt="{{ $r_service->name }}" class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>
                                                    {{ $r_service->name }}
                                                </h3>
                                                <hr class="separator">
                                                <p>{{ $r_service->name }}</p>
                                                <div class="content-btn"><a
                                                        href="{{ route('home.service_details', ['service_slug' => $r_service->slug]) }}"
                                                        class="btn btn-warning">View Details</a></div>
                                                <div class="price">
                                                    <span>&#8377;</span><b>From</b>{{ $r_service->price }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            </aside> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
