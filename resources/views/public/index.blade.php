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
        <h1 class="display-2" id="pink-title">Unete!!</h1>
        <h3>la mejor aplicacion del mercado</h3>
        <h3>Registrate y obten grandes beneficios</h3>
        <button type="button" class="btn btn-outline btn-lg" id="btCarousel" onclick="location.href='/register'">Registrarse</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home_carousel2.jpg">
      <div class="carousel-caption" id="caraouselCapBlack">
        <h3>Ayuda a tu universidad a ser la mejor.</h3>
        <h2 id="pink-title">Que sea un paso al futuro</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/home_carousel3.jpg">
      <div class="carousel-caption" id="caraouselCapRed">
        <h1>ingresa desde tu computador</h1>
        <h1>o desde tu dispositivo movil</h1>
        <h3 id="pink-title">descarga la aplicacion y disfruta tu experiencia</h3>
      </div>
    </div>
  </div>
</div>

<!--seccion de informacion-->
<div class="container-fluid padding" id="welcomePagraf">
  <div class="text-center">
    <div class="col-12">
      <p class="lead">Una aplicacion facil de usar y amigable con el usuario, ingresa por medio de
      tu navegador web preferido o descarga la aplicacion en tu dipositivo movil para un acceso facil
      y rapido. Has parte de nuestra comunidad, resgistrate y obten grandes beneficios y los ultimos datos
      de tus lugares de mayor interez.</p>
    <hr>
    </div>
  </div>
</div>

<div class="container-fluid padding" id="tools">
  <div class="row text-center">
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3 id="pink-title">HTML5</h3>
      <p>Maquetado en laultima version de HTML.</p>
    </div>
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3 id="pink-title">Laravel</h3>
      <p>Uso de framework php Laravel</p>
    </div>
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3 id="pink-title">MySQL</h3>
      <p>Base de datos ligera, segura y rapida.</p>
    </div>
    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
      <h3 id="pink-title">Bootstrap</h3>
      <p>La mejor apraiencia y experienca para el usuario</p>
    </div>
    <hr>
  </div>
</div>
@stop
