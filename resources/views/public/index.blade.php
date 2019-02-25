@extends('layouts.public_structure')
@section('links')
<link rel="stylesheet" href="/css/homeStyle.css">
@stop
@section('content')
<!--carusel de imagenes-->
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide="0" class="active"></li>
    <li data-target="#slides" data-slide="1"></li>
    <li data-target="#slides" data-slide="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/home_carousel1.jpg">
      <div class="carousel-caption">
        <h1 class="display-2">Unete!!</h1>
        <h3>la mejor aplicacion del mercado</h3>
        <h3>Registrate y obten grandes beneficios</h3>
        <button type="button" class="btn btn-outline btn-lg" id="btCarousel">Registrarse</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home_carousel2.jpg">
      <div class="carousel-caption" id="caraouselCapBlack">
        <h3>Ayuda a tu universidad a ser la mejor.</h3>
        <h2>Que sea un paso al futuro</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home_carousel3.jpg">
      <div class="carousel-caption" id="caraouselCapRed">
        <h3>ingresa desde tu computador</h3>
        <h3>o desde tu dispositivo movil</h3>
        <h5>descarga la aplicacion y disfruta tu experiencia</h5>
      </div>
    </div>
  </div>
</div>

<!--seccion de informacion-->
<div class="container-fluid">
  <div class="text-center">
    <div class="col-12">
      <p class="lead">texto cualquiera.texto cualquiera.texto cualquiera.texto cualquiera.
      texto cualquiera.texto cualquiera.texto cualquiera.texto cualquiera.texto cualquiera.
    texto cualquiera.texto cualquiera.texto cualquiera.texto cualquiera.</p>
    <hr>
    </div>
  </div>
</div>

<div class="container-fluid padding">
  <div class="row text-center">
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3>HTML5</h3>
      <p>Maquetado en laultima version de HTML.</p>
    </div>
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3>Laravel</h3>
      <p>Uso de framework php Laravel</p>
    </div>
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3>MySQL</h3>
      <p>Base de datos ligera, segura y rapida.</p>
    </div>
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3>Bootstrap</h3>
      <p>La mejor apraiencia y experienca para el usuario</p>
    </div>
  </div>
</div>
@stop
