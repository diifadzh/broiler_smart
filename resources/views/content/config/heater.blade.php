@extends('layout.app')
@section('title', 'Heater Config')

@section('heater')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-0">Control Heater</h5>
                <a href="./create" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check form-switch form-check-lg d-flex align-items-center">
                            <label class="form-check-label d-flex align-items-center me-2" for="flexSwitchCheckDefault">
                                <span class="text-muted">STATUS: OFF</span>
                            </label>
                            <input class="form-check-input mx-2" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label ms-2" for="flexSwitchCheckDefault">
                                <span class="text-primary">ON</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="mode-select" class="form-label">Mode</label>
                            <select class="form-select" id="mode-select">
                                <option value="manual">MANUAL</option>
                                <option value="otomatis">OTOMATIS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="customRange2" class="form-label">Example range (Optional for Manual Mode)</label>
                            <input type="range" class="form-range" min="0" max="5" id="customRange2"
                                disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('js')
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush() --}}
