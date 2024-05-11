@extends('layouts.user_type.auth')

@section('content')
<div>
               
    <div class="container-fluid py-4">
        
        <div class="card">
        <div class="text-end p-2">
                    <button class="border-0 bg-transparent" onclick="printCardBody()">
                       <img src="{{ asset('assets/img/print.png') }}" style="height: 60px; width: 60px;" alt="print">
                    </button>
                </div>
    <div  id="printMe">
            <div class="card-header pb-0 px-3 text-center">
                <h2 class="mb-0">{{ __('JESUS LOVES YOU CITY CHURCH BUTUAN') }}</h2>
                <h4>Givers Record</h4>
                <h4>{{$formattedDate}}</h4>

              
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                   
                
                <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Giver Name</th>
                            <th>Tithe</th>
                            <th>Offering</th>
                            <th>Mission</th>
                            <th>Sanctuary</th>
                            <th>Love Gift</th>
                            <th>Dance Ministry</th>
                            <th>Total</th>
                        </tr>
                        @foreach($givers as $giver)
                        <tr>
                            <td></td>
                            <td>{{ $giver->giver_name }}</td>
                            <td>{{ $giver->tithe }}</td>
                            <td>{{ $giver->offering }}</td>
                            <td>{{ $giver->mission }}</td>
                            <td>{{ $giver->sanctuary }}</td>
                            <td>{{ $giver->love_gift }}</td>
                            <td>{{ $giver->dance_ministry }}</td>
                            <td>{{ $giver->total }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">Total</td>
                            <td>{{ $givers->sum('tithe') }}</td>
                            <td>{{ $givers->sum('offering') }}</td>
                            <td>{{ $givers->sum('mission') }}</td>
                            <td>{{ $givers->sum('sanctuary') }}</td>
                            <td>{{ $givers->sum('love_gift') }}</td>
                            <td>{{ $givers->sum('dance_ministry') }}</td>
                            <td>{{ $givers->sum('total') }}</td>
                        </tr>
                        <tr></tr>
                    </table>

                
                </div>        
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('index')

@endpush
