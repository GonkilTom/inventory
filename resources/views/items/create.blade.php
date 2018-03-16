@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Item</div>
                    <div class="panel-body">

                        <div class="form">
                          <form  action="{{ route('items.store') }}" method="post">
                            {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                <label for="item_name">Item Name</label>
                                <input id="item_name" type="text" class="form-control" name="item_name" value="{{ old('item_name') }}" placeholder="What's the name of the item ?" required autofocus>

                                @if ($errors->has('item_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                    <label for="category_id" >Category</label>
                                    <select class="form-control" id="category_id" name="category_id">

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>

                                      @endforeach
                                    </select>
                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif

                                </div>

                                <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                        <label for="quantity">Quantity</label>
                                        <input id="quantity" type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" placeholder="How many Units?" required >

                                            @if ($errors->has('quantity'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                </span>
                                            @endif
                                </div>

                                <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                        <label for="unit_price">Unit Price($)</label>
                                        <input id="unit_price" type="text" class="form-control" name="unit_price" value="{{ old('unit_price') }}" placeholder="Enter The Price" required>

                                            @if ($errors->has('unit_price'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('unit_price') }}</strong>
                                                </span>
                                            @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create</button>
                              </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
