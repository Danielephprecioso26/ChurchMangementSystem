@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Member Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('member.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" class="form-control" value="{{ $member->member_name }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Nickname:</strong>
                                <input type="text" class="form-control" value="{{ $member->nickname }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Sex:</strong>
                                <input type="text" class="form-control" value="{{ $member->sex }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Age:</strong>
                                <input type="text" class="form-control" value="{{ $member->age }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Birthday:</strong>
                                <input type="text" class="form-control" value="{{ $member->birthday }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Contact Number:</strong>
                                <input type="text" class="form-control" value="{{ $member->contact_number }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Occupation:</strong>
                                <input type="text" class="form-control" value="{{ $member->occupation }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Address:</strong>
                                <input type="text" class="form-control" value="{{ $member->address }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Address:</strong>
                                <input type="text" class="form-control" value="{{ $member->email_add }}" readonly>
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
