@extends('layout.admin')

@section('title', 'Manage Device | Broiler Guard')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create Employee</h5>
                <form action="{{ route('manage.devices.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="field-id" class="form-label">Employee ID</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control @error('id') is-invalid @enderror" id="field-id"
                                aria-describedby="btnDeviceID" placeholder="Ex: AB0001" name="id"
                                value="{{ old('id') }}" maxlength="6">
                            <button class="btn btn-outline-primary" type="button"
                                onclick="generateRandomString('#field-id')" id="btnDeviceID">Generate ID</button>
                            @error('id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="select-user" class="form-label">Owned by</label>
                        <select id="select-user" class="form-select" name="user_id">
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}" @if ($loop->index == 0) selected @endif>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="field-name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="field-name"
                            aria-describedby="field-nameFeedback" placeholder="Ex: Dio Fadli Saputro" name="name"
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
                        <a href="{{ url('manage/devices') }}" class="btn btn-danger me-2">Back</a>
                        <button type="submit" class="btn btn-primary d-flex align-items-center">
                            <iconify-icon icon="solar:add-square-bold" class="me-2" style="font-size:18px"></iconify-icon>
                            Add Device</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function generateRandomString(fieldId) {
            // Generate two random uppercase letters
            const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            const letter1 = letters.charAt(Math.floor(Math.random() * letters.length));
            const letter2 = letters.charAt(Math.floor(Math.random() * letters.length));

            // Generate four random numbers
            const numbers = Math.floor(1000 + Math.random() * 9000); // Ensure it is always 4 digits

            // Combine the letters and numbers
            const randomString = `${letter1}${letter2}${numbers}`;

            // Insert the random string into the input field with id 'randomStringInput'
            $(fieldId).val(randomString);
        }
    </script>
@endpush
