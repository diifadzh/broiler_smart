@extends('layout.app')
@section('title', 'Users | Broiler Smart')
@extends('layout.admin')

@section('user')
    <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold mb-0">Manage Users</h5>
                    <a href="./create" class="btn btn-primary">Create User</a>
                </div>
                <div class="card-body p-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search by Product Number"
                            aria-label="Search by product number" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                    </div>
                    <div class="table-responsive" data-simplebar>
                        <table class="table text-nowrap align-middle table-custom mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-dark fw-normal">Number</th>
                                    <th scope="col" class="text-dark fw-normal">Name</th>
                                    <th scope="col" class="text-dark fw-normal">Email</th>
                                    <th scope="col" class="text-dark fw-normal">Email Verified At</th>
                                    <th scope="col" class="text-dark fw-normal">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-dark fw-normal">01</th>
                                    <td>
                                        <div class="d-flex align-items-center gap-6">
                                            <div>
                                                <h6 class="mb-0">Minecraf App</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark">73.2%</span>
                                    </td>
                                    <td>
                                        <span class="text-dark">Low</span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush()