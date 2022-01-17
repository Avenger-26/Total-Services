<div>
    @include('../layouts/sprovider/header')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <section id="extended">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-sm-11 mx-auto ">
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class=" ">
                                                <h4 class="font-weight-bolder text-info">All Service</h4>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('sprovider.add_service') }}"
                                                    class="btn-hover color-hover mx-3">
                                                    <i class="fa fa-plus-circle "></i>Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="card-content">
                                        <div class=" table-responsive">

                                            @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('message') }}
                                                </div>
                                            @endif
                                            <table class="table text-center table-striped table-hover shadow ">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                        <th>Featured</th>
                                                        <th>Category</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($services as $service)
                                                        <tr>
                                                            <td><span class="badge badge-info mt-2" >#SER0{{ $service->id }}</span></td>
                                                            <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                    width="80" alt=""></td>
                                                            <td>{{ $service->name }}</td>
                                                            <td>{{ $service->price }}</td>
                                                            <td>
                                                                @if ($service->status)
                                                                    <span class="badge badge-success">Active</span>
                                                                @else
                                                                    Inactive
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($service->featured)
                                                                    Yes
                                                                @else
                                                                    No
                                                                @endif
                                                            </td>
                                                            <td>{{ $service->category->name }}</td>
                                                            <td>{{ $service->created_at }}</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('sprovider.edit_service', ['service_slug' => $service->slug]) }}"><i
                                                                        class="ft-edit fa-2x mr-2   text-info"></i></a>
                                                                <a href="#"
                                                                    onclick="confirm('Are you sure, you want to delete this service category!')||event.stopImmediatePropagation()"
                                                                    wire:click.prevent="deleteService({{ $service->id }})"
                                                                    ><i
                                                                        class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="Export-btn">
                                                <a href="{{ route('sprovicer.export_all_services') }}"
                                                    class="btn btn-info pull-right mx-3">Export Data</a>
                                            </div>
                                            {{ $services->links() }}


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

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
    <style>
        .w-5 {
            display: none;
        }

    </style>
    </div>

