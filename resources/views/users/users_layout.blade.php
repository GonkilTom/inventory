{{-- @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage users</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        <h4><a href="{{ route('users.create') }}">Create User</a></h4>
                        <hr>
                        <h4><a href="{{ route('display_users') }}">View Users</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('content')
  <h1>Users Management</h1>
  <div class="well">
    <h3><a href="{{ route('users.create') }}">Create User</a></h3><hr>
    <h3><a href="{{ route('display_users') }}">View Users</a></h3>
  </div>

@endsection --}} --}}
