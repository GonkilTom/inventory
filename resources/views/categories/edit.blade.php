@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <h2>Category Creation</h2>
          <div class="row">
              <div class="col-xs-6">
                  <h4>Create new Category</h4>
                  <form action="{{  route('categories.update', $category->id) }}" method="post">
                    <div class="form-group">
                      <input type="hidden" name="_method" value="PATCH">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text" class="form-control" name="category_name" value="{{ $category->category_name}}" required><br>
                      <input type="submit" value= "Save" class= "btn btn-secondary">
                    </div>
                  </form>
              </div>
          </div>
      </div>
@endsection
