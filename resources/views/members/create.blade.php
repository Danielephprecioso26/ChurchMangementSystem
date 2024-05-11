@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Add New Member') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('member.index') }}"> Back</a>
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
                    
                    <form action="{{ route('member.store') }}" method="POST">
                        @csrf
                    
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="member_name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Nickname:</strong>
                                    <input type="text" name="nickname" class="form-control" placeholder="Nickname">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Sex:</strong>
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="" disabled selected>Select sex...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Age:</strong>
                                    <input type="age" name="age" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Birthday:</strong>
                                    <input type="date" name="birthday" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Contact Number:</strong>
                                    <input type="text" name="contact_number" class="form-control" placeholder="Contact Number">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Occupation:</strong>
                                    <input type="text" name="occupation" class="form-control" placeholder="Occupation">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Address:</strong>
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Email Address:</strong>
                                    <input type="text" name="email_add" class="form-control" placeholder="Address">
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
