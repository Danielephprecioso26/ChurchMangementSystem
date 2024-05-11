    @extends('layouts.user_type.auth')

    @section('content')
        <div>
            <div class="container-fluid py-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h2 class="mb-0">Bin</h2>
                    </div>
                    <div class="card-body px-3">
                        @if ($deletedAllowances->isEmpty())
                            <p>No deleted records found.</p>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Allowance For</th>
                                        <th>Name</th>
                                        <th>Allowance</th>
                                        <th>Deleted At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deletedAllowances as $deletedAllowance)
                                        <tr>
                                            <td>{{ $deletedAllowance->allownce_to }}</td>
                                            <td>{{ $deletedAllowance->name }}</td>
                                            <td>Php {{ $deletedAllowance->allowance }}</td>
                                            <td>{{ $deletedAllowance->deleted_at }}</td>
                                            <td>
                                                <form action="{{ route('allowances.restore', $deletedAllowance->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-primary">Restore</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
