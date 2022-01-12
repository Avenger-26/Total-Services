

<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <section id="extended">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11">
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class=" ">
                                                <h4 class="font-weight-bolder text-info">All Service Providers</h4>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('admin.add_service_provider') }}"
                                                    class="btn-hover color-hover  mx-3"><i class="fa fa-plus-circle"></i> Add New</a>
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
                                            <table class="table text-center table-striped table-hover shadow px-3">
                                                <thead>
                                                    <tr class="" >
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
                                                            <td ><span class="badge badge-success mt-3">#SP0{{ $sprovider->id }}</span></td>
                                                            <td><img  class="rounded-circle img-border gradient-summer  " src="{{ asset('images/sproviders') }}/{{ $sprovider->image }}"
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
                                                                                                        <a href="#"  onclick="confirm('Are you sure, you want to delete this service Provider!')||event.stopImmediatePropagation()" wire:click.prevent="deleteServiceProvider({{  $sprovider->id }})" style="margin-left:10px"><i class="fa fa-trash fa fa-trash  text-danger  fa-2x   mr-4"></i></a>
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
