<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php echo $chartData; ?>
        ]);

        var options = {

            is3D: true,
            pieHole: 0.4,


        };


        var chart = new google.visualization.PieChart(document.getElementById('piechart'));


        chart.draw(data, options);
    }
</script>





<div>

    @include('../../layouts/admin/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <!--Statistics cards Starts-->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-11 mx-auto">
                        <div class="card gradient-blackberry dynamic-cards shadow">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{ $totalServiceProvider }}</h3>
                                            <span>Total Service Providers</span>
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

                    <div class="col-xl-3 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="card gradient-ibiza-sunset dynamic-cards shadow"
                            wire:click="location.href='/admin/service-provider'">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{ $totalUser }}</h3>
                                            <span>Total Users</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa fa-user text-shadow fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart1"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="card gradient-green-tea shadow dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">

                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">{{ $totalServiceCategories }}</h3>
                                            <span class="font-small-3">Total Service Categories</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="fa ft-briefcase shadow  fa-2x"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2"
                                    class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="card gradient-pomegranate shadow dynamic-cards">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">???{{ $total }}</h3>
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


                {{-- Line with Area Chart 1 Starts--> --}}
                <div class="row">
                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card shadow w-100">
                            <div class="card-header">
                                <h4 class="card-title text-center text-info">Total Users and Service Providers </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <div id="piechart" style=" height: 400px; "></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-11 h-100">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title text-center text-info">Total Users and Service Providers </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="container"></div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row ">
                    <div class="col-md-12 col-sm-12">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class=" ">
                                        <h4 class="font-weight-bolder text-info">All Users List</h4>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card-content ">
                            <div class="">


                                    @if (Session::has('message'))
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "{!! Session::get('message') !!}",
                                                text: 'Great Job!',
                                            });
                                        </script>

                                </div>
                                @endif
                                <table class="table text-center table-striped table-hover shadow">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Location</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users === null)
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <h4 class="text-danger font-weight-bolder">No Booking
                                                        History Found</h4>
                                                </td>

                                            @else
                                                @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    @if ($user->image)
                                                        <img src="{{ asset('images/sproviders') }}/{{ $user->image }}"
                                                            width="40" height="40" alt="{{ $user->name }}"
                                                            class="rounded-circle img-border gradient-summer">

                                                    @else
                                                        <img src="{{ asset('images/sproviders/default.png') }}" alt=""
                                                            class="rounded-circle img-border gradient-summer width-100">
                                                    @endif
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>

                                                <td>{{ $user->address }}</td>

                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <div class="Export-btn">
                                    <a href="{{ route('admin.export_customer') }}"
                                        class="btn btn-success pull-right mx-3">Export Data</a>
                                </div>
                                {{-- {{ $sprovider->links() }} --}}


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  col-sm-12 ">
                    <div class="card shadow-lg">
                        <div class="card-header py-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class=" ">
                                    <h4 class="font-weight-bolder text-info">All User Queries</h4>
                                </div>
                                <div class="">

                            </div>
                        </div>

                        <div class="card-content">
                            <div class="">
                                <table class="table text-center table-striped table-hover shadow">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Received</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td><span class="badge badge-success ">#QU0{{ $contact->id }}</span>
                                                </td>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->message }}</td>
                                                <td>{{ $contact->created_at }}</td>
                                                <td> <a type="button" title="Delete" class=""
                                                        wire:click="deleteConfirm({{ $contact->id }})"><i
                                                            class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="Export-btn">
                                    <a href="{{ route('admin.export_contacts') }}"
                                        class="btn btn-success pull-right mx-3">Export Data</a>
                                </div>
                                {{ $contacts->links() }}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-sm-12">
                    <div class="card shadow" style="overflow-x:auto;">
                        <div class="card-header py-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class=" ">
                                    <h4 class="font-weight-bolder text-info">All Service Providers</h4>
                                </div>
                                <div class="">
                                    <a href="{{ route('admin.add_service_provider') }}"
                                        class="btn-hover color-hover  mx-3"><i class="fa fa-plus-circle"></i> Add
                                        New</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-content ">
                            <div class="">

                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <table class="table text-center table-striped table-hover  shadow px-3">
                                    <thead>
                                        <tr class="">
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Profession</th>
                                            <th>Phone</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sproviders as $sprovider)
                                            <tr>
                                                <td><span
                                                        class="badge badge-success mt-3">#SP0{{ $sprovider->id }}</span>
                                                </td>
                                                <td><img class="rounded-circle img-border gradient-summer  "
                                                        src="{{ asset('images/sproviders') }}/{{ $sprovider->image }}"
                                                        width="80" height="80" alt=""></td>
                                                <td>{{ $sprovider->name }}</td>
                                                <td>
                                                    @if ($sprovider->service_category_id)
                                                        {{ $sprovider->category->name }}
                                                    @endif

                                                </td>
                                                <td>{{ $sprovider->phone }}</td>
                                                <td>{{ $sprovider->address }}</td>
                                                <td>

                                                    {{-- <a href="{{ route('admin.edit_service_categories', ['category_id' => $sprovider->id]) }}"><i class="ft-edit font-medium-5 mr-2"></i></a> --}}
                                                    <a href="#"
                                                        onclick="confirm('Are you sure, you want to delete this service Provider!')||event.stopImmediatePropagation()"
                                                        wire:click.prevent="deleteServiceProvider({{ $sprovider->id }})"
                                                        style="margin-left:10px"><i
                                                            class="fa fa-trash fa fa-trash  text-danger  fa-2x   mr-2"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="Export-btn">
                                    <a href="{{ route('admin.export_service_provider') }}"
                                        class="btn btn-success pull-right mx-3">Export Data</a>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- END : End Main Content-->



</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users = <?php echo json_encode($new_users); ?>;

    Highcharts.chart('container', {
        title: {
            text: 'New Users Growth - 2022'
        },
        subtitle: {
            text: ' TotalService.in'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of Users'
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 300
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
