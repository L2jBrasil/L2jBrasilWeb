@extends('core.dashboard.app')

@section('content')
@include('core.dashboard.nav')
    <div class="container">
        <form action="/dashboard/posts/adiciona" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="file" name="image" id="image">
          <button type="submit">Enviar</button>
      </form>


 
    <img src="{{ url("storage/posts/banner-bg.jpg") }}" />

    </div>

@endsection