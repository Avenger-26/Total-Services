<style>
    .dynamic-cards{
        transition: all 0.6s ease;
        box-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5),
                2px 2px 0px rgba(0, 0, 0, 0.5),
                3px 3px 0px rgba(0, 0, 0, 0.5),
                4px 4px 0px rgba(0, 0, 0, 0.5),
                5px 5px 0px rgba(0, 0, 0, 0.5),
                6px 6px 0px rgba(0, 0, 0, 0.5);
    }
    .dynamic-cards:hover{
        transform: scale(1.1);
      
    }
</style>
<div>
    @include('../layouts/sprovider/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-blackberry dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{$totalUser}}</h3>
                                            <span>Total Users</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa fa-users fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-ibiza-sunset dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{$totalService}}</h3>
                                            <span>Total Services</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="ft-grid font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart1"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-green-tea dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{$totalServe}}</h3>
                                            <span>Total Services Done</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa ft-briefcase  fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-pomegranate dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">₹{{$totalEarning}}</h3>
                                            <span>Total Earning</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart3"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="extended">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title py-2 text-info" style="text-align: center; font-weight:500; font-size:1.6rem;"><i class="fa ft-briefcase  fa-1x"></i> Work History</h4>
                                </div>
                                <div class="card-content">
                                    <div class=" table-responsive">
                                        <table class="table text-center table-striped table-hover shadow ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User Name</th>
                                                    <th>Service Name</th>
                                                    <th>Order ID</th>
                                                    <th>Amount</th>
                                                    <th>Serve Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($paytms as $paytm)
                                                    @if ($paytm->sprovider_id === Auth::user()->id)
                                                        <tr>
                                                            <td><span class="badge badge-success ">#WH0{{ $paytm->id }}</span></td>
                                                            <td>{{ $paytm->user_name }}</td>
                                                            <td>{{ $paytm->slug_name }}</td>
                                                            <td>{{ $paytm->order_id }}</td>
                                                            <td>₹{{ $paytm->price }}</td>
                                                            <td>{{ $paytm->created_at }}</td>
                                                            <td>
                                                                <a href="#"  onclick="confirm('Are you sure, you want to delete this booking histroy!')||event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteService({{ $paytm->id }})">
                                                                    <i class="ft-trash-2 text-danger font-medium-3"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endif

                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- END : End Main Content-->

    </div>
</div>
</div>
