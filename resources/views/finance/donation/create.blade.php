@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Add Donation Record') }}</h2>
                <div class="pull-left mt-2">
                    <a class="btn btn-primary" href="{{ route('donation.index') }}"> Back</a>
                </div>
                
            </div>
            <div class="card-body pt-4 p-3">
                <div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="{{ route('donation.store') }}" method="POST">
                        @csrf
                    
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Donor name:</strong>
                                        <input type="text" name="donor_name" class="form-control" placeholder="Donor name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>                                               
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Donation type:</strong>
                                    <select name="donation_type" id="donation_type" class="form-control">
                                        <option value="" disabled selected>Select donation type...</option>
                                        <option value="Monetary">Monetary</option>
                                        <option value="Non-monetary">Non-monetary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Donation name <small>(for non-monetary donations)</small>:</strong>
                                    <input type="text" name="donation_name" class="form-control" placeholder="Donation name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Amount <small>(for monetary donations)</small>:</strong>
                                    <input type="number" name="amount" class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    
                    </form>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
@push('create')

@endpush
