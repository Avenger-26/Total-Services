<div>

    @include('../../layouts/admin/header')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8 col-sm-11 mx-auto gradient-border shadow">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title text-center" style="font-size:28px; font-weight:bolder"
                                        id="from-actions"><i class="fa fa-key"></i> Admin Change Password</h4>
                                </div>
                                <br>
                                <div class="card-content">
                                    <div class=" col-md-10 col-sm-10 mx-auto px-3">
                                        @if (Session::has('message'))
                                        <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>{{ Session::get('message') }}</p>
                                          </div>

                                        </div>
                                    @endif
                                        <form  method="post" wire:submit.prevent="updatePassword">
                                            @csrf
                                            <div class="form-group">
                                                <label for="current_password">Current Password</label>
                                                <input type="password" class="form-control" id="current_password" placeholder="Curent Password" name="current_password" required wire:model="current_password">
                                              </div>

                                              <div class="form-group ">
                                                <label for="new_password">New Password</label>
                                                <input type="password" class="form-control" id="new_password" placeholder="New Password" wire:model="new_password" name="new_password" required>
                                              </div>
                                              <div class="form-group ">
                                                <label for="confirm_password"> Confirm Password</label>
                                                <input type="password" class="form-control" id="confirm_password" placeholder=" Confirm Password" name="confirm_password" required wire:model="confirm_password">
                                              </div>

                                           <div class=" mx-auto">
                                            <button type="submit" class="btn-hover color-hover  mx-auto">Submit </button>
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
