@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Edit Member Info') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('member.index') }}"> Back</a>
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
                
                    <form action="{{ route('member.update', $member->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="member_name" value="{{ $member->member_name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Nickname:</strong>
                                    <input type="text" name="nickname" value="{{ $member->nickname }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Sex:</strong>
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="" disabled>Select sex...</option>
                                        <option value="Male" @if($member->sex == 'Male') selected @endif>Male</option>
                                        <option value="Female" @if($member->sex == 'Female') selected @endif>Female</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Age:</strong>
                                    <input type="text" name="age" value="{{ $member->age }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Birthday:</strong>
                                    <input type="text" name="birthday" value="{{ $member->birthday }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Contact Number:</strong>
                                    <input type="text" name="contact_number" value="{{ $member->contact_number }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Occupation:</strong>
                                    <input type="text" name="occupation" value="{{ $member->occupation }}" class="form-control" placeholder="Name">
                                </div> 
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Address:</strong>
                                    <input type="text" name="address" value="{{ $member->address }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Address:</strong>
                                    <input type="text" name="email_add" value="{{ $member->email_add }}" class="form-control" placeholder="Name">
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
