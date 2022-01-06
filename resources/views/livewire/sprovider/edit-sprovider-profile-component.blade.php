<div>
    @include('../layouts/sprovider/header')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions"><i class="fa fa-user-plus"></i>Update Profile</h4>
                            </div>
                            <hr>
                            <div class="card-content">
                                <div class="px-3">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success alert-dismissible " role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <a>{{ Session::get('message') }}</a>
                                        </div>
                                    @endif
                                    <form wire:submit.prevent="updateProfile" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="inputAddress">Name</label>
                                            <input type="text" class="form-control border-primary" id="name" name="name" required
                                                wire:model="name">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control border-primary" id="inputEmail4"
                                                    wire:model="email" name="email" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender">Gender</label>
                                                <select class="form-control border-primary" id="gender" name="gender" required
                                                    wire:model="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="label-control" for="phone">Contact Number:
                                            </label>
                                            <input type="text" id="phone" class="form-control border-primary"
                                                name="phone" placeholder="+91-7689XXXXXX" wire:model="phone">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class=" label-control" for="service_category_id">Provider
                                                    Profession:
                                                </label>
                                                <select id="service_category_id" name="service_category_id"
                                                    class="form-control border-primary"
                                                    wire:model="service_category_id">
                                                    @foreach ($scategories as $scategory)
                                                        <option value="{{ $scategory->id }}">
                                                            {{ $scategory->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="label-control" for="slug_id">Provider
                                                    Service: </label>
                                                <select id="slug_id" name="slug_id" class="form-control border-primary"
                                                    wire:model="slug_id">

                                                    @foreach ($services as $service)
                                                        @if ($service->service_category_id == Auth::user()->service_category_id)
                                                            <option value="{{ $service->id }}">{{ $service->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" label-control" for="address">Address </label>
                                            <input type="text" id="address" class="form-control border-primary"
                                                name="address" placeholder="Your address" wire:model="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="newimage" class=" label-control">Profile Image :
                                            </label>

                                            <input class="form-control-file border-primary" type="file" id="newimage"
                                                name="newimage" wire:model="newimage">
                                            @if ($newimage)
                                                <img src="{{ $newimage->temporaryUrl() }}" alt="" width="100"
                                                    height="100" class="rounded-circle img-border gradient-summer my-3">
                                            @elseif($image)
                                                <img src="{{ asset('images/sproviders') }}/{{ $image }}" alt=""
                                                    width="100" height="100"
                                                    class="rounded-circle img-border gradient-summer my-3">
                                            @else
                                                <img src="{{ asset('images/sproviders/default.png') }}" alt=""
                                                    class="rounded-circle img-border gradient-summer width-100 my-3">
                                            @endif

                                        </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-raised btn-primary mx-auto d-flex">
                                Update Profile
                            </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END : End Main Content-->

<!-- BEGIN : Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2021 <a
                href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank"
                class="text-bold-800 primary darken-2">Team 26 </a>, All rights
            reserved. </span></p>
</footer>
<!-- End : Footer-->

</div>
</div>

</div>
