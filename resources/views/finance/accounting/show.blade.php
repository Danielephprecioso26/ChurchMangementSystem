@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Account Classification Summary') }}</h2>
                <div class="pull-left ">
                    <a class="btn btn-primary" href="{{ route('accounting.index') }}"> Back</a>
                </div>
                <div class="text-end p-3">
                    <button class="border-0 bg-transparent" onclick="printCardBody()">
                        <img src="{{ asset('assets/img/print.png') }}" style="height: 60px; width: 60px;" alt="print">
                    </button>
                </div>
            </div>
            <div class="card-body pt-4 p-3" id="printMe">
                <div>
                    <table class="table table-bordered">
                        <tr class="text-bolder">
                            <td rowspan="2" colspan="3" class="text-center">Church Area: {{ $church->church_area }}</td>
                            <td>Date : </td>
                            <td rowspan="2" colspan="2" class="text-center">Sunday Service</td>
                            <td rowspan="2">Time: </td>
                            <td rowspan="2"></td>
                        </tr>
                        <tr>
                            <td class="text-bolder">{{ $date }}</td>
                        </tr>
                        <tr>
                            <td class="text-bolder">Philippine Currency</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="text-center text-bolder">
                            <td>PHP</td>
                            <td>Qty.</td>
                            <td>Amount</td>
                            <td>Particulars</td>
                            <td></td>
                            <td>Total Amount</td>
                            <td colspan="2">Fund Summary</td>
                        </tr>
                        <tr>
                            <td>1,000.00</td>
                            <td>{{ $cashCount->cc_1000 }}</td>
                            <td>{{ $cc_1000_t }}</td>
                            <td class="text-bolder">Tithes</td>
                            <td></td>
                            <td> {{ $givers[0]->total_tithe }} </td>
                            <td class="text-bolder">Total Cash</td>
                            <td> {{ $fund->fund }} </td>
                        </tr>
                        <tr>
                            <td>500</td>
                            <td>{{ $cashCount->cc_500 }}</td>
                            <td>{{ $cc_500_t }}</td>
                            <td class="text-bolder">Offering</td>
                            <td></td>
                            <td> {{ $givers[0]->total_offering }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>200</td>
                            <td>{{ $cashCount->cc_200 }}</td>
                            <td>{{ $cc_200_t }}</td>
                            <td class="text-bolder">Missions</td>
                            <td></td>
                            <td> {{ $givers[0]->total_mission }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>{{ $cashCount->cc_100 }}</td>
                            <td>{{ $cc_100_t }}</td>
                            <td class="text-bolder">  Sanctuary  </td>
                            <td></td>
                            <td> {{ $givers[0]->total_sanctuary }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>{{ $cashCount->cc_50 }}</td>
                            <td>{{ $cc_50_t }}</td>
                            <td class="text-bolder">  First Fruit  </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>{{ $cashCount->cc_20 }}</td>
                            <td>{{ $cc_20_t }}</td>
                            <td class="text-bolder">Anniversary</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>{{ $cashCount->cc_10 }}</td>
                            <td>{{ $cc_10_t }}</td>
                            <td class="text-bolder">GateKeepers</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>{{ $cashCount->cc_5 }}</td>
                            <td>{{ $cc_5_t }}</td>
                            <td class="text-bolder">Dance</td>
                            <td></td>
                            <td>{{ $givers[0]->total_dance_ministry }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>{{ $cashCount->cc_1 }}</td>
                            <td>{{ $cc_1_t }}</td>
                            <td class="text-bolder">Youth</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>0.25</td>
                            <td>{{ $cashCount->cc_0_25 }}</td>
                            <td>{{ $cc_0_25_t }}</td>
                            <td rowspan="2" class="text-bolder">Love Gift</td>
                            <td class="text-bolder"></td>
                            <td> {{ $givers[0]->total_love_gift }} </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>0.1</td>
                            <td>{{ $cashCount->cc_0_1 }}</td>
                            <td>{{ $cc_0_1_t }}</td>
                            <td class="text-bolder"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>0.05</td>
                            <td>{{ $cashCount->cc_0_05 }}</td>
                            <td>{{ $cc_0_05_t }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>0.01</td>
                            <td>{{ $cashCount->cc_0_01 }}</td>
                            <td>{{ $cc_0_01_t }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-bolder">Grand Total</td>
                            <td></td>
                            <td> {{ $cashCount->total }} </td>
                            <td class="text-bolder">Total Amount</td>
                            <td></td>
                            <td> {{ $fund->fund }} </td>
                            <td class="text-bolder">Total</td>
                            <td> {{ $fund->fund }}</td>
                        </tr>
                        <tr>
                            
                            <td></td>
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
