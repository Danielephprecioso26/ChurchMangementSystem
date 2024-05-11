@extends('layouts.user_type.auth')
   
@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Edit Giver Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('giver.index') }}"> Back</a>
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
                
                    <form action="{{ route('giver.update', $giver->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Giver name:</strong>
                                    <input type="text" name="giver_name" class="form-control" placeholder="Giver name" value="{{ $giver->giver_name }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input type="date" name="date" class="form-control" value="{{ $giver->date }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Tithe:</strong>
                                    <input type="number" name="tithe" class="form-control" placeholder="0.00" value="{{ $giver->tithe }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Offering:</strong>
                                    <input type="number" name="offering" class="form-control" placeholder="0.00" value="{{ $giver->offering }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Mission:</strong>
                                    <input type="number" name="mission" class="form-control" placeholder="0.00" value="{{ $giver->mission}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Sanctuary:</strong>
                                    <input type="number" name="sanctuary" class="form-control" placeholder="0.00" value="{{ $giver->sanctuary }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Love Gift:</strong>
                                    <input type="number" name="love_gift" class="form-control" placeholder="0.00" value="{{ $giver->love_gift }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Dance Ministry:</strong>
                                    <input type="text" name="dance_ministry" class="form-control" placeholder="0.00" value="{{ $giver->dance_ministry }}">
                                </div>
                            </div>

                            <div class="my-2">
                                <p>Cash Count</p>
                            </div>
                            <!--  Cash count fields -->
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 1,000:</strong>
                                    <input type="number" name="cc_1000" class="form-control" value="{{ $giver->cc_1000 }}" placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 500:</strong>
                                    <input type="number" name="cc_500" class="form-control" value="{{ $giver->cc_1000 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 200:</strong>
                                    <input type="number" name="cc_200" class="form-control" value="{{ $giver->cc_500 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 100:</strong>
                                    <input type="number" name="cc_100" class="form-control" value="{{ $giver->cc_100 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 50:</strong>
                                    <input type="number" name="cc_50" class="form-control" value="{{ $giver->cc_50 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 20:</strong>
                                    <input type="number" name="cc_20" class="form-control" value="{{ $giver->cc_20 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 10:</strong>
                                    <input type="number" name="cc_10" class="form-control" value="{{ $giver->cc_10 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 5:</strong>
                                    <input type="number" name="cc_5" class="form-control" value="{{ $giver->cc_5 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>Php 1:</strong>
                                    <input type="number" name="cc_1" class="form-control" value="{{ $giver->cc_1 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.25:</strong>
                                    <input type="number" name="cc_0_25" class="form-control" value="{{ $giver->cc_0_25 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.10:</strong>
                                    <input type="number" name="cc_0_1" class="form-control" value="{{ $giver->cc_0_1 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.05:</strong>
                                    <input type="number" name="cc_0_05" class="form-control" value="{{ $giver->cc_0_05 }}"placeholder="0">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <strong>¢ 0.01:</strong>
                                    <input type="number" name="cc_0_01" class="form-control" value="{{ $giver->cc_0_01 }}"placeholder="0">
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
