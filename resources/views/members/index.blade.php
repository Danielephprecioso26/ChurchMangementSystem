@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Membership Management') }}</h2>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('member.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Member">Add New</a>
                </div>
                <div class="pull-right">
                    <form action="{{ route('member.search') }}" method="GET" class="form-inline">
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
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Address</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($members as $member)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $member->member_name }} ({{$member->nickname}})</td>
                            <td>{{$member->sex}}</td>
                            <td>{{ $member->address }}</td>
                            <td>
                                <form action="{{ route('member.destroy',$member->id) }}" method="POST">
                
                                    <a class="btn btn-info" href="{{ route('member.show',$member->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    
                                    <a class="btn btn-primary" href="{{ route('member.edit',$member->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></button></form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                
                    {!! $members->links() !!}
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection
