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

    <div class="row">
      <table class = "table table-striped table-hover">
          <caption>This is a list of the users</caption>
          <thead>
            <tr>
              <td>S/N</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Username</td>
              <td>Phone Number</td>
              <td>Email</td>
              <td>Admin Status</td>
              <td>Actions</td>
            </tr>
         </thead>
        @php $no = 1; @endphp
        @foreach ($users as $user)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ ucfirst($user->first_name) }}</td>
            <td>{{ ucfirst($user->last_name) }}</td>
            <td>{{ ucfirst($user->username) }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->email }}</td>
            @php
              $admin_status = $user->admin;
            @endphp
              @if ( $admin_status == 1)
                <td>{{ "admin" }}</td>
              @else
                <td>{{"non - admin"}}</td>
              @endif
              <td>
                <form class = "" action = "{{ route('users.destroy' , $user->id) }}" method="post">
                  <input type = "hidden" name = "_method" value="delete">
                  <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                  <a href="{{ route('users.edit' , $user->id) }}" class="btn btn-warning">Edit</a>
                  {{-- <a href="/users/edit/{{$user->username}}" class="btn btn-warning">Edit</a> --}}
                  <input type="submit" class = "btn btn-danger" onclick = "return confirm('Are you sure you want to delete this user ?')" name = "" value = "Delete">
                </form>
             </td>
          </tr>

        @endforeach

      </table>
      {{ $users->links() }}
    </div>
  </div>
  <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>

@endsection
