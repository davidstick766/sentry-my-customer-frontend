@extends('layout.base')
@section("custom_css")
<link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
<link rel="stylesheet" href="{{asset('backend/assets/css/store_list.css')}}">
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-md-12">
                <div class="customer-heading-container">
                    <h4 class="mb-1 mt-0">All Stores</h4>
                    <button class="add-customer-button btn btn-primary" data-toggle="modal">
                        <a href="{{ route('store.create') }}" class="text-white">
                            Add New <i class="fa fa-plus add-new-icon"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-lg-12 mt-4">
                                    <div class="row">
                                        <label class="form-control-label">Search Stores</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="search"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="customer-name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="sub-header">
                            List of all stores
                        </p>
                        <div class="table-responsive">
                            <table class="table mb-0" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Store Name</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{isset( $response->id) ? $response->id : "1"}}</th>
                                        <td>{{isset( $response->store_name) ? $response->store_name : "Chikoo laundry"}}
                                            <br> <span class="badge badge-success">Verified</span> </td>
                                        <td>12 sentryville, Lagos Nigeria<br> <span class="badge badge-primary">Store
                                                Reference Code: ST145M455</span> </td>
                                        <td>
                                            <div class="btn-group mt-2 mr-1">
                                                <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('store.view') }}">View
                                                        Store</a>
                                                    <a class="dropdown-item" href="{{ route('store.edit') }}">Edit
                                                        store</a>
                                                    <a class="dropdown-item" href="#">Delete store</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Abbie's Accessories <br> <span class="badge badge-danger">Unverified</span>
                                        </td>
                                        <td>274 crenshaw, league county<br> <span class="badge badge-primary">Store
                                                Reference Code: ST145H2783</span> </td>
                                        <td>
                                            <div class="btn-group mt-2 mr-1">
                                                <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('store.view') }}">View
                                                        Store</a>
                                                    <a class="dropdown-item" href="{{ route('store.edit') }}">Edit
                                                        store</a>
                                                    <a class="dropdown-item" href="#">Delete store</a>
                                                </div>
                                            </div>
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
</div>
@endsection

@section("javascript")
<script src="/backend/assets/build/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {});

</script>
@stop
