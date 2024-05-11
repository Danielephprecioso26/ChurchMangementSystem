@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">Allowance Details</h2>
            </div>
            <div class="card-body px-3">
                <!-- Display the details of the specific allowance -->
                <h3>Allowance ID: {{ $weeklyAllowance->id }}</h3>
                <p>Allownce To: {{ $weeklyAllowance->allownce_to }}</p>
                <p>Name: {{ $weeklyAllowance->name }}</p>
                <p>Allowance: {{ $weeklyAllowance->allowance }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
