  @extends('core.app')

  @section('css')
  {{--  Import custom css styles for specific page  --}}
  @endsection
  @section('content')
  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top youplay-banner-parallax">
      <div class="image" style="background-image: url('assets/images/banner-bg.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h1 class="lineage2">Lineage @: <br>Reaper of Souls</h1>
            <em>"One server made by the largest brazilian lineage 2 community"</em>
            <br>
            <br>
            <br>
            <a class="btn btn-lg" href="#!">Register</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Banner -->

    <!-- Images With Text -->
    <div class="youplay-carousel" data-autoplay="5000">
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Bloodborne</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dark Souls II</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-lords-of-the-fallen-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Lords of the Fallen</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-middle-eart-shadow-of-mordor-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Middle-earth: Shadow of Mordor</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-soul-sacrifice-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Soul Sacrifice</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Kingdoms of Amalur: Reckoning</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-the-witcher-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>The Witcher: Rise of the White Wolf</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-diablo-iii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Diablo III: Reaper of Souls</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dragons Dogma</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Images With Text -->



    <!-- Popular -->
    <h2 class="container h1">Popular <a href="#!" class="btn pull-right">See More</a></h2>
    <div class="youplay-carousel">
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Kingdoms of Amalur: Reckoning</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-the-witcher-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>The Witcher: Rise of the White Wolf</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-diablo-iii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Diablo III: Reaper of Souls</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dragons Dogma</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Popular -->


    <!-- Specials -->
    <h2 class="container h1">Specials <a href="#!" class="btn pull-right">See More</a></h2>
    <div class="youplay-carousel">
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
          <div class="badge bg-default">
            -20%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Dark Souls II</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price">$39.99 <sup><del>$49.99</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-lords-of-the-fallen-500x375.jpg" alt="">
          <div class="badge bg-default">
            -25%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Lords of the Fallen</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price">$26.25 <sup><del>$35.00</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
          <div class="badge bg-default">
            -30%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Dragons Dogma</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price">$34.99 <sup><del>$49.99</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img img-offset">
          <img src="assets/images/game-soul-sacrifice-500x375.jpg" alt="">
          <div class="badge bg-success">
            -100%
          </div>
        </div>
        <div class="bottom-info">
          <h4>Soul Sacrifice</h4>
          <div class="row">
            <div class="col-xs-6">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="price"><span class="text-success">FREE!</span>  <sup><del>$29.99</del></sup>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Specials -->


    <!-- Preorder -->
    <div class="h2"></div>
    <section class="youplay-banner youplay-banner-parallax small">
      <div class="image" style="background-image: url('assets/images/banner-witcher-3.jpg');">
      </div>

      <div class="info container align-center">
        <div>
          <h2>The Witcher 3:<br> Wild Hunt</h2>

          <!-- See countdown init in bottom of the page -->
          <div class="countdown h2" data-end="2017/01/01"></div>

          <br>
          <br>
          <a class="btn btn-lg" href="#!">Pre-Order</a>
        </div>
      </div>
    </section>
    <!-- /Preorder -->


    <!-- Latest News -->
    <h2 class="container h1">Latest News</h2>
    <section class="youplay-news container">
      <!-- Single News Block -->
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="blog-post-1.html" class="angled-img">
              <div class="img">
                <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
              </div>
              <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9.1 out of 10"><span>9.1</span>
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">Bloodborne - First Try!</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> Today</span>
            </div>
            <div class="tags">
              <i class="fa fa-tags"></i>  <a href="#">Bloodborne</a>, <a href="#">first try</a>, <a href="#">first boss problem</a>, <a href="#">newbie game</a>
            </div>
            <div class="description">
              <p>
                Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere eum.
              </p>
              <p>
                Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus!
              </p>
            </div>
            <a href="blog-post-1.html" class="btn read-more pull-left">Read More</a>
          </div>
        </div>
      </div>
      <!-- /Single News Block -->

      <!-- Single News Block -->
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="blog-post-2.html" class="angled-img">
              <div class="img">
                <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
              </div>
              <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9 out of 10"><span>9</span>
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="blog-post-2.html">Coming to Youplay - Dark Souls II</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> March 9, 2015</span>
            </div>
            <div class="tags">
              <i class="fa fa-tags"></i>  <a href="#">Dark Souls II</a>, <a href="#">coming soon</a>, <a href="#">first review</a>, <a href="#">sale date</a>
            </div>
            <div class="description">
              Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.
            </div>
            <a href="blog-post-2.html" class="btn read-more pull-left">Read More</a>
          </div>
        </div>
      </div>
      <!-- /Single News Block -->

      <!-- Single News Block -->
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="blog-post-3.html" class="angled-img">
              <div class="img">
                <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
              </div>
              <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="3.8 out of 10"><span>3.8</span>
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="blog-post-3.html">Review Kingdoms of Amalur</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> March 1, 2015</span>
            </div>
            <div class="tags">
              <i class="fa fa-tags"></i>  <a href="#">Kingdoms of Amalur</a>, <a href="#">game</a>, <a href="#">review</a>
            </div>
            <div class="description">
              Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum
              duo te mihi videtur.
            </div>
            <a href="blog-post-3.html" class="btn read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- /Single News Block -->
    </section>
    <!-- /Latest News -->


    <!-- Partners -->
    <section class="youplay-banner youplay-banner-parallax small mt-80">
      <div class="image" style="background-image: url('assets/images/banner-bg.jpg');">
      </div>

      <div class="info align-center">
        <div>
          <h2 class="mb-40">Partners</h2>

          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="owl-carousel" data-autoplay="6000">
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-1.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-2.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-3.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-4.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-5.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-6.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-7.png" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <img src="assets/images/partner-logo-8.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Partners -->


    <!-- Features -->
    <h2 class="container h1">Why Buy from Us</h2>
    <section class="youplay-features container">
      <div class="col-md-3 col-sm-6">
        <a class="feature angled-bg" href="#">
          <i class="fa fa-cc-visa"></i>
          <h3>Payment</h3>
          <small>More than 10 payment systems</small>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-gamepad"></i>
          <h3>Games</h3>
          <small>A large number of games</small>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-money"></i>
          <h3>Cheap</h3>
          <small>Lowest prices on the Internet</small>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-users"></i>
          <h3>Community</h3>
          <small>The largest gaming community</small>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="youplay-footer-parallax">
      <div class="wrapper" style="background-image: url('assets/images/footer-bg.jpg')">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container">
            <h3>Connect socially with <strong>youplay</strong></h3>

            <div class="social-icons">
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-facebook-square"></i>
                  <span>Like on Facebook</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-twitch"></i>
                  <span>Watch on Twitch</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>nK</strong> &copy; 2016. All rights reserved
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->
  @endsection
  @section('js')
  {{--  Import custom js scripts for specific page  --}}
  @endsection