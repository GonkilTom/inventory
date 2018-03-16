@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading ">A Display of Available Items</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">

                        <thead>
                            <td>S/N</td>
                            <td>Item Name</td>
                            <td>Category Name</td>
                        </thead>

                        @php $no = 1; @endphp
                        @foreach ($items as $item )
                          <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->item_name }}</td>
                              <td>{{ $item->category->category_name }}</td>
                          </tr>
                        @endforeach

                    </table>
                    {{ $items->links() }}
                </div>

            </div>

        </div>
    </div>
@endsection
