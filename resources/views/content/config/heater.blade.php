@extends('layout.app')
@section('title', 'Dashboard | Broiler Smart')
@extends('layout.admin')

@section('heater')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-0">Control Heater</h5>
                <a href="./create" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
                <div class="btn-group" role="group" aria-label="Heater Mode Toggle">
                    <div class="d-flex align-items-center">
                        <span class="me-2">MODE:</span>
                        <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                        <label class="btn btn-outline-success" for="success-outlined">MANUAL</label>
                    </div>
                </div>
                <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                <label class="btn btn-outline-danger" for="danger-outlined">OTOMATIS</label>
            </div>
            <div></div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush()
