@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Disbursement Request Management') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('request.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Disbursement Request">Add New</a>
                </div>
                <div class="pull-right">
                    <form action="" method="GET" class="form-inline">
                        <div class="form-group row">
                            <div class="col-8">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                                
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="card-body pt-4 p-3">
                <div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Request Date</th>
                            <th>Prepared By</th>
                            <th>Verified By</th>
                            <th>Released By</th>
                            <th>Approved By</th>
                            <th>Approved Date</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($disbursement_requests as $disbursement_request)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                @if ($disbursement_request->request_date)
                                    {{ date('F d, Y', strtotime($disbursement_request->request_date)) }}
                                @endif
                            </td>
                            <td>{{ $disbursement_request->prepared_by }}</td>
                            <td>@if ($disbursement_request->verified_by) Php {{ $disbursement_request->verified_by }} @endif</td>
                            <td>@if ($disbursement_request->released_by) Php {{ $disbursement_request->released_by }} @endif</td>
                            <td>@if ($disbursement_request->approved_by) Php {{ $disbursement_request->approved_by }} @endif</td>
                            <td>
                                @if ($disbursement_request->approved_date)
                                    {{ date('F d, Y', strtotime($disbursement_request->approved_date)) }}</td>
                                @endif
                            <td>
                                <form action="{{ route('request.destroy', $disbursement_request->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('request.show', $disbursement_request->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('request.edit', $disbursement_request->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></button></form>
                            </td>
                        </tr>
                        <tr></tr>
                        @endforeach
                    </table>
                    {{ $disbursement_requests->links() }}
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection
@push('index')

@endpush
