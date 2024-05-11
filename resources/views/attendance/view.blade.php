@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Attendance View') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('inventory.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Purchased Item">Add New</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Event</th>
                            <th>Member Names</th>
                        </tr>
                        @foreach($attendances as $attendance)
                            <tr>
                                <td>{{ $attendance->title }}</td>
                                <td>
                                    {!! nl2br(e($attendance->member_info)) !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>     
            </div>
        </div>
    </div>
</div>

@endsection
@push('view')

@endpush