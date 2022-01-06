<div>
    @include('../../layouts/admin/header')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <section id="extended">
                        <div class="row justify-content-md-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <h4 class="">All Service</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.add_service') }}"
                                                    class="btn btn-info pull-right mx-3">Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-content">
                                        <div class="card-body table-responsive">

                                            @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('message') }}
                                                </div>
                                            @endif
                                            <table class="table text-center table-striped table-hover shadow">
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
                                                            <td><span class="badge badge-success ">{{ $no++ }}</span></td>
                                                            <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                    width="80" alt=""></td>
                                                            <td>{{ $service->name }}</td>
                                                            <td>{{ $service->price }}</td>
                                                            <td>
                                                                @if ($service->status)
                                                                    Active
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
                                                                    href="{{ route('admin.edit_service', ['service_slug' => $service->slug]) }}"><i
                                                                        class="ft-edit font-medium-3 mr-2 text-info"></i></a>
                                                                <a href="#"
                                                                    onclick="confirm('Are you sure, you want to delete this service category!')||event.stopImmediatePropagation()"
                                                                    wire:click.prevent="deleteService({{ $service->id }})"
                                                                    ><i
                                                                        class="ft-x font-medium-4 mr-2 text-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
