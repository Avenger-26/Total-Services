<div>
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    @include('../../layouts/admin/header')
    <!-- Navbar (Header) Ends-->
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <section id="extended">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <div class="card shadow"  style="overflow-x: auto">
                                <div class="card-header py-3 ">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <div class=" ">
                                            <h4 class="font-weight-bolder text-info">Service By Category</h4>
                                        </div>
                                        <div class="">
                                            <a href="{{ url('admin/service-categories') }}"
                                                class="btn-hover color-hover">Back</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <div>
                                        @if (Session::has('message'))
                                            <script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: "{!! Session::get('message') !!}",
                                                    text: 'Great Job!',
                                                });
                                            </script>
                                        @endif
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Category</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($services === null)
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            <h3 class="text-danger font-weight-bolder">No Service Found
                                                            </h3>
                                                        </td>
                                                    </tr>
                                                @else
                                                    @foreach ($services as $service)
                                                        <tr>
                                                            <td>

                                                                <span
                                                                    class="badge badge-success mt-3">#SBC0{{ $service->id }}</span>

                                                            </td>
                                                            <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                    width="80" alt=""></td>
                                                            <td>{{ $service->name }}</td>
                                                            <td>{{ $service->price }}</td>
                                                            <td>
                                                                @if ($service->status)
                                                                    Active
                                                                @else
                                                                    Inactive
                                                                @endif
                                                            </td>
                                                            <td>{{ $service->category->name }}</td>
                                                            <td>{{ $service->created_at }}</td>
                                                            <td>
                                                                <a href="#"><i
                                                                        class="fa fa-pencil-square-o text-info fa-2x   mr-2"></i></a>
                                                                <a type="button" title="Delete" class=""
                                                                    wire:click="deleteConfirm({{ $service->id }})"><i
                                                                        class="ft-trash-2 fa-2x mr-2  text-danger"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                @endif
                                            </tbody>
                                        </table>
                                        <center>
                                            {{ $services->links() }}
                                        </center>


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
<script>
    window.addEventListener('Swal.fire:confirm', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
            showCancelButton: event.detail.showCancelButton,
            confirmButtonColor: event.detail.confirmButtonColor,
            cancelButtonColor: event.detail.cancelButtonColor,
            confirmButtonText: event.detail.confirmButtonText,
        }).then((willDelete) => {
            if (willDelete) {

                window.livewire.emit('delete', event.detail.id);

            }
        });
    });
</script>
