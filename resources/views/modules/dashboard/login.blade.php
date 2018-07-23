@extends('core.dashboard.app')

@section('content')

<div class="container">
  <div class="loginbox shadow p-3 mb-5">
  
        {!! session()->get('error') !!}
    
    <form method="post" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="login"><b>Login</b></label>
        <input type="text" class="form-control input" id="login" placeholder="Login" name="login" value="{{ old('login') }}">
      </div>
      <div class="form-group">
        <label for="password"><b>Password</b></label>
        <input type="password" class="form-control input" id="password" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-dash btn-block">Logar-se <i class="fas fa-sign-in-alt"></i></button>
      <div class="recoverpass">
      <a href="" class="recoverpass">Registre-se</a>
      <a href="" class="recoverpass">Perdeu a senha? recupere aqui</a>
      </div>
    </form>
  </div>
</div>

@endsection
