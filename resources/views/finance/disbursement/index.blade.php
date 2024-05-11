@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Disbursement Management') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('disbursement.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Disbursement Record">Add New</a>
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
                            <th>Account Name</th>
                            <th>Particulars</th>
                            <th>Unit Price</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($disbursements as $disbursement)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $disbursement->account_name }}</td>
                            <td>{{ $disbursement->particulars }}</td>
                            <td>Php {{ $disbursement->unit_price }}</td>
                            <td>
                                <form action="{{ route('disbursement.destroy', $disbursement->id) }}" method="POST">
                
                    
                                    <a class="btn btn-primary" href="{{ route('disbursement.edit',$disbursement->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></button> </form>
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
@push('index')

@endpush
