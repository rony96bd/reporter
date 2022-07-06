@extends('pages.layouts.main')
@section('main-container')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <div class="d-sm-flex align-items-center justify-content-between mb-6"></div> --}}

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- Content Row -->
        <div class="row">
            <!-- ID Send Card -->
            @if ($user->is_admin == '0')
                <div class="col-xl-12 col-md-6 mb-4">

                    <div class="card border-left-primary shadow h-100 py-2">

                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs text-center font-weight-bold text-primary text-uppercase mb-1">
                                        Send ID's
                                    </div>
                                    <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                        <form action="{{ Route('addBr') }}" method="POST"
                                            class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                            @csrf
                                            <div class="input-group">
                                                <input name="brid" type="text" autofocus="on"
                                                    class="form-control bg-light border-0 small" placeholder="Write ID"
                                                    aria-label="Send ID" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">
                                                        <i class="fas fa-paper-plane fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>

        <!-- Page Heading -->

    </div>
    <!-- /.container-fluid -->
    </div>

    <!-- End of Main Content -->
@endsection
