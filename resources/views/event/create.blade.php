@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Add New Event') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger error">
                            <p class='text-light font-weight-bold'>Error!</p> <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class='text-light'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf
                    
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Event Name:</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Event Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Event Date:</strong>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Venue:</strong>
                                    <input type="text" name="venue" class="form-control" placeholder="Venue">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
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


@push('dashboard')

@endpush
