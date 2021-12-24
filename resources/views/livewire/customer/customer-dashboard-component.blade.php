<div>
    @include('../layouts/customer/header')

        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="row match-height justify-content-md-center">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="card">
                                <div class="card-header pb-2">
                                    <h4 class="card-title">Shopping Cart</h4>
                                </div>
                                <div class="card-content">
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="media-object round-media height-50"
                                                        src="{{asset('app-assets/img/elements/01.png')}}"
                                                        alt="Generic placeholder image" /></td>
                                                <td>Ferrero Rocher</td>
                                                <td>1</td>
                                                <td>
                                                    <a class="btn white btn-round btn-success">Purchased</a>
                                                </td>
                                                <td>$19.94</td>
                                                <td>
                                                    <a class="danger" data-original-title="" title="">
                                                        <i class="ft-x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="media-object round-media height-50"
                                                        src="{{asset('app-assets/img/elements/07.png')}}"
                                                        alt="Generic placeholder image" /></td>
                                                <td>Headphones</td>
                                                <td>2</td>
                                                <td>
                                                    <a class="btn white btn-round btn-danger">Cancelled</a>
                                                </td>
                                                <td>$99.00</td>
                                                <td>
                                                    <a class="danger" data-original-title="" title="">
                                                        <i class="ft-x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="media-object round-media height-50"
                                                        src="{{asset('app-assets/img/elements/11.png')}}"
                                                        alt="Generic placeholder image" /></td>
                                                <td>Camera</td>
                                                <td>1</td>
                                                <td>
                                                    <a class="btn white btn-round btn-info">On-Hold</a>
                                                </td>
                                                <td>$299.00</td>
                                                <td>
                                                    <a class="danger" data-original-title="" title="">
                                                        <i class="ft-x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="media-object round-media height-50"
                                                        src="{{asset('app-assets/img/elements/13.png')}}"
                                                        alt="Generic placeholder image" /></td>
                                                <td>Laptop</td>
                                                <td>1</td>
                                                <td>
                                                    <a class="btn white btn-round btn-success">Purchased</a>
                                                </td>
                                                <td>$2442.67</td>
                                                <td>
                                                    <a class="danger" data-original-title="" title="">
                                                        <i class="ft-x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
