@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                          <div class="wrapper">
                            <a href="{{ Route('sales.index') }}" class="sell">Sell</a>
                            <a href="{{ Route('fulllist.display') }}" class="display_stock">Display Stock</a>
                            <a href="#" class="sold">Sold</a>
                            <a href="{{ Route('stockmgt') }}" class="stock_management">Stock Management</a>
                            <a href="{{ route('categories.index')  }}" class="add_to_stock">Add To Stock</a>
                            <a href="{{ route ('users.index') }}" class="user_management">Manage Users</a>

                          </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
