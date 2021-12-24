<div>
    @include('../layouts/customer/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                    id="from-actions"><i class="ft-user"></i>Update Profile</h4>
                            </div>
                            <br>
                            <div class="card-content">
                                <div class="px-3">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                                        </div>
                                    @endif
                                    <form class="form form-horizontal" wire:submit.prevent="updateProfile"
                                        enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label for="newimage" class="col-md-3 label-control">Profile Image :
                                                </label>
                                                <div class="col-md-9">
                                                    <input class="form-control-file border-primary" type="file"
                                                        id="newimage" name="newimage" wire:model="newimage">
                                                    @if ($newimage)
                                                        <img src="{{ $newimage->temporaryUrl() }}" alt="" width="150"
                                                            height="150"
                                                            class="rounded-circle img-border gradient-summer my-3">
                                                    @elseif($image)
                                                        <img src="{{ asset('images/customer') }}/{{ $image }}"
                                                            alt="" width="150" height="150"
                                                            class="rounded-circle img-border gradient-summer my-3">
                                                    @else
                                                        <img src="{{ asset('images/sproviders/default.png') }}" alt=""
                                                            class="rounded-circle img-border gradient-summer width-100 my-3">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="phone">Contact Number:
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="phone" class="form-control border-primary"
                                                        name="phone" placeholder="+91-7689XXXXXX" wire:model="phone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="address">Address </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="address" class="form-control border-primary"
                                                        name="address" placeholder="Your address" wire:model="address">
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
                        href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink"
                        target="_blank" class="text-bold-800 primary darken-2">Team 26 </a>, All rights
                    reserved. </span></p>
        </footer>
        <!-- End : Footer-->

    </div>
</div>
</div>
