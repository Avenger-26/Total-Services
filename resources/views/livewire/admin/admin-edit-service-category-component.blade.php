<div>
    @include('../../layouts/admin/header')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">

                    <section id="extended">
                        <div class="row justify-content-md-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Edit Service Category</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.service_categories') }}"
                                                    class="btn btn-info pull-right">All Categories</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                                            </div>
                                        @endif
                                        <div class="px-2">
                                            <form class=" form form-horizontal" wire:submit.prevent="updateServiceCategory">
                                                @csrf
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12 ">
                                                            <label for="name" class=" label-control ">Category Name:
                                                            </label>
                                                            <input id="name" type="text" class="form-control border-primary"
                                                                name="name" wire:model="name" wire:keyup="generateSlug()" />
                                                            @error('name')<p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="col-md-12">
                                                            <label for="name" class="label-control ">Category Slug:
                                                            </label>

                                                            <input id="slug" type="text" class="form-control border-primary"
                                                                name="slug" wire:model="slug" />
                                                            @error('slug')<p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
<<<<<<< HEAD
                                                        <label for="image" class=" label-control ">Category Image:
                                                        </label>
=======
                                                            <label for="image" class=" label-control ">Category Image:
                                                            </label>
>>>>>>> 69197a1e8c1af6502ed14c26331236ade75d08b0

                                                            <input id="image" type="file"
                                                                class="" name="newimage"
                                                                wire:model="newimage" />
                                                            @error('newimage')<p class="text-danger">
                                                                    {{ $message }}</p>
                                                            @enderror
                                                            @if ($newimage)
                                                                <img src="{{ $newimage->temporaryUrl() }}" alt=""
                                                                    width="60">
                                                            @else
                                                                <img src="{{ asset('images/services-categories') }}/{{ $image }}"
                                                                    alt="" width="60">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success mx-auto d-flex">Update</button>
                                            </form>
                                        </div>
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

        </div>
