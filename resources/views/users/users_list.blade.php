@extends('layouts.app')

@section('content')
  <div class="well">
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
      <table>
          <caption>This is a list of the users</caption>
          <thead>
            <td>FIRST NAME</td>
            <td>LAST NAME</td>
            <td>USERNAME</td>
            <td>PHONE NUMBER</td>
            <td>EMAIL</td>
            <td>ADMIN STATUS</td>
            <td colspan="2">ACTION</td>
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
                <td>{{ "Admin" }}</td>
              @else
                <td>{{"NON-Admin"}}</td>
              @endif
              <td><a href="#" class="btn btn-warning">Edit</a></td>
              <td><a href="#" class="btn btn-danger">Delete</a></td>
          </tr>

        @endforeach

      </table>
    </div>
  </div>
  <a href="{{ route('userslayout') }}" class="btn btn-primary">Back</a>

@endsection
