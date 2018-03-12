@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Create User</div>

                  <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                              <label for="first_name" class="col-md-4 control-label">FirstName</label>

                              <div class="col-md-7">
                                  <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Enter Your First Name" required autofocus>

                                  @if ($errors->has('first_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('first_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                              <label for="last_name" class="col-md-4 control-label">LastName</label>

                              <div class="col-md-7">
                                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Enter Your Last Name" required>

                                  @if ($errors->has('last_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('last_name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                              <label for="username" class="col-md-4 control-label">UserName</label>

                              <div class="col-md-7">
                                  <input id="username" type="text" class="form-control" name="username" value="{{ old('last_name') }}" placeholder="Enter Your User Name" >

                                  @if ($errors->has('username'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('username') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                              <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                              <div class="col-md-7">
                                  <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Tel. Phone number" >

                                  @if ($errors->has('last_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('phone_number') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('home_address') ? ' has-error' : '' }}">
                              <label for="home_address" class="col-md-4 control-label">Home Address</label>

                              <div class="col-md-7">
                                  <input id="home_address" type="text" class="form-control" name="home_address" value="{{ old('home_address') }}" placeholder="Enter Home address" >

                                  @if ($errors->has('home_address'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('home_address') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-7">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email" required>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="row">
                              <div class="form-group">
                                    <label for="admin" class="col-md-4 control-label">Select Admin</label>
                                    <div class="col-md-7">
                                      <select class="selectpicker form-control" >
                                        <option value=0>Non-Admin</option>
                                        <option value=1>Admin</option>
                                      </select>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-7">
                                  <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                              <div class="col-md-7">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Create User
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>





  {{-- <div class="form-group">
    <form action= "{{  route('users.store')  }}" method = "post">
    {!! csrt_field() !!}
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
  </div> --}}

@endsection
