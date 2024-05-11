@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Disbursement Request Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('request.index') }}"> Back</a>
                    <a class="btn btn-primary" href="{{ route('vouchers.index', $disbursementRequest->id) }}"> VOUCHER</a>
                </div>
                <div class="text-end p-3">
                    <button class="border-0 bg-transparent" onclick="printCardBody()">
                        <img src="{{ asset('assets/img/print.png') }}" style="height: 60px; width: 60px;" alt="print">
                    </button>
                </div>


            </div>
            <div class="card-body pt-4 p-3">
                <div id="printMe">
                    <table class="table table-bordered">
                        <tr class="text-bolder">
                            <td colspan="6" class="text-center"  style="background-color: ; color: white; height: 80px;"><h5>Church Area: JLYCC BUTUAN</h5></td>
                            <td colspan="2" >8:05 PM</td>
                        </tr>
                        <tr style="background-color: #f20a0a; color: white; height: 30px;">
                            <td>Account name</td>
                            <td>released_to</td>
                            <td>Particulars</td>
                            <td>Fund</td>
                            <td>Unit price</td>
                            <td>Amount</td>
                            <td>Amount</td>
                            <td>voucher_number</td>
                        </tr>
                        <tr>
                            <td rowspan="{{ count($weeklyAllowances) }}">Allowance</td>
                            @foreach($weeklyAllowances as $weeklyAllowance)
                                <td>{{ $weeklyAllowance->name }}</td>
                                <td>{{ $weeklyAllowance->allownce_to }}</td>
                                <td>GF</td>
                                <td>{{ $weeklyAllowance->allowance }}</td>
                                <td>{{ $weeklyAllowance->allowance }}</td>
                                <td>{{ $weeklyAllowance->allowance }}</td>
                                <td>
                                    @foreach($vouchers as $voucher)
                                        @if($voucher->allowance_id === $weeklyAllowance->id)
                                            {{ $voucher->voucher_number }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                        @endforeach
                       
                        @foreach($disbursements as $dis)
                            <tr>
                            @if($dis->id === 1)
                            <td rowspan="{{ count($disbursements) }}">Love Gift</td>
                            @endif
                            <td>{{ $dis->released_to }}</td>
                            <td>{{ $dis->particulars }}</td>
                            <td>{{ $dis->fund_source }}</td>
                            <td>{{ $dis->unit_price }}</td>
                            <td>{{ $dis->unit_price }}</td>
                            <td>{{ $dis->unit_price }}</td>
                            <td>
                                @foreach($vouchers as $voucher)
                                    @if($voucher->dis_id === $dis->id)
                                        {{ $voucher->voucher_number }}
                                    @endif
                                @endforeach
                            </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td rowspan="2">WORDS: </td>
                            <td colspan="2" rowspan="2"> <b>{{ \App\Helpers\NumberToWordsHelper::convertToWords($Total) }}</b></td>
                            <td colspan="3" rowspan="2">Verified By: <br>January m. Jayoma / Ronald Dollente</td>
                            <td colspan="2" rowspan="2"> Total: <br> <b>{{ $Total }}</b></td>
                            </tr>

                            <tr>

                            </tr>

                            <tr>
                            <td colspan="3" rowspan="2">Prepared By:    Wilson Aldover </td>
                            <td colspan="3" rowspan="2">Pastoral Approvel: <br> Ptr. Ronnel Giray</td>
                            <td colspan="2" rowspan="3"></td>
                            </tr>

                            <tr>
  
                            </tr>

                            <tr>
                            <td colspan="3">Date Requested: </td>
                            <td colspan="3"> Date</td>
                            </tr>

                            <tr>
                       
                            </tr>

                        <tr></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('dashboard')

@endpush
