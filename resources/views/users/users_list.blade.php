@extends('layouts.app')

@section('content')
  <div class="">
    {{-- <table>
      @foreach ($users as $user){
        <tr>
          @foreach ()
            <td>{}</td>
          @endforeach
        </tr>
      }

      @endforeach
    </table> --}}

    <div class="">
      <table class = "table table-striped">
          <caption>This is a list of the users</caption>
          <thead>
            <tr>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Username</td>
              <td>Phone Number</td>
              <td>Email</td>
              <td>Admin Status</td>
              <td colspan="2">ACTION</td>
            </tr>
         </thead>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->phone_number}}</td>
            <td>{{$user->email}}</td>
            @php
              $admin_status = $user->admin;
            @endphp
              @if ( $admin_status == 1)
                <td>{{ "admin" }}</td>
              @else
                <td>{{"non - admin"}}</td>
              @endif
              <td><a href="/users/edit/{{$user->username}}" class="btn btn-warning">Edit</a></td>
              <td><a href="#" class="btn btn-danger">Delete</a></td>
          </tr>

        @endforeach

      </table>
    </div>
  </div>
  <a href="{{ route('userslayout') }}" class="btn btn-primary">Back</a>

@endsection
