<style>
    .avatar {
  border: 0.3rem solid rgba(#fff, 0.3);
  margin-top: -6rem;
  margin-bottom: 1rem;
  max-width: 9rem;
}
</style>

<div>
    @include('../../layouts/admin/header')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">

                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 ">
                    <div class="container">
                    <div class="row">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-6 mx-auto">
                        <div class="card mt-5">
                        {{-- <img class="card-img-top" src="https://tothecloud.dev/assets/images/home-automation-background.webp" alt="Bologna"> --}}
                        <div class="card-body text-center">
                            <img class="avatar rounded-circle" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/robert.jpg" alt="Bologna">
                            <h4 class="card-title">Robert Downey Jr.</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Famous Actor</h6>
                            <p class="card-text">Robert John Downey Jr.'career has included critical and popular success in his youth, followed by a period of substance abuse and legal difficulties, and a resurgence of commercial success in middle age. </p>


                                <a  class="btn btn-primary " href="{{url('admin/Update_Profile')}}">
                                    Update Profile
                                </a>

                        </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
            </div>
            </section>

        </div>
    </div>

  {{-- <!-- BEGIN : Footer-->
  <footer class="footer footer-static footer-light mt-4">
    <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2021 <a
                href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink"
                target="_blank" class="text-bold-800 primary darken-2">Team 26 </a>, All rights
            reserved. </span></p>
</footer>
<!-- End : Footer-->

</div>
</div> --}}

{{-- </div> --}}
