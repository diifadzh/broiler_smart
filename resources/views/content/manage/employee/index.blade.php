@extends('layout.admin')

@section('title', 'Employee | SIKAP')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title fw-semibold mb-4">Manage Employee</h5>
                    <a href="{{ url('manage/employee/create') }}" class="btn btn-primary">Add Employee</a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Position</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->position }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('manage.employee.edit', $item->id) }}"
                                        class="btn btn-primary me-2">Edit</a>
                                    <a href="{{ route('manage.employee.destroy', $item->id) }}" class="btn btn-danger"
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
