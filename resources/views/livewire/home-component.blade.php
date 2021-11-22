<div>
    <section class="tp-banner-container ">
        <div class="tp-banner">
            <ul>
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="assets/img/slide/1.jpg" alt="fullslide1" data-bgposition="center center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="assets/img/slide/2.jpg" alt="fullslide1" data-bgposition="top center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="assets/img/slide/1.jpg" alt="fullslide1" data-bgposition="top center"
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
                <form id="sform" action="searchservices" method="post">
                    <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                        class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>


    </section>
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
                            @foreach($scategories as $scategory)
                            <li data-toggle="tooltip" title="" data-original-title="{{ $scategory->name}}"> <a
                                    href="#"><img  src="{{asset('images/services/services-categories')}}/{{$scategory->image}}" alt="{{$scategory->name}}"></a>

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

    <section class="container best-offer ">
        <div class="row ">
            <div class="title text-center">

                    <h2>On Demand Services</h2>
               <img src="{{asset('images/services/apps.png')}}"
                                        alt="Banner">
            </div>
        </div>
    </section>
</div>
