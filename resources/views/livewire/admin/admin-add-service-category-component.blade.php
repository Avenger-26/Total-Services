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
                                <div class="card-header py-3 ">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">Add New Service Category</h4>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('admin.service_categories') }}"
                                                class="btn-hover color-hover">All Categories</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    @if (Session::has('message'))
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: "{!! Session::get('message') !!}",
                                                text: 'Great Job!',
                                            });
                                        </script>
                                    @endif
                                    <div class="px-2">
                                        <form class=" form form-horizontal" wire:submit.prevent="createNewCategory">
                                            @csrf
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="name" class="label-control ">Category Name:
                                                        </label>

                                                        <input id="name" type="text" class="form-control border-primary"
                                                            name="name" wire:model="name" wire:keyup="generateSlug()" />
                                                        @error('name')<p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
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
                                                        <label for="image" class=" label-control ">Category
                                                            Image:
                                                        </label>

                                                        <input id="image" type="file" class=""
                                                            name="image" wire:model="image" />
                                                        @error('image')<p class="text-danger">{{ $message }}
                                                            </p>
                                                        @enderror
                                                        @if ($image)
                                                            <img src="{{ $image->temporaryUrl() }}" alt="" width="60">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-hover color-hover mx-auto d-flex">Add
                                                Category</button>
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
