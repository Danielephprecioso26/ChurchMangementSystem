@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">Create New Allowance</h2>
            </div>
            <div class="card-body px-3">
                <!-- Form for creating a new allowance -->
                <form action="{{ route('weekly_allowance.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <strong>Allowance to:</strong>
                        <select name="allownce_to" id="allownce_to" class="form-control"  >
                            <option value="">Please Select</option>
                            <option value="worker_allowance">Worker Allowance</option>
                            <option value="follow_up">Follow-up</option>
                            <option value="rep">Rep</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                    <strong>Name:</strong>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    
                    <div class="form-group">
                    <strong>Allowance Amount:</strong>
                        <input type="number" name="allowance" id="allowance" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
