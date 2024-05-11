@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Disbursement Record Information') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('disbursement.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>

                    <table class="table table-bordered">
                        <tr>
                            <td colspan="8" class="text-center">Jesus Loves You City Church - Butuan City <br>CASH VOUCHER</td>
                        <tr>
                            <td colspan="6">Paid to: <b>{{ $disbursement->released_to}}<b></td>
                            <td colspan="2">CV No.: <b>{{ $disbursement->voucher_number }}</b></td>
                        </tr>
                        <tr>
                            <td colspan="6">Amount: <b>{{ $disbursement->unit_price}}<b></td>
                            <td colspan="2">Date: <b>{{ $disbursement->date }}</b></td>
                        </tr>
                        <tr>
                            
                            <td colspan="4">Account Code</td>
                            <td>Account Titles</td>
                            <td>Fund Source</td>
                            <td>Debit</td>
                            <td>Credit</td>
                        </tr>
                        <tr>
                            <td rowspan="2" colspan="5"><b>{{ $disbursement->particulars }}</b></td>
                            <td rowspan="2" ><b>{{ $disbursement->fund_source }}</b></td>
                            <td rowspan="2" ></td>
                            <td rowspan="2" ></td>
                        </tr>
                        <tr>
                            
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">TOTAL</td>
                            <td colspan="2"><b>{{ $disbursement->unit_price }}</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection
@push('dashboard')

@endpush
