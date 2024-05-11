@extends('layouts.user_type.auth')

@section('content')
<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h2 class="mb-0">{{ __('Monthly Reports') }}</h2>
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
                            <th>Month</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($months as $month)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $month }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('accounting.detail', ['month' => $month]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></a>
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
