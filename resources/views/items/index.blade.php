@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Items Control</div>

                <div class="panel-body">
                  <h4><a href="{{ route('items.create') }}">Create Items</a></h4>
                  <hr>
                  <h4><a href="#">View Items</a></h4>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection








{{-- @extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <h2>Item Creation</h2>
          <div class="row">
              <div class="col-xs-6">
                  <h4>Create new Item</h4>
                  <form action="{{  route('items.store')  }}" method="post">
                    <div class="form-group">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text" class="form-control" name="item_name" value="" required><br>
                      <input type="submit" value= "Create" class= "btn btn-secondary">
                    </div>
                  </form>
              </div>
          </div>
      </div>

      <div class="row">
      </div>
        <div class="row">
          <table class="table table-stripped table-hover ">
            <caption>List of available items</caption>
            <thead>
              <tr>
                <td>S/N</td>
                <td>Name</td>
                <td>Category</td>
                <td>Action</td>
              </tr>
            </thead>
            @php $no =1;@endphp
            @foreach ($items as $item)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->category_id }}</td>
                <td>{{ $item->quantity }}</td>
                <td>
                    <form class="" action="{{ route('items.destroy',$category->id) }}" method="post">
                      <input type = "hidden" name = "_method" value="delete">
                      <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                      <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                      <input type="submit" class = "btn btn-danger" onclick = "return confirm('Are you sure you want to delete this user ?')" name = "" value = "Delete">
                    </form>
                </td>
              </tr>
            @endforeach
            {{ $items->links() }}
          </table>
        </div>
  </div>
  <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
@endsection --}}
