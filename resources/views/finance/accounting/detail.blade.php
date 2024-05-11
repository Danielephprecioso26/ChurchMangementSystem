@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Monthly Report') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('accounting.report') }}"> Back</a> 
                </div>
                <div class="text-end p-2">
                    <button class="border-0 bg-transparent" onclick="printCardBody()">
                       <img src="{{ asset('assets/img/print.png') }}" style="height: 60px; width: 60px;" alt="print">
                    </button>
                </div>
            </div>
            <div class="card-body pt-4 p-3" id="printMe">
                <div>
                    <table class="table table-bordered">
                        <tr style="background-color: #f5d142; color: white;">
                            <td colspan="4" class="text-center" style="height: 100px;">
                                <h2>JESUS LOVES YOU CITY CHURCH - BUTUAN</h2>
                                <br>
                                <h3>Report</h3>
                            </td>
                        </tr>

                        <tr>                           
                            <td></td>
                            <td colspan="3"><b>Month : {{ $month }}</b></td>
                        </tr>
                        
                        <tr>
                            <td>Service</td>
                             <td>Allowance</td>
                            <td>Disburse</td>
                            <td>Balance</td>
                            
                        </tr>

                        <tr style="background-color: #f542a4; color: white;">
                            <td>Total Tithes</td>
                            <td></td>
                            <td></td>
                            <td>{{$sumTithes}}</td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr style="background-color: #f542a4; color: white;">
                            <td>TOTAL OFFERING</td>
                            <td></td>
                            <td></td>
                            <td>{{$sumOffering}}</td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr style="background-color: #f542a4; color: white;">
                            <td>General Fund</td>
                            <td></td>
                            <td></td>
                            <td>{{ $sumTithes + $sumOffering }}</td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                        </tr>

                        <tr style="background-color: #f542a4; color: white;">
                            <td>MINISTRIES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Mission</td>
                            <td></td>
                            <td></td>
                            <td>{{$sumMission}}</td>
                        </tr>

                        <tr>
                            <td>Children's church</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>LeadTakers</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Dance</td>
                            <td></td>
                            <td></td>
                            <td>{{$sumDanceMinistry}}</td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                        </tr>

                        <tr style="background-color: #f542a4; color: white;">
                            <td>JLYCC Butuan Project Sanctuary</td>
                            <td></td>
                            <td></td>
                            <td>{{$sumSanctuary}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>

                        <tr style="background-color: #f542a4; color: white;">
                            <td>Love Gift:</td>
                            <td></td>
                            <td>{{$sumLoveGift}}</td>
                            <td>{{$sumLoveGift}}</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>

                        <tr style="background-color: #f542a4; color: white;">
                            <td colspan="4">Workers Allowance & Compentions:</td>
                        </tr>

                        @foreach($weeklyAllowances as $weeklyAllowance)
                            @if($weeklyAllowance->allownce_to === 'worker_allowance')
                                <tr>
                                    <td>{{$weeklyAllowance->name}}</td>
                                    <td>{{$weeklyAllowance->allowance * 4}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        @endforeach

                        <tr style="background-color: #f542a4; color: white;">
                            <td colspan="4">Follow Up and Visitation (Transportation)</td>
                        </tr>

                        @foreach($weeklyAllowances as $weeklyAllowance)
                            @if($weeklyAllowance->allownce_to === 'Follow_up')
                                <tr>
                                    <td>{{$weeklyAllowance->name}}</td>
                                    <td>{{$weeklyAllowance->allowance * 4}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        @endforeach

                        <tr style="background-color: #f542a4; color: white;">
                            <td colspan="4">Representation</td>
  
                        </tr>

                        @foreach($weeklyAllowances as $weeklyAllowance)
                            @if($weeklyAllowance->allownce_to === 'rep')
                                <tr>
                                    <td>{{$weeklyAllowance->name}}</td>
                                    <td>{{$weeklyAllowance->allowance * 4}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        @endforeach

                        <tr style="background-color: #f542a4; color: white;">
                            <td colspan="2">Total Monthly Disbursement & Giving</td>
                            <td> {{$monthlyDisbursement}}</td>
                           
                            <td>{{$MonthlyGiving}}</td>

                        </tr>

                        <tr style="background-color: red; color: white;">
                            <td colspan="3">Overall Balance</td>
                           
                            <td><strong>{{$funds }}</strong></td>

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
