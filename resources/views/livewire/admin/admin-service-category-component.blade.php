<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
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
                                                <a href="{{ route('admin.add_service_categories') }}"
                                                    class="btn btn-info pull-right mx-3">Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-content">
                                        <div class="card-body table-responsive">

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
                                                            <td><span class="badge badge-success mt-3">{{ $no++ }}</span></td>
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
                                                                        class="ft-list font-medium-3 mr-2 text-light"></i></a>

                                                                <a
                                                                    href="{{ route('admin.edit_service_categories', ['category_id' => $scategory->id]) }}"><i
                                                                        class="ft-edit-2 font-medium-3  mr-2"></i></a>
                                                                <a href="#"
                                                                    onclick="confirm('Are you sure, you want to delete this service category!')||event.stopImmediatePropagation()"
                                                                    wire:click.prevent="deleteServiceCategory({{ $scategory->id }})"
                                                                ><i
                                                                        class="ft-x  text-danger font-medium-3  mr-2"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
