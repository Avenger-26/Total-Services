
<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')

        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <section id="extended">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 ">
                                <div class="card shadow ">
                                    <div class="card-header py-3 ">
                                        <div class="d-flex align-items-center justify-content-between ">
                                            <div class=" ">
                                                <h4 class="font-weight-bolder text-info">All Service Categories</h4>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('admin.add_service_categories') }}"
                                                    class="btn-hover color-hover mx-3 my-3"> <i class="fa fa-plus-circle"></i> Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-content">
                                        <div class="">

                                            @if (Session::has('message'))
                                            <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ Session::get('message') }}</strong>
                                              </div>

                                                </div>
                                            @endif
                                            <table class="table text-center table-striped table-hover shadow">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Slug</th>
                                                        <th>Featured</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($scategories as $scategory)
                                                        <tr>
                                                            <td><span class="badge badge-success mt-3">#SC0{{ $scategory->id }}</span></td>
                                                            <td><img class="rounded-circle img-border"src="{{ asset('images/services-categories') }}/{{ $scategory->image }}"
                                                                    width="80" height="80" alt=""></td>
                                                            <td>{{ $scategory->name }}</td>
                                                            <td>{{ $scategory->slug }}</td>
                                                            <td>
                                                                @if ($scategory->featured)
                                                                    Yes
                                                                @else
                                                                    No
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('admin.services_by_category', ['category_slug' => $scategory->slug]) }}"
                                                                    style="margin-left:15px"><i
                                                                        class="fa fa-list-alt text-warning  fa-2x mr-2 text-light"></i></a>

                                                                <a
                                                                    href="{{ route('admin.edit_service_categories', ['category_id' => $scategory->id]) }}"><i
                                                                        class="fa fa-pencil-square-o text-info fa-2x   mr-2"></i></a>
                                                                <a href="#"
                                                                    onclick="confirm('Are you sure, you want to delete this service category!')||event.stopImmediatePropagation()"
                                                                    wire:click.prevent="deleteServiceCategory({{ $scategory->id }})"
                                                                ><i
                                                                        class="fa fa-trash  text-danger  fa-2x   mr-2"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="Export-btn">
                                                <a href="{{ route('admin.export_service_categories') }}"
                                                    class="btn btn-info pull-right mx-3">Export Data</a>
                                            </div>
                                            {{ $scategories->links() }}


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
