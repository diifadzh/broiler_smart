@extends('layout.app')
@section('title', 'Dashboard | Broiler Smart')
@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <!--  Divclass 1 -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                            <span class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                                <iconify-icon icon="solar:temperature-outline" class="fs-6 text-danger"></iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4">Temperature</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-6">
                            <h4 class="mb-0 fw-medium text-dark"> C</h4>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100" style="height: 7px;">
                            <div class="progress-bar bg-danger" style="width: 83%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Divclass 2 -->
            <div class="col-lg-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                                    <iconify-icon icon="solar:football-outline" class="fs-6 text-secondary">
                                    </iconify-icon>
                                </span>
                                <h6 class="mb-0 fs-4">Humidity</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-6">
                                <h4 class="mb-0 fw-medium text-dark">83 %</h4>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                <div class="progress-bar bg-secondary" style="width: 83%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Divclass 3 -->
            <div class="col-lg-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6 mb-4 pb-3">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-warning-subtle">
                                    <iconify-icon icon="solar:sun-outline" class="fs-6 text-warning">
                                    </iconify-icon>
                                </span>
                                <h6 class="mb-0 fs-4">Light Intensity</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-6">
                                <h4 class="mb-0 fw-medium">83 lux</h4>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                <div class="progress-bar bg-warning" style="width: 83%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Divclass 4 -->
            <div class="col-lg-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6 mb-0 pb-0">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-primary-subtle">
                                    <iconify-icon icon="solar:sun-outline" class="fs-6 text-primary">
                                    </iconify-icon>
                                </span>
                                <h6 class="mb-0 fs-3">Heater Status</h6>
                            </div>
                            {{-- <div class="d-flex align-items-center justify-content-between mb-6">
                                <h6 class="mb-0 fw-medium"> </h6>
                                <h6 class="mb-0 fw-medium">83%</h6>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                <div class="progress-bar bg-warning" style="width: 83%"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-6 mb-0 pb-0">
                                <span
                                    class="round-48 d-flex align-items-center justify-content-center rounded bg-primary-subtle">
                                    <iconify-icon icon="solar:sun-outline" class="fs-6 text-primary">
                                    </iconify-icon>
                                </span>
                                <h6 class="mb-0 fs-3">Lamp Status</h6>
                            </div>
                            {{-- <div class="d-flex align-items-center justify-content-between mb-6">
                                <h6 class="mb-0 fw-medium"> </h6>
                                <h6 class="mb-0 fw-medium">83%</h6>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                <div class="progress-bar bg-warning" style="width: 83%"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Row 2 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Sensor Statistik</h5>
                            </div>
                            <div>
                                <select class="form-select">
                                    <option value="1">March 2024</option>
                                    <option value="2">April 2024</option>
                                    <option value="3">May 2024</option>
                                    <option value="4">June 2024</option>
                                </select>
                            </div>
                        </div>
                        <div id="revenue-forecast"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Row 3 -->
        <div class="row">
            {{-- <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Revenue by Product</h5>
                        <div class="table-responsive" data-simplebar>
                            <table class="table text-nowrap align-middle table-custom mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-dark fw-normal ps-0">Assigned
                                        </th>
                                        <th scope="col" class="text-dark fw-normal">Progress</th>
                                        <th scope="col" class="text-dark fw-normal">Priority</th>
                                        <th scope="col" class="text-dark fw-normal">Budget</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="{{ asset('images/products/dash-prd-1.jpg') }}" alt="prd1"
                                                    width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Minecraf App</h6>
                                                    <span>Jason Roy</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Low</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="{{ asset('images/products/dash-prd-2.jpg') }}" alt="prd1"
                                                    width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Web App Project</h6>
                                                    <span>Mathew Flintoff</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="{{ asset('images/products/dash-prd-3.jpg') }}" alt="prd1"
                                                    width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Modernize Dashboard</h6>
                                                    <span>Anil Kumar</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary-subtle text-secondary">Very
                                                High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center gap-6">
                                                <img src="{{ asset('images/products/dash-prd-4.jpg') }}" alt="prd1"
                                                    width="48" class="rounded" />
                                                <div>
                                                    <h6 class="mb-0">Dashboard Co</h6>
                                                    <span>George Cruize</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>73.2%</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">High</span>
                                        </td>
                                        <td>
                                            <span class="text-dark">$3.5k</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold">Daily activities</h5>
                        </div>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n1 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0 mt-2"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment was made of $64.95
                                    to Michael</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-secondary flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-danger flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">Project meeting
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold">Daily activities</h5>
                        </div>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n1 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0 mt-2"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-warning flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment was made of $64.95
                                    to Michael</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-secondary flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">New sale
                                    recorded <a href="javascript:void(0)"
                                        class="text-primary d-block fw-normal ">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-danger flex-shrink-0"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6 fw-semibold">Project meeting
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time mt-n6 text-muted flex-shrink-0 text-end">09:46
                                </div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge bg-primary flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n6">Payment received from John
                                    Doe of $385.90</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
        </div>
    </div>
@endsection()

@push('js')
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush()
