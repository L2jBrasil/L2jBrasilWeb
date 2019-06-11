@extends('core.app')

@section('css')

@endsection

@section('content')

    <div class="container youplay-content">

      <div style="float: left">
        <span class="services">Server :</span> <span class="services-on">Online</span>
      </div>

      <div style="float: right">
          <span class="services">Login :</span> <span class="services-on">Online</span>
      </div>

      <!-- Rates Simples -->
      
      <div class="clearfix"></div>
      <div class="rates-margin">
        <div class="basicrates">
          <h2 class="container span-titles">Rates Basicas</h2>
        </div>
        <div class="row">
          <div class="col-md-4" align="center">
              <div class="rates-num">
                <div class="center-rate">
                  20x
                </div>
              </div>
              <div class="rates">
                XP & SP Rates
              </div>
          </div>
          <div class="col-md-4" align="center">
            <div class="rates-num">
              <div class="center-rate">
                50x
              </div>
            </div>
            <div class="rates">
              Adena Rate
            </div>
          </div>
          <div class="col-md-4" align="center">
            <div class="rates-num">
              <div class="center-rate">
                10x
              </div>
            </div>
            <div class="rates">
              Spoil Rate
            </div>
          </div>
          <div align="center" class="moreinfos">
              <i class="fas fa-angle-right"></i> Mais informações...
          </div>                  
        </div>
      </div>
      <!-- Fim Rates Simples -->


      <!-- Latest News -->
      <h2 class="container"><span class="span-titles">Ultimas  Noticias</span></h2>
      <section class="youplay-news container">
        <!-- Single News Block -->
        <div class="news-one">
          <div class="row vertical-gutter">
            <div class="col-md-3">
              <a href="blog-post-1.html">
                <div class="borderimg">
                  <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
                </div>
              </a>
            </div>
            <div class="col-md-9">
              <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">Road Not Taken - First Try!</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> Today</span>
              </div>
              <div class="tags">
                <i class="fa fa-tags"></i>  <a href="#">Road Not Taken</a>, <a href="#">first try</a>, <a href="#">newbie game</a>
              </div>
              <div class="description">
                <p>
                  Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit.
                </p>
                <p>
                  Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere.
                </p>
              </div>
              <a href="blog-post-1.html" class="btn bt-primary read-more pull-left"><i class="fab fa-readme"></i> Leia Mais...</a>
            </div>
          </div>
        </div>
        <!-- /Single News Block -->

      </section>
{{-- 
      <div class="container">
        <h2 class="container span-titles">Hall da Fama</h2>
          <div class="row">
            <div class="col-md-4" align="center">
              <div class="hall">
                <i class="fas fa-star"></i>
                  @foreach($rankpvp as $pvp)
                    @if( $loop->iteration == 2 )
                      {{ $pvp->char_name }}
                      <br />
                      <span class="position">{{ $pvp->pvpkills }} Kills / 2° Lugar</span>
                    @else
                    @endif
                  @endforeach
              </div>
            </div>
            <div class="col-md-4" align="center">
              <div class="hall">
                
                  @foreach($rankpvp as $pvp)
                    @if( $loop->iteration < 2 )
                      <span class="efeitotop"><i class="fas fa-star"></i> {{ $pvp->char_name }}</span>
                      <br />
                      <span class="position">{{ $pvp->pvpkills }} Kills / 1° Lugar</span>
                    @else
                    @endif
                  @endforeach
              </div>
            </div>
            <div class="col-md-4" align="center">
              <div class="hall">
                <i class="fas fa-star"></i>
                  @foreach($rankpvp as $pvp)
                    @if( $loop->iteration == 3 )
                      {{ $pvp->char_name }}
                      <br />
                      <span class="position">{{ $pvp->pvpkills }} Kills / 3° Lugar</span>
                    @else
                    @endif
                  @endforeach

              </div>          
            </div>
          </div>
      </div> --}}


    </div>


@endsection
