@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">Allowance Management</h2>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="btn btn-success" href="{{ route('weekly_allowance.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add New Allowance Record">Add New</a>
                    </div>
                    <div class="pull-right">
                        <form action="{{ route('weekly_allowance.search') }}" method="GET" class="form-inline">
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
            </div>
            <div class="card-body px-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Allowance For</th>
                            <th>Name</th>
                            <th>Allowance</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($weeklyAllowances as $weeklyAllowance)
                        <tr>
                            <td>
                                @if($weeklyAllowance->allownce_to === 'rep')
                                    Ministry Food
                                @elseif ($weeklyAllowance->allownce_to == 'worker_allowance')
                                    Worker Allowance
                                @elseif ($weeklyAllowance->allownce_to == 'follow-up')
                                    Follow-up
                                @endif
                            </td>
                            <td>{{ $weeklyAllowance->name }}</td>
                            <td>Php {{ $weeklyAllowance->allowance }}</td>
                            <td>
                                <a href="{{ route('weekly_allowance.show', $weeklyAllowance) }}" class="btn btn-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('weekly_allowance.edit', $weeklyAllowance) }}" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('weekly_allowance.destroy', $weeklyAllowance) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
