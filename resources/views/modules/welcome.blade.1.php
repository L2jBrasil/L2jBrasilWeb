@extends('core.app')

@section('css')

@endsection

@section('content')
<!-- RANKS -->

  <div class="container youplay-content">
    <div class="title-pages">
      <span class="span-titles">Hall</span> da Fama
    </div>
    <div class="row">
      <div class="col-md-4">
        <!-- RANK CLAN -->
        <div class="conteudo">
        <table class="table tbrank">
          <thead class="tbrank">
            <tr>
              <th>
              <span style="font-size: 15px; color: yellow;">
              <i class="fas fa-trophy"></i>
              </span>
              </th>
              <th>Clan Name</th>
              <th>Reputation</th>
            </tr>
          </thead>
          <tbody class="tbrank">
            <tr>
              <td>1°</td>
              <td>Vassals</td>
              <td>1000 pts</td>
            </tr>
          </tbody>
        </table>
        </div>
        <!-- RANK CLAN -->
      </div>
      
      <div class="col-md-4">
        <!-- RANK PVP -->
        <table class="table">
          <thead class="tbrank">
            <tr>
              <th>
              <span style="font-size: 15px; color: yellow;">
              <i class="fas fa-trophy"></i>
              </span>
              </th>
              <th>Char Name</th>
              <th>PvP's</th>
            </tr>
          </thead>
          <tbody class="tbrank">
            @foreach($rankpvp as $pvp)
            <tr>
              <td>
                @if( $loop->iteration < 2 )
                  <span class="efeitotop">{{ $loop->iteration }}</span>
                @else
                  {{ $loop->iteration }}
                @endif
              </td>
              <td>
                @if( $loop->iteration < 2 )
                  <span class="efeitotop">{{ $pvp->char_name}}</span>
                @else
                  {{ $pvp->char_name }}
                @endif
              </td>
              <td>
                @if( $loop->iteration < 2 )
                  <span class="efeitotop">{{ $pvp->pvpkills }} pvp's</span>
                @else
                  {{ $pvp->pvpkills }} pvp's
                @endif
              </td>
            </tr>
            
            @endforeach
          </tbody>
        </table>
        <!-- FIM RANK PVP -->
      </div>

      <div class="col-md-4">
        <!-- RANK PK -->
        <table class="table">
          <thead class="tbrank">
            <tr>
              <th>
              <span style="font-size: 15px; color: yellow;">
              <i class="fas fa-trophy"></i>
              </span>
              </th>
              <th>Char Name</th>
              <th>PK's</th>
            </tr>
          </thead>
          <tbody class="tbrank">
            @foreach($rankpvp as $pvp)


            <tr>
              <td>
                @if( $loop->iteration < 2 )
                  <span class="efeitotop">{{ $loop->iteration }}</span>
                @else
                  {{ $loop->iteration }}
                @endif
              </td>
              <td>
                @if( $loop->iteration < 2 )
                  <span class="efeitotop">{{ $pvp->char_name}}</span>
                @else
                  {{ $pvp->char_name }}
                @endif
              </td>
              <td>
                @if( $loop->iteration < 2 )
                  <span class="efeitotop">{{ $pvp->pvpkills }} pvp's</span>
                @else
                  {{ $pvp->pvpkills }} pvp's
                @endif
              </td>
            </tr>
            
            @endforeach
          </tbody>
        </table>
        <!-- RANK PK -->
      </div>
    </div>
  </div>

  <!-- /RANKS-->


  <!-- NOTICIAS -->
  @if($post > 0)
    <div class="container">
      <div class="alert alert-secondary" role="alert">
        Não possuimos nenhuma postagem cadastrada <i class="fas fa-sad-tear"></i>
      </div>
    </div>
  @else
  <div class="title-pages container novidades">
    Novidades do Server
  </div>
    <section class="youplay-news container">


      <!-- Single News Block -->
      @foreach($posts as $p)
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="blog-post-1.html" class="angled-img">
              <div class="borderimg">
                <img src="{{ $p->urlimg }}" alt="">
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">{{ $p->titulo }}</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> {{ $p->date }}</span>
            </div>
            <div class="description">
              <p>
                {!! str_limit($p->post, 350) !!}
              </p>
            </div>
            <a href="/post/{{ $p->id }}" class="btn read-more pull-left">Leia Mais</a>
          </div>
        </div>
      </div>
      @endforeach
      <!-- /Single News Block -->
      @endif
@endsection
