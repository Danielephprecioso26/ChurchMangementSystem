

@extends('layouts.user_type.auth')

@section('content')
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            background-color: lightgray;
        }
    </style>
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('logActivities') }}</h2>
           
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                
                @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Subject</th>
                <th>URL</th>
                <th>Method</th>
                <th>IP</th>
                <th>Agent</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logActivities as $logActivity)
                <tr>
                    <td>{{ $logActivity->id }}</td>
                    <td>{{ $logActivity->subject }}</td>
                    <td>{{ $logActivity->url }}</td>
                    <td>{{ $logActivity->method }}</td>
                    <td>{{ $logActivity->ip }}</td>
                    <td>{{ $logActivity->agent }}</td>
                    <td>{{ $logActivity->user_id }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
                
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
@push('dashboard')

@endpush
