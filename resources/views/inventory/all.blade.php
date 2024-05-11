@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Inventory Management - All Items') }}</h2>
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
                            <th>Name</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($inventory as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->inventName }}</td>
                            <td>Purchased</td>
                            <td>{{ date('F d, Y', strtotime($product->date_purchased)) }}</td>
                            <td>Php {{$product->total_cost}}</td>
                            <td>
                                <form action="{{ route('inventory.destroy',$product->id) }}" method="POST">
                
                                    <a class="btn btn-info" href="{{ route('inventory.show',$product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    
                                    <a class="btn btn-primary" href="{{ route('inventory.edit',$product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @foreach ($donation as $donation)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $donation->donation_name }}</td>
                            <td>Donation</td>
                            <td>{{ date('F d, Y', strtotime($donation->date)) }}</td>
                            <td>N/A</td>
                            <td>
                                <form action="{{ route('donation.destroy',$donation->id) }}" method="POST">
                
                                    <a class="btn btn-info" href="{{ route('donation.show',$donation->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    
                                    <a class="btn btn-primary" href="{{ route('donation.edit',$donation->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                
                    {!! $inventory->links() !!}
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
@push('dashboard')

@endpush
