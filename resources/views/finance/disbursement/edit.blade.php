@extends('layouts.user_type.auth')
   
@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Edit Disbursement Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('disbursement.index') }}"> Back</a>
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
                
                    <form action="{{ route('disbursement.update', $disbursement->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Request date:</strong>
                                    <input type="text" name="request_id" class="form-control" value="{{ $disbursement->request_id}}" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Account name:</strong>
                                    <input type="text" name="account_name" class="form-control" placeholder="Account name" value="{{ $disbursement->account_name }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input type="date" name="date" class="form-control" value="{{ $disbursement->date }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Fund Source:</strong>
                                    <select name="fund_source" id="fund_source" class="form-control">
                                        <option value="" disabled>Select request id...</option>
                                        <option value="Funded" @if ($disbursement->fund_source == "Funded") selected @endif>Funded</option>
                                        <option value="GF" @if ($disbursement->fund_source == "GF") selected @endif>GF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Released to:</strong>
                                    <input type="text" name="released_to" class="form-control" placeholder="Released to" value="{{ $disbursement->released_to }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Particular:</strong>
                                    <input type="text" name="particulars" class="form-control" placeholder="Particulars" value="{{ $disbursement->particulars }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Unit price:</strong>
                                    <input type="number" step=0.001 name="unit_price" class="form-control" placeholder="0.00" value="{{ $disbursement->unit_price }}">
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
