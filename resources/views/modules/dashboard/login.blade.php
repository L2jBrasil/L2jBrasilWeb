@extends('core.dashboard.app')

@section('content')

<div class="container">
  <div class="loginbox">
    {!! session()->get('error') !!}
    <form method="post" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" placeholder="Login" name="login">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection