<div>

    @include('../../layouts/admin/header')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8 col-sm-11 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                        id="from-actions">
                                      <i class="fa fa-user-plus"></i>
                                        Update Profile</h4>
                                </div>
                                <br>
                                <div class="card-content">
                                    <div class="px-3">
                                        @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                                        </div>
                                    @endif
                                        <form enctype="multipart/form-data" method="post" wire:submit.prevent="createNewCategory">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputAddress">Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required wire:model="name">
                                              </div>
                                            <div class="form-row">
                                              <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" wire:model="email" name="email" required>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required wire:model="password">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputAddress">Phone</label>
                                              <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone" required wire:model="phone">
                                            </div>
                                            <div class="form-group">
                                              <label for="inputAddress">Address</label>
                                              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required wire:model="address">
                                            </div>





                                            <div class="form-group ">
                                                <label for="exampleFormControlFile1">Update Photo</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" placeholder="Upload" required>
                                              </div>
                                           <div class=" mx-auto">
                                            <button type="submit" class="btn btn-primary px-4 mx-auto">Submit </button>
                                           </div>
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

