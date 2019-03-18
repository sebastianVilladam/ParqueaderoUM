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
    <a href="/fav" class="list-group-item list-group-item-action">Parqueadero biblioteca
    <span class="badge badge-primary badge-pill">2</span></a>
    <a href="/fav" class="list-group-item list-group-item-action">Parqueadero fundadores
    <span class="badge badge-primary badge-pill">5</span></a>
    <a href="/fav" class="list-group-item list-group-item-action">Parqueadero edf principal
    <span class="badge badge-primary badge-pill">10</span></a>
  </div>
</div>

<!--image section-->
<div class="container-fluid" id="img-container"></div>

  <!--statistics-->
  <div class="container-fluid text-center" id="graph-section">
    <button type="button" class="btn btn-primary" id="btn-his" onclick="location.href='/historial'">Ver mi historial</button>
</div>
@stop
