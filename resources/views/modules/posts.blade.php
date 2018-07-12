@extends('core.app')

@section('css')

@endsection

@section('content')
<div class="container youplay-news youplay-post">

  <div class="col-md-9">
  <div class="side-block">
    <h4 class="block-title">{{ $p->titulo }}</h4>
  </div>
    <!-- Post Info -->
    <article class="news-one boxpgs">

      <!-- Post Meta -->
      <div class="meta">
        <div class="item">
          <i class="fa fa-user meta-icon"></i>
          Author <a href="#!">nK</a>
        </div>
        <div class="item">
          <i class="fa fa-calendar meta-icon"></i>
          Published <a href="#!">Today</a>
        </div>
      </div>
      <!-- /Post Meta -->
      <!-- Post Text -->
      <div class="description">
        <p>
          Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit.
        </p>
        <p>
          Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum
          duo te mihi videtur.
        </p>
        <p>
          Mauris a nunc occideritis me rectum. Videtur quod Ive facillimum, qui fecit vos. Potes me interficere, sine testibus et tunc manere in pauci weeks vel mensis vestigia Isai Pinkman et vos quoque illum occidere. Exercitium inutili option A. Videtur mihi
          quod autem est.
        </p>
        <p>
          Pergo coctione, et ego, et tu oblivisci Pinkman. Obliviscendum hoc unquam factum. Intelligamus hoc in sola SINGULTO multo aliter atque fructuosa negotium structura. Malo B. Option.
        </p>
        <p>
          Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.
        </p>
        <p>
          His duobus, sicariorum. Et orci aetate erat, sed nescio quo modo se gerendo levir meus aufert a me. Propter hoc 'interventu 'vivere me scito. Et tamen hoc quod multo altius est eget arcu. Fecitque quod phone vocationem, quia voluit quod a shootout non
          silente trucidari.
        </p>
      </div>
      <!-- /Post Text -->
    </article>
    <!-- /Post Info -->

  </div>

  <!-- Right Side -->
  <div class="col-md-3">

    <!-- Side Popular News -->
    <div class="side-block right-side">
      <h4 class="block-title">Postagens Recentes</h4>
      <div class="block-content p-0">
        <!-- Single News Block -->
        <div class="row youplay-side-news">
          <div class="col-xs-3 col-md-4">
            <a href="blog-post-1.html" class="angled-img">
              <div class="img">
                <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
              </div>
            </a>
          </div>
          <div class="col-xs-9 col-md-8">
            <h4 class="ellipsis"><a href="blog-post-1.html" title="Road Not Taken - First Try!">Road Not Taken - First Try!</a></h4>
            <span class="date"><i class="fa fa-calendar"></i> Today</span>
          </div>
        </div>
        <!-- /Single News Block -->

        <!-- Single News Block -->
        <div class="row youplay-side-news">
          <div class="col-xs-3 col-md-4">
            <a href="#!" class="angled-img">
              <div class="img">
                <img src="assets/images/game-dream-500x375.jpg" alt="">
              </div>
            </a>
          </div>
          <div class="col-xs-9 col-md-8">
            <h4 class="ellipsis"><a href="#!" title="Whats New in Dream">Whats New in Dream</a></h4>
            <span class="date"><i class="fa fa-calendar"></i> February 2, 2015</span>
          </div>
        </div>
        <!-- /Single News Block -->

        <!-- Single News Block -->
        <div class="row youplay-side-news">
          <div class="col-xs-3 col-md-4">
            <a href="#!" class="angled-img">
              <div class="img">
                <img src="assets/images/game-journey-500x375.jpg" alt="">
              </div>
            </a>
          </div>
          <div class="col-xs-9 col-md-8">
            <h4 class="ellipsis"><a href="#!" title="Review Journey">Review Journey</a></h4>
            <span class="date"><i class="fa fa-calendar"></i> January 18, 2015</span>
          </div>
        </div>
        <!-- /Single News Block -->
      </div>
    </div>
    <!-- /Side Popular News -->

    <!-- Our Twitter -->
    <div class="side-block">
      <h4 class="block-title">Our Twitter</h4>
      <div class="block-content">
        <div class="youplay-twitter" data-twitter-user-name="nkdevv" data-twitter-count="3" data-twitter-hide-replies="false"></div>
      </div>
    </div>
    <!-- /Our Twitter -->

  </div>
  <!-- /Right Side -->

</div>
@endsection
