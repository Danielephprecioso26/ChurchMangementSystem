@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Giver Record Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('finance.counting_services.goBack', $giver->counting_services_id ) }}"> Back</a>
                </div>

            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Giver name:</strong>
                                <input type="text" class="form-control" value="{{ $giver->giver_name }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Date:</strong>
                                <input type="text" class="form-control" value="{{ date('F d, Y', strtotime($giver->date)) }}" readonly>
                            </div>
                        </div>
                        @if ($giver->tithe)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Tithe:</strong>
                                <input type="text" class="form-control" value="Php {{ $giver->tithe }}" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->offering)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Offering:</strong>
                                <input type="text" class="form-control" value="Php {{ $giver->offering }}" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->mission)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Mission:</strong>
                                <input type="text" class="form-control" value="Php {{ $giver->mission }}" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->sanctuary)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Sanctuary:</strong>
                                <input type="text" class="form-control" value="Php {{ $giver->sanctuary }}" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->love_gift)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Love Gift:</strong>
                                <input type="text" class="form-control" value="Php {{ $giver->love_gift }}" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->dance_ministry)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                            <div class="form-group">
                                <strong>Love Gift:</strong>
                                <input type="text" class="form-control" value="Php {{ $giver->dance_ministry }}" readonly>
                            </div>
                        </div>
                        @endif
                        <div class="my-2">
                            <p>Cash Count</p>
                        </div>
                        <!--  Cash count fields -->
                        @if ($giver->cc_1000)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 1,000:</strong>
                                <input type="number" name="cc_1000" class="form-control" value="{{ $giver->cc_1000 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_1000)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 500:</strong>
                                <input type="number" name="cc_500" class="form-control" value="{{ $giver->cc_500 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_500)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 200:</strong>
                                <input type="number" name="cc_200" class="form-control" value="{{ $giver->cc_400 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_100)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 100:</strong>
                                <input type="number" name="cc_100" class="form-control" value="{{ $giver->cc_100 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_50)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 50:</strong>
                                <input type="number" name="cc_50" class="form-control" value="{{ $giver->cc_50 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_20)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 20:</strong>
                                <input type="number" name="cc_20" class="form-control" value="{{ $giver->cc_20 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_10)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 10:</strong>
                                <input type="number" name="cc_10" class="form-control" value="{{ $giver->cc_10 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_5)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 5:</strong>
                                <input type="number" name="cc_5" class="form-control" value="{{ $giver->cc_5 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_1)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>Php 1:</strong>
                                <input type="number" name="cc_1" class="form-control" value="{{ $giver->cc_1 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_0_25)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>¢ 0.25:</strong>
                                <input type="number" name="cc_0_25" class="form-control" value="{{ $giver->cc_0_25 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_0_1)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>¢ 0.10:</strong>
                                <input type="number" name="cc_0_1" class="form-control" value="{{ $giver->cc_0_1 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_0_05)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>¢ 0.05:</strong>
                                <input type="number" name="cc_0_05" class="form-control" value="{{ $giver->cc_0_05 }}" placeholder="0" readonly>
                            </div>
                        </div>
                        @endif
                        @if ($giver->cc_0_01)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <strong>¢ 0.01:</strong>
                                <input type="number" name="cc_0_01" class="form-control" value="{{ $giver->cc_0_01 }}" placeholder="0" readonly>
                            </div>
                        </div>   
                        @endif                 
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection
@push('dashboard')

@endpush
