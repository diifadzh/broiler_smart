@extends('layout.admin')

@section('title', 'Create Employee | SIKAP')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create Employee</h5>
                <form action="{{ route('manage.employee.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="field-name" class="form-label">Name</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="field-name"
                            aria-describedby="field-nameFeedback" placeholder="John Doe" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <div id="field-nameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="field-address" class="form-label">Address</label>
                        <input type="address" class="form-control @error('address') is-invalid @enderror"
                            aria-describedby="field-addressFeedback" id="field-address" name="address">
                        @error('address')
                            <div id="field-addressFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="field-phone_number" class="form-label">Phone Number</label>
                        <input type="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                            aria-describedby="field-phone_numberFeedback" id="field-phone_number" name="phone_number">
                        @error('phone_number')
                            <div id="field-phone_numberFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="select-gender" class="form-label">Gender</label>
                        {{-- <select id="select-gender" class="form-select" name="gender">
                            @foreach ($employee as $item)
                                <option value="{{ $item->name }}" @if ($loop->index == 0) selected @endif>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select> --}}
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="field-position" class="form-label">Position</label>
                        <input type="position" class="form-control @error('position') is-invalid @enderror"
                            aria-describedby="field-positionFeedback" id="field-position" name="position">
                        @error('position')
                            <div id="field-positionFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('manage/employee') }}" class="btn btn-danger me-2">Back</a>
                        <button type="submit" class="btn btn-primary d-flex align-items-center">
                            <iconify-icon icon="solar:user-plus-bold" class="me-2" style="font-size:18px"></iconify-icon>
                            Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
