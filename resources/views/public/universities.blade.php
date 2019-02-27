@extends('layouts.public_structure')
@section('links')
<link rel="stylesheet" href="/css/universities_Style.css">
@stop
@section('content')
<!--page header-->
<div class="container-fluid" id="head">
  <img src="img/head_universities.jpg" class="img-head">
  <h1>¿Buscando un lugar para aparcar?</h1>
  <h3>Encuantra uno aqui!! Facil y rapido</h3>
  <h4>Registrate y obten mejor informacion de tus lugares favoritos</h4>
  <button type="button" class="btn btn-outline btn-lg" id="btn-head" onclick="location.href='/register'">
    Registrarse</button>
</div>

<!--cards-->
<div class="container-fluid padding" id="cards-section">
  <div class="row padding">
    <div class="col-md-4">
      <div class="card"style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Universidad</h4>
          <p class="card-text">De la ciudad de Manizales</p>
          <a href="parking/universidad" class="btn btn-outline-secondary" id="btn-card">ver estado</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Universidad</h4>
          <p class="card-text">De la ciudad de Manizales</p>
          <a href="parking/universidad" class="btn btn-outline-secondary" id="btn-card">ver estado</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Universidad</h4>
          <p class="card-text">De la ciudad de Manizales</p>
          <a href="parking/universidad" class="btn btn-outline-secondary" id="btn-card">ver estado</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Universidad</h4>
          <p class="card-text">De la ciudad de Manizales</p>
          <a href="parking/universidad" class="btn btn-outline-secondary" id="btn-card">ver estado</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Universidad</h4>
          <p class="card-text">De la ciudad de Manizales</p>
          <a href="parking/universidad" class="btn btn-outline-secondary" id="btn-card">ver estado</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Universidad</h4>
          <p class="card-text">De la ciudad de Manizales</p>
          <a href="parking/universidad" class="btn btn-outline-secondary" id="btn-card">ver estado</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
