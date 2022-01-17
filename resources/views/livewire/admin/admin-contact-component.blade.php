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
                                            <h4 class="">All Contact</h4>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-content">
                                    <div class="card-body table-responsive">
                                        <table class="table text-center table-striped table-hover shadow">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Message</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contacts as $contact)
                                                    <tr>
                                                        <td><span
                                                                class="badge badge-success ">#QU0{{ $contact->id }}</span>
                                                        </td>
                                                        <td>{{ $contact->name }}</td>
                                                        <td>{{ $contact->email }}</td>
                                                        <td>{{ $contact->phone }}</td>
                                                        <td>{{ $contact->message }}</td>
                                                        <td>{{ $contact->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="Export-btn">
                                            <a href="{{ route('admin.export_contacts') }}"
                                                class="btn btn-info pull-right mx-3">Export Data</a>
                                        </div>
                                        {{ $contacts->links() }}


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

    <style>
        .w-5 {
            display: none;
        }

    </style>
</div>
