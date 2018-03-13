@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adding to Stock</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        <h4><a href="{{ route('categories.create') }}">Category</a></h4>
                        <hr>
                        <h4><a href="{{ route('items.index') }}">Items</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
