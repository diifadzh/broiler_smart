@extends('layout.admin')

@section('title', 'Dashboard | SIKAP')

@section('content')
    <div class="container-fluid">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Aplikasi System Pencatatan Data Pegawai</h3>
                <h6 class="op-7 mb-2">Aplikasi berbasis Website untuk mencatat data pegawai di kelurahan Amegakure</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> --}}
                <a href="#" class="btn btn-primary btn-round">Detail Employee</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card h-80">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-6 mb-10 pb-3">
                            <span
                                class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                                <iconify-icon icon="fa:users" class="fs-6 text-danger"> </iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4">Pegawai Tetap</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-6">
                            <h4 class="mb-0 fw-medium"><span
                                    id="temp-value">{{ $dataSensor->first()->temperature ?? 0 }}</span> </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-80">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-6 mb-10 pb-3">
                            <span
                                class="round-48 d-flex align-items-center justify-content-center rounded bg-primary-subtle">
                                <iconify-icon icon="fa:users" class="fs-6 text-primary"> </iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4">Pegawai Kontrak</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-6">
                            <h4 class="mb-0 fw-medium"><span
                                    id="temp-value">{{ $dataSensor->first()->humidity ?? 0 }}</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-80">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-6 mb-10 pb-3">
                            <span
                                class="round-48 d-flex align-items-center justify-content-center rounded bg-warning-subtle">
                                <iconify-icon icon="fa:users" class="fs-6 text-warning"> </iconify-icon>
                            </span>
                            <h6 class="mb-0 fs-4">Pegawai Magang</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-6">
                            <h4 class="mb-0 fw-medium"><span
                                    id="temp-value">{{ $dataSensor->first()->light_intensity ?? 0 }}</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Statistik Pegawai</h5>
                            </div>
                        </div>
                        <div id="employee"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">Dio Fadli Saputro</a></p>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/dashboard1.js') }}"></script>
@endpush
