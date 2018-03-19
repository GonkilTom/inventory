@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Available Items and current prices</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">

                        <thead class=" thead-dark">
                            <td>#</td>
                            <td>Item</td>
                            <td>Category</td>
                            <td>Quantity</td>
                            <td>Price per Unit($)</td>
                        </thead>

                        @php $no = 1; @endphp
                        @foreach ($items as $item)
                          <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->item_name }}</td>
                              <td>{{ $item->category->category_name }}</td>
                              <td>{{ $item->quantity }}</td>
                              <td>{{ $item->unit_price }}</td>
                          </tr>
                        @endforeach

                    </table>
                    {{ $items->links() }}
                </div>

            </div>

        </div>
    </div>
@endsection
