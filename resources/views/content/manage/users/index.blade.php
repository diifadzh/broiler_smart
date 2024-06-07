@extends('layout.app')
@section('title', 'Users')
@extends('layout.admin')

@section('user')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-0">Manage Users</h5>
                <a href="{{ url('/') }}" class="btn btn-primary">Create User</a>
            </div>
            <div class="card-body p-4">
                {{-- <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by Product Number"
                        aria-label="Search by product number" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                </div> --}}
                <div class="table-responsive" data-simplebar>
                    <table class="table text-nowrap align-middle table-custom mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="text-dark fw-normal">Avatar</th>
                                <th scope="col" class="text-dark fw-normal">Name</th>
                                <th scope="col" class="text-dark fw-normal">Email</th>
                                <th scope="col" class="text-dark fw-normal">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <th>
                                        <img src="{{ asset('images/profile/user-1.jpg') }}" alt=""
                                            class="rounded-circle" style="width: 48px">
                                    </th>
                                    <td>
                                        <div class="d-flex align-items-center gap-6">
                                            <div>
                                                <h6 class="mb-0">{{ $item->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark">{{ $item->email }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-semibold mb-4">Manage Users</h5>
                <a href="#" class="btn btn-primary">Tambah Users</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <th>
                                <img src="{{ asset('images/profile/user-1.jpg') }}" alt=""
                                    class="rounded-circle" style="width: 48px">
                            </th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ url('/manage/users/' . $item->id . '/edit') }}"
                                    class="btn btn-secondary">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
