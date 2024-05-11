@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('CASH VOUCHER') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('request.index', $disbursementRequest->id) }}"> Back</a>
                </div>
                <div class="text-end m-3">
                    <button class="border-0 bg-transparent" onclick="printCardBody()">
                        <img src="{{ asset('assets/img/print.png') }}" style="height: 60px; width: 60px;" alt="print">
                    </button>
                </div>

            </div>
            <div class="card-body pt-4 p-3">
                <div id="printMe">
                @foreach($weeklyAllowances as $wl)
               
                <table class="table table-bordered" style="border: 1px solid black;">
                <tr>
                    <td colspan="8" class="text-center" style="height: 100px;">
                        <div class="row align-items-left">
                            <div class="col-2 ml-3">
                                <a href="{{ route('dashboard') }}">
                                    <img src="{{ asset('assets/img/logo.png') }}" style="height: 50px; width: 50px;" alt="Logo">
                                </a>
                            </div>
                            <div class="col-10">
                                <h5>Jesus Loves You City Church - Butuan City<br>CASH VOUCHER</h5>
                            </div>
                        </div>
                    </td>
                </tr>

                    <tr>
                        <td colspan="6">Paid to: <b>{{$wl->name}}</b></td>
                        <td colspan="2">CV No.: <b>
                                @foreach($vouchers as $voucher)
                                        @if($voucher->allowance_id === $wl->id)
                                            {{ $voucher->voucher_number }}
                                        @endif
                                    @endforeach
                        </b></td>
                    </tr>
                    <tr>
                    <td colspan="6">Amount: <b>{{ \App\Helpers\NumberToWordsHelper::convertToWords($wl->allowance) }}</b></td>

                        <td colspan="2">Date: <b>
                        @foreach($disbursements as $d)
                                        @if($d->id === $wl->id)
                                            {{ $d->date }}
                                        @endif
                                    @endforeach
                        </b></td>
                    </tr>
                    <tr>
                        <td colspan="4">Account Code</td>
                        <td>Account Titles</td>
                        <td>Fund Source</td>
                        <td>Debit</td>
                        <td>Credit</td>
                    </tr>
                    <tr>
                        <td rowspan="2" colspan="5" style="height: 30px;"><b>ALLOWANCE</b></td>
                        <td rowspan="2"> <b></b>GF</td>
                        <td rowspan="2"></td>
                        <td rowspan=""> <b><h6>{{ $wl->allowance }}</h6></b></td>
                    </tr>
                    <tr></tr>
                    <tr>
                    <td colspan="8" style="text-align: right;">TOTAL: <b>{{ $wl->allowance }}</b></td>
                        
                    </tr>
                    <tr>
                        <td rowspan="2" style="height: 50px;" colspan="3"><b> 
                        <div class="row">
                        <div class="col-md-4">
                            <b>Prepared By:
                                <br>
                                <br>
                                Wilson Aldover Jr
                                <hr class="w-100">
                                Church Staff
                            </b>
                        </div>
                        </td>
                        <td colspan="3">
                        <div class="col-md-4">
                        <b>Appreved By:
                                <br>
                                <br>
                                January Jayoma / Ronald Dollente
                                <hr class="w-100">
                               Deacon
                            </b>
                        </div>
                        </td>
                        <td colspan="2">
                        <div class="col-md-4">
                        <b>Received By:
                                <br>
                                <br>
                                {{$wl->name}}
                                <hr class="w-100">
                               
                            </b>
                        </div>
                        </td>
                    </div>

                      

                    </tr>

                    <tr></tr>
                </table>
                <hr>
            @endforeach

            @foreach($disbursements as $dis)
            <hr>
            <table class="table table-bordered" style="border: 1px solid black;">
                    <tr>
                            <td colspan="8" class="text-center" style="height: 100px;">
                                <div class="row align-items-left">
                                    <div class="col-2 ml-3">
                                        <a href="{{ route('dashboard') }}">
                                            <img src="{{ asset('assets/img/logo.png') }}" style="height: 50px; width: 50px;" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="col-10">
                                        <h2>Jesus Loves You City Church - Butuan City<br>CASH VOUCHER</h2>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <tr>
                        <td colspan="6">Paid to: <b>{{$dis->released_to}}</b></td>
                        <td colspan="2">CV No.: <b>
                                @foreach($vouchers as $voucher)
                                            @if($voucher->dis_id === $dis->id)
                                                {{ $voucher->voucher_number }}
                                            @endif
                                        @endforeach
                        </b></td>
                    </tr>
                    <tr>
                    <td colspan="6">Amount: <b>{{ \App\Helpers\NumberToWordsHelper::convertToWords($dis->unit_price) }}</b></td>

                        <td colspan="2">Date: <b></b></td>
                    </tr>
                    <tr>
                        <td colspan="4">Account Code</td>
                        <td>Account Titles</td>
                        <td>Fund Source: <b></b></td>
                        <td>Debit:</td>
                        <td>Credit:</td>
                    </tr>
                    <tr>
                        <td rowspan="2" colspan="5" style="height: 0px;"><b> {{$dis->particulars}}</b></td>
                        <td rowspan="2"><b>{{$dis->fund_source}}</b></td>
                        <td rowspan="2"></td>
                        <td rowspan="2"> <b><h6>{{ $dis->unit_price }}</h6></b></td>
                    </tr>
                    <tr>
                    
                    </tr>
                    <tr>
                        <td colspan="6" class="text-right">TOTAL: <b>{{ $dis->unit_price }}</b></td>
                        <td colspan="2"><b></b></td>
                    </tr>
                    <tr>
                        <td rowspan="2" style="height: 50px;" colspan="3"><b> 
                        <div class="row">
                        <div class="col-md-4">
                            <b>Prepared By:
                                <br>
                                <br>
                                Wilson Aldover Jr
                                <hr class="w-100">
                                Church Staff
                            </b>
                        </div>
                        </td>
                        <td colspan="3">
                        <div class="col-md-4">
                        <b>Appreved By:
                                <br>
                                <br>
                                January Jayoma / Ronald Dollente
                                <hr class="w-100">
                               Deacon
                            </b>
                        </div>
                        </td>
                        <td colspan="2">
                        <div class="col-md-4">
                        <b>Received By:
                                <br>
                                <br>
                                {{$wl->name}}
                                <hr class="w-100">
                               
                            </b>
                        </div>
                        </td>
                    </div>

                      

                    </tr>
                    <tr></tr>
                    
                </table>
            @endforeach

            

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('dashboard')

@endpush