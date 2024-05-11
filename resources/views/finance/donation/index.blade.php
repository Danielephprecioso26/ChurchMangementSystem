@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Donation Management') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('donation.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Donation Record">Add New</a>
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
                            <th>Donor Name</th>
                            <th>Date</th>
                            <th>Donation Type</th>
                            <th>Donation Name <br><small>(for non-monetary donations)</small></th>
                            <th>Amount <br><small>(for monetary donations)</small></th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($donations as $donation)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $donation->donor_name }}</td>
                            <td>{{ date('F d, Y', strtotime($donation->date)) }}</td>
                            <td>{{ $donation->donation_type }}</td>
                            <td>{{ $donation->donation_name }}</td>
                            <td>
                                @if ($donation->amount)
                                    Php {{ $donation->amount }}
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('donation.destroy',$donation->id) }}" method="POST">
                
                                    <a class="btn btn-info" href="{{ route('donation.show',$donation->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    
                                    <a class="btn btn-primary" href="{{ route('donation.edit',$donation->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                
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
