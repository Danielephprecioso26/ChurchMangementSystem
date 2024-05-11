@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">Edit Allowance</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('allowances.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body px-3">
                <!-- Form for editing the allowance -->
                <form action="{{ route('weekly_allowance.update', $weeklyAllowance->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Allowance to:</strong>
                                <select name="allownce_to" id="allownce_to" class="form-control">
                                    <option value="worker_allowance" {{ $weeklyAllowance->allownce_to === 'worker_allowance' ? 'selected' : '' }}>Worker Allowance</option>
                                    <option value="follow_up" {{ $weeklyAllowance->allownce_to === 'follow_up' ? 'selected' : '' }}>Follow-up</option>
                                    <option value="rep" {{ $weeklyAllowance->allownce_to === 'rep' ? 'selected' : '' }}>Rep</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $weeklyAllowance->name }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Ammount:</strong>
                                <input type="number" name="allowance" id="allowance" class="form-control" placeholder="0.00" value="{{ $weeklyAllowance->allowance }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
