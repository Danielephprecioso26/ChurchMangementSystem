@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Event Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Event Name:</strong>
                                <input type="text" class="form-control" value="{{ $event->title }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Date:</strong>
                                <input type="text" class="form-control" value="{{ date('F d, Y', strtotime($event->date)) }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Venue:</strong>
                                <input type="text" class="form-control" value="{{ $event->venue }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <input type="text" class="form-control" value="{{ $event->description }}" readonly>
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
