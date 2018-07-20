@extends('core.dashboard.app')

@section('content')

<div class="container">
  <div class="loginbox shadow p-3 mb-5">

    {!! session()->get('error') !!}
    <form method="post" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="login"><b>Login</b></label>
        <input type="text" class="form-control" id="login" placeholder="Login" name="login">
      </div>
      <div class="form-group">
        <label for="password"><b>Password</b></label>
        <input type="password" class="form-control purple" id="password" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Logar-se <i class="fas fa-sign-in-alt"></i></button>
    </form>
  </div>
</div>

@endsection
