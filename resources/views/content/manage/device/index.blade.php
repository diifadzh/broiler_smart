@extends('layout.admin')

@section('title', 'Device')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title fw-semibold mb-4">Manage Employee</h5>
                    <a href="{{ route('manage.devices.create') }}" class="btn btn-primary">Add Employee</a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Employee ID</th>
                            <th scope="col">Owned by</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Position</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $item)
                            <tr>
                                <th>
                                    <strong>{{ $item->id }}</strong>
                                </th>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->position }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('manage.devices.edit', $item->id) }}"
                                        class="btn btn-primary me-2">Edit</a>
                                    <a href="{{ route('manage.devices.destroy', $item->id) }}" class="btn btn-danger"
                                        data-confirm-delete="true">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
