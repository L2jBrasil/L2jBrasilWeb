@extends('core.app')

@section('css')

@endsection

@section('content')
<!-- RANKS -->

  <div class="container youplay-content">
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
            <tr>
              <td>2°</td>
              <td>Vassals</td>
              <td>1000 pts</td>
            </tr>
            <tr>
              <td>3°</td>
              <td>Vassals</td>
              <td>1000 pts</td>
            </tr>
            <tr>
              <td>4°</td>
              <td>Vassals</td>
              <td>1000 pts</td>
            </tr>
          </tbody>
        </table>
        </div>
        <!-- RANK CLAN -->
      </div>
      <div class="col-md-4">



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
        </table>
        <!-- RANK PK -->
      </div>
    </div>
  </div>

  <!-- /RANKS-->


  <!-- NOTICIAS -->

    <h2 class="container h1 newstitle">
  NEWS
  </h2>
    <section class="youplay-news container">
      <!-- Single News Block -->
      @foreach($posts as $p)
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="blog-post-1.html" class="angled-img">
              <div class="img borderimg">
                <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
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
                {{ str_limit($p->post, 350) }}
              </p>
            </div>
            <a href="blog-post-1.html" class="btn read-more pull-left">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
      <!-- /Single News Block -->
@endsection
