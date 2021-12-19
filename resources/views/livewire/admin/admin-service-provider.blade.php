<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <section id="extended">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-sm-11">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <h4 class="">All Service</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.add_service_provider') }}"
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
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Image</th>
                                                        <th>Profession</th>
                                                        <th>Phone</th>
                                                        <th>City</th>
                                                        <th>Location</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sproviders as $sprovider)
                                                        <tr>
                                                            <td>{{ $sprovider->user_id }}</td>
                                                            <td><img src="{{ asset('images/sproviders') }}/{{ $sprovider->image }}"
                                                                    width="60" alt=""></td>
                                                            <td>{{ $sprovider->about }}</td>
                                                            <td>{{ $sprovider->phone }}</td>
                                                            <td>{{ $sprovider->city }}</td>
                                                            <td>{{ $sprovider->service_locations }}</td>
                                                            <td>

                                                                <a
                                                                    href="{{ route('admin.edit_service_categories', ['category_id' => $sprovider->id]) }}"><i
                                                                        class="ft-edit font-medium-5 mr-2"></i></a>
                                                                <a href="#"
                                                                    onclick="confirm('Are you sure, you want to delete this service category!')||event.stopImmediatePropagation()"
                                                                    wire:click.prevent="deleteServiceProvider({{ $sprovider->id  }})"
                                                                    style="margin-left:10px"><i
                                                                        class="ft-x  text-danger font-medium-5 mr-2"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{-- {{ $sprovider->links() }} --}}


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
