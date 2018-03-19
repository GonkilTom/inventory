@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Quantity and Price</div>
                    <div class="panel-body">

                        <div class="form">
                          <form  action="{{ route('stockmgt.update', $item->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field("PATCH") }}

                            <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                    <label for="item_name">Name of Item</label>
                                    <input id="quantity" type="text" class="form-control" name="item_name" value="{{ $item->item_name }}" disabled >

                                        @if ($errors->has('item_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('item_name') }}</strong>
                                            </span>
                                        @endif
                            </div>

                            {{-- <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                    <label for="item_name" >Item</label>
                                    <select class="form-control" id="item_name" name="item_name">

                                        @foreach ($items as $item)
                                            <option value="{{ $item->item_name }}">{{ $item->item_name }}</option>
                                        @endforeach
                                    </select>
                                        @if ($errors->has('item_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('item_name') }}</strong>
                                            </span>
                                        @endif

                            </div> --}}

                            {{-- <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                    <label for="category_id" >Category</label>
                                    <select class="form-control" id="category_id" name="category_id" >

                                        @foreach ($categories as $category)
                                            <option value="{{ $item->category->category_name }}">{{ $category->category_name }}</option>

                                      @endforeach
                                    </select>
                                        @if ($errors->has('category_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('category_name') }}</strong>
                                            </span>
                                        @endif

                                </div> --}}

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
                                        <input id="unit_price" type="text" class="form-control" name="unit_price" value="{{ $item->unit_price }}" required >

                                            @if ($errors->has('unit_price'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('unit_price') }}</strong>
                                                </span>
                                            @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update Item</button>
                              </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
