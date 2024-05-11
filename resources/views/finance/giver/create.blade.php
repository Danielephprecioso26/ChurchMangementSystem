@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Add New Giver Record') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('giver.index') }}"> Back</a>
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
                    
                    <form action="{{ route('giver.store') }}" method="POST">
                        @csrf
                    
                        <div class="row">
                            <!-- Giver fields -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Giver name:</strong>
                                    <input type="text" name="giver_name" class="form-control" placeholder="Giver name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input type="date" name="date" class="form-control" readonly value="{{ $s_date }}" placeholder="Date" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Tithe:</strong>
                                    <input type="number" name="tithe" step=0.01 class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Offering:</strong>
                                    <input type="number" name="offering" step=0.01 class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Mission:</strong>
                                    <input type="number" name="mission" step=0.01 class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Sanctuary:</strong>
                                    <input type="number" name="sanctuary" step=0.01 class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Love Gift:</strong>
                                    <input type="number" name="love_gift" step=0.01 class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Dance Ministry:</strong>
                                    <input type="text" name="dance_ministry" step=0.01 class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            
                            <div class="col-md-12 my-2">
                                <p>Cash Count</p>
                            </div>
                            <!-- Cash count fields -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 1,000:</strong>
                                    <input type="number" name="cc_1000" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 500:</strong>
                                    <input type="number" name="cc_500" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 200:</strong>
                                    <input type="number" name="cc_200" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 100:</strong>
                                    <input type="number" name="cc_100" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 50:</strong>
                                    <input type="number" name="cc_50" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 20:</strong>
                                    <input type="number" name="cc_20" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 10:</strong>
                                    <input type="number" name="cc_10" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 5:</strong>
                                    <input type="number" name="cc_5" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>Php 1:</strong>
                                    <input type="number" name="cc_1" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.25:</strong>
                                    <input type="number" name="cc_0_25" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.10:</strong>
                                    <input type="number" name="cc_0_1" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.05:</strong>
                                    <input type="number" name="cc_0_05" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.01:</strong>
                                    <input type="number" name="cc_0_01" class="form-control" placeholder="0">
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
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
</style>
