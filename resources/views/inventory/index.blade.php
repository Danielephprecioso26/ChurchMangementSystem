@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Inventory Management') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('inventory.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Purchased Item">Add New</a>
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
                            <th>Product</th>
                            <th>Category</th>
                            <th>Date Purchased</th>
                            <th>Number of Units</th>
                            <th>Unit Cost</th>
                            <th>Total Cost</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($inventory as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->inventName }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ date('F d, Y', strtotime($product->date_purchased)) }}</td>
                            <td>{{$product->item_num}}</td>
                            <td>Php {{$product->unit_cost}}</td>
                            <td>Php {{$product->total_cost}}</td>
                            <td>
                                <form action="{{ route('inventory.destroy',$product->id) }}" method="POST">
                
                                    <a class="btn btn-info" href="{{ route('inventory.show',$product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    
                                    <a class="btn btn-primary" href="{{ route('inventory.edit',$product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></button> </form>
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
