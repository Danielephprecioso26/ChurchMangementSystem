@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h2 class="mb-0">{{ __('Counting Service Giver Record') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-5 m-2">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('giver.create', ['date' => $countingService->date]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Giver Record">Add New</a>
                </div>
            </div>
            <div class="col-md-6 p-2 m-2">
                <div class="pull-right">
                    <a href="{{ route('finance.counting_services.print', $get_id) }}" class="btn btn-secondary">Print</a>
                </div>
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
                        <th>Giver Name</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($givers as $giver)
                        <tr>
                            <td>{{ $givers->firstItem() + $loop->index }}</td>
                            <td>{{ $giver->giver_name }}</td>
                            <td>{{ date('F d, Y', strtotime($giver->date)) }}</td>
                            <td>Php {{ $giver->total }}</td>
                            <td>
                                <form action="{{ route('giver.destroy', $giver->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('giver.show',$giver->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('giver.edit',$giver->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr></tr>
                </table>
                
                {{ $givers->links() }}
            </div>        
        </div>
    </div>
</div>

@endsection
