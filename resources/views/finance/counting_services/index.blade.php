@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h2 class="mb-0">{{ __('Counting Services') }}</h2>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('finance.counting_services.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Counting Service">Add New</a>
            </div>
            <div class="pull-right">
                <form action="{{ route('finance.counting_services.index') }}" method="GET" class="form-inline">
                    <div class="form-group row">
                        <div class="col-8">
                            <input type="text" class="form-control" name="search" placeholder="Search" value="{{ $search }}">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body pt-4 p-3">
            @if ($countingServices->isEmpty())
                <p>No counting services found.</p>
            @else
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Type of Services</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($countingServices as $countingService)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $countingService->type_service }}</td>
                            <td>{{ $countingService->date }}</td>
                            <td>{{ $countingService->time }}</td>
                            <td>
                                <form action="{{ route('finance.counting_services.destroy', $countingService->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('finance.counting_services.show', $countingService->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('finance.counting_services.edit', $countingService->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></button>  </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr></tr>
                </table>
            @endif
        </div>
    </div>
</div>

@endsection

@push('index')

@endpush
