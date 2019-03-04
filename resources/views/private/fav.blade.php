@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/fav_Style.css">
@stop
@section('content')
<h1>FAVORITOS</h1>
<hr>

<!--Favorite section-->
<div class="container-fluid padding center" id="table">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">Parqueadero biblioteca
    <span class="badge badge-primary badge-pill">2</span></a>
    <a href="#" class="list-group-item list-group-item-action">Parqueadero fundadores
    <span class="badge badge-primary badge-pill">5</span></a>
    <a href="#" class="list-group-item list-group-item-action">Parqueadero edf principal
    <span class="badge badge-primary badge-pill">10</span></a>
  </div>
</div>

<!--image section-->
<div class="container-fluid" id="img-container"></div>

  <!--statistics-->
  <div class="container-fluid" id="graph-section">
    <dl>
      <dt>
        TU HISTORIAL
      </dt>
      <dd class="percentage percentage-50"><span class="text">BIBLIOTECA(UAM): 50%</span></dd>
      <dd class="percentage percentage-35"><span class="text">CUPULA(UAM): 35%</span></dd>
      <dd class="percentage percentage-10"><span class="text">BAVARIA(UAM): 10%</span></dd>
      <dd class="percentage percentage-5"><span class="text">FUNDADORES(UAM): 5%</span></dd>
    </dl>
</div>
@stop
