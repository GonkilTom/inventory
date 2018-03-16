@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Managing Stock</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <h4><a href="#">Manage Additions</a></h4>
                    </div>
                    <hr>
                    <div class="row">
                        <h4><a href="#">Not Sure yet.</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
