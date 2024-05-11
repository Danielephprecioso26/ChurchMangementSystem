@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Inventory Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('inventory.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Product Name:</strong>
                                <input type="text" class="form-control" value="{{$inventory->inventName}}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Ministry Name:</strong>
                                <input type="text" class="form-control" value="{{ $inventory->ministryName }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Category:</strong>
                                <input type="text" class="form-control" value="{{ $inventory->category }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Purchase Date:</strong>
                                <input type="text" class="form-control" value="{{ date('F d, Y', strtotime($inventory->date_purchased)) }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Number of Units:</strong>
                                <input type="text" class="form-control" value="{{ $inventory->item_num }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Unit Cost:</strong>
                                {{ $inventory->unit_cost }}<input type="text" class="form-control" value="Php  {{ $inventory->unit_cost }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Grand Total:</strong>
                                {{ $inventory->unit_cost }}<input type="text" class="form-control" value="Php {{ $inventory->total_cost }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
@push('dashboard')

@endpush
