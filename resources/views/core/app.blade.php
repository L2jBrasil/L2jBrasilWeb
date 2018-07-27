<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lineage II - {{ config('app.name') }}</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  @include('core.css')

  @yield('css')

</head>


<body>

  @include('core.navbar')


  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top youplay-banner-parallax">
      <div class="image" style="background-image: url('/assets/images/banner-bg.jpg')">
      </div>
    </section>
    <!-- /Banner -->



    @yield('content') <!-- Inserção do Conteudo do site! -->


    </section>
    <!-- Footer -->
    <footer class="youplay-footer-parallax">
      <div class="wrapper" style="background-image: url('/assets/images/footer-bg.jpg')">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container">
            <h3>Vote em nosso server e receba <strong>recompensas!</strong></h3>

            <div class="social-icons">
              <div class="social-icon">
                <a href="#!">
                  <img src="/assets/images/l2jbr.png" class="imgvote"/>
                  <span>Vote L2JBrasil</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <img src="/assets/images/l2topco.png" class="imgvote"/>
                  <span>Vote L2Top.co</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <img src="/assets/images/l2top200.png" class="imgvote"/>
                  <span>Vote Top200</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <img src="/assets/images/l2hopzone.png" class="imgvote"/>
                  <span>Vote L2Hopzone</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>L2JBrasilWeb</strong> &copy; 2018. Todos direitos reservados.
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->

  {{--  @include('core.search')  --}}


  @include('core.js')
  @yield('js')

</body>
</html>
