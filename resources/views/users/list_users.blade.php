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
              <td colspan="2">Actions</td>
            </tr>
         </thead>
        @foreach ($users as $user)
          <tr>
            <td>{{ ucfirst($user->first_name) }}</td>
            <td>{{ ucfirst($user->last_name) }}</td>
            <td>{{ ucfirst($user->username) }}</td>
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
        {{$users->links()}}
      </table>
    </div>
  </div>
  <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>

@endsection
