<!-- Create Counting Service -->
@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Create Counting Service') }}</h2>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('finance.counting_services.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <strong>Type of Service:</strong>
                        <input type="text" class="form-control" id="type_service" name="type_service" required>
                    </div>

                    <div class="form-group">
                    <strong>Date:</strong>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                    <strong>Time:</strong>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
