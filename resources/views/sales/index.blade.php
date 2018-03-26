@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Item</div>
                    <div class="panel-body">
                        <button type="button" class="btn btn-primary pull-right">Add +</button>
                        <br>
                        <div class="form">
                          <form  action="#" method="post">
                            {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                              <label for="item_name">Select Item</label>
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
                          </div>

                          <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                              <label for="category_id">Select Category</label>
                              <select class="form-control" id="category_id" name="category_id">
                                  @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                  @endforeach
                              </select>

                              @if ($errors->has('category_name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('category_name') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                              <label for="quantity"></label>
                              <input id="quantity" type="number" class="form-control" name="quantity" value="{{ old('unit_price') }}" placeholder="Enter The Price" required>
                                  @if ($errors->has('quantity'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('quantity') }}</strong>
                                      </span>
                                  @endif
                          </div>

                                <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                  <label for="unit_price">Unit Price($)</label>
                                  <input id="unit_price" type="text" class="form-control" name="unit_price" value="{{ $item->unit_price }}"  required>

                                      @if ($errors->has('unit_price'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('unit_price') }}</strong>
                                          </span>
                                      @endif
                                </div>
                                {{-- <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                                  <label for="unit_price">Unit Price($)</label>
                                  <input id="unit_price" type="text" class="form-control" name="unit_price" value="{{ $item->unit_price }}" required >

                                      @if ($errors->has('unit_price'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('unit_price') }}</strong>
                                          </span>
                                      @endif
                                </div> --}}

                                <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Sell</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
