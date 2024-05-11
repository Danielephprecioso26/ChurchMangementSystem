@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Disbursement Management') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('disbursement.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Disbursement Record">Add New</a>
                    <a class="btn btn-info" href="{{ route('request.index') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View All Disbursement">View Disbursement Requests</a>
                    <a class="btn btn-info" href="{{ route('disbursment.view_disbursment') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View All Disbursement">View Disbursement </a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                  
                    
                
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
@push('index')

@endpush
