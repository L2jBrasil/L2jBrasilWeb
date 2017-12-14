<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lineage 2 ∆ Reaper of Souls</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	@include('core.css')

	@yield('css')

</head>


<body>

  <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    <img src="assets/images/logo.png" alt="">
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->

	@include('core.navbar')
	@yield('content')
  {{--  @include('core.search')  --}}
	@include('core.js')
	@yield('js')

</body>

</html>
