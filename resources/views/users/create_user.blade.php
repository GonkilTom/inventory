@extends('layouts.app')
@section('content')
  <form class = "form-group" action= "{{ route('users.store') }}" method = "post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label for="first_name">FIRST NAME</label>
      <input class="form-control" type="text" name="first_name" value="" placeholder="First Name" required><br>
      <label for="last_name">LAST NAME</label>
      <input class="form-control" type="text" name="last_name" value="" placeholder="Last Name" required><br>
      <label for="username">USERNAME</label>
      <input class="form-control" type="text" name="username" value="" placeholder="Username" required><br>
      <label for="phone_number">TELEPHONE NUMBER</label>
      <input class="form-control" type="tel" name="phone_number" value="" placeholder="Tel. Phone number"><br>
      <label for="home_address">HOME ADDRESS</label>
      <input class="form-control" type="text" name="home_address" value="" placeholder="Home Address" required><br>
      <label for="email">EMAIL</label>
      <input class="form-control" type="email" name="email" value="" placeholder="E-mail Address" required><br>
      <label for="password">PASSWORD</label>
      <input class="form-control" type="password" name="password" value="" placeholder="Password" required><br>
      <label for="admin">NON-ADMIN    </label>
      <input type="radio" name= "admin" id = 0 value = 0><br>
      <label for="admin">ADMIN</label>
      <input type="radio" name= "admin" id = 1 value = 1>
      <br><br>
      <input type="submit" value= "Create User" class= "btn btn-primary">
  </form>
@endsection
