@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">ALLOWANCES</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('weekly_allowance.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Member">Add New</a>
                </div>
            </div>
            <div class="card-body px-3">
                <!-- Display the list of allowances -->
            </div>
        </div>
    </div>
</div>
@endsection
