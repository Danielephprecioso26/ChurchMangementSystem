@extends('layouts.user_type.auth')
   
@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Edit Product Info') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('donation.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
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
                
                    <form action="{{ route('donation.update', $donation->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Donor name:</strong>
                                        <input type="text" name="donor_name" class="form-control" value="{{ $donation->donor_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input type="date" name="date" class="form-control" value="{{ $donation->date}}">
                                </div>
                            </div>                                               
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Donation type:</strong>
                                    <select name="donation_type" id="donation_type" class="form-control">
                                        <option value="" disabled>Select donation type...</option>
                                        <option value="Monetary" @if($donation->donation_type == 'Monetary')selected @endif>Monetary</option>
                                        <option value="Non-monetary" @if($donation->donation_type == 'Non-monetary')selected @endif>Non-monetary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Donation name <small>(for non-monetary donations)</small>:</strong>
                                    <input type="text" name="donation_name" class="form-control" value="{{ $donation->donation_name }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Amount <small>(for monetary donations)</small>:</strong>
                                    <input type="number" name="amount" class="form-control" @if ($donation->amount)value="{{ $donation->amount }}"@endif>
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
@push('edit')

@endpush
