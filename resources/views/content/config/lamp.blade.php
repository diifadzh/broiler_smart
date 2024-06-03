@extends('layout.app')
@section('title', 'Dashboard | Broiler Smart')
@extends('layout.admin')

@section('')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">

        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush()
