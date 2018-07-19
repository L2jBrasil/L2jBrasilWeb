@extends('core.dashboard.app')

@section('content')
    <div class="container">
    <div class="postsdash">

        <a href="{{action('DashController@getData')}}" class="btn btn-dash">Listar Posts</a>
        <a href="" class="btn btn-dash">Adicionar Posts</a>
      </div>
    </div>
  <div class="container">
  	<div class="postsdash">
            <table class='table table-dash'>
              <tr class="tbhead-dash">
                <th>Titulo</th>
                <th colspan="2">Ações</th>
              </tr>
             @foreach($posts as $p)
              <tr>
                
                <td>{{ $p->titulo }}</td>
                <td><a href=""><b>Alterar</b></a></td>
                <td><a href="{{action('DashController@deleteData', $p->id)}}"><b>Excluir</b></a></td>
              </tr>
              @endforeach
            </table>
        </div>
    </div>

@endsection