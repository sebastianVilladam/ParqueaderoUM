@extends('layouts.employees_structure')
@section('links')
<link rel="stylesheet" href="/css/selection_Style.css">
@stop
@section('content')
<h1>UNIVERSIDAD DE MANIZALES</h1>
<hr>

<!--cards-->
<div class="container-fluid padding" id="cards-section">
  <div class="row padding">
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="card"style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Biblioteca</h4>
          <a href="/zonaLaboral" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Fundadores</h4>
          <a href="/zonaLaboral" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/university.jpg" >
        <div class="card-body">
          <h4 class="card-title">Edf principal</h4>
          <a href="/zonaLaboral" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
