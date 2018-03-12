@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <h2>Category Creation</h2>
          <div class="row">
              <div class="col-xs-6">
                  <h4>Create new Category</h4>
                  <form action="{{  route('categories.store')  }}" method="post">
                    <div class="form-group">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text" class="form-control" name="category_name" value="" required><br>
                      <input type="submit" value= "Create" class= "btn btn-secondary">
                    </div>
                  </form>
              </div>
          </div>
      </div>

      <div class="row">
      </div>
        <div class="row">
          <table class="table table-stripped table-hover table-sm">
            <caption>List of available categories</caption>
            <thead>
              <tr>
                <td>S/N</td>
                <td>Name</td>
                <td>Action</td>
              </tr>
            </thead>
            @php $no =1;@endphp
            @foreach ($categories as $category)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $category->category_name }}</td>
                <td>
                    <form class="" action="{{ route('categories.destroy',$category->id) }}" method="post">
                      <input type = "hidden" name = "_method" value="delete">
                      <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                      <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                      <input type="submit" class = "btn btn-danger" onclick = "return confirm('Are you sure you want to delete this user ?')" name = "" value = "Delete">
                    </form>
                </td>
              </tr>
            @endforeach
            {{ $categories->links() }}
          </table>
        </div>
  </div>
  <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
@endsection
