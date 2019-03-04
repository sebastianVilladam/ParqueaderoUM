@extends('layouts.private_structure')
@section('links')
@stop
@section('content')
<!--parking lot info-->
<div class="container-fluid padding" id="info">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4" id="img-lot">
      <img src="/img/UAM/biblioteca.jpg">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
      <h4>tel: 123 456 789</h4>
      <h4>Dirección: Call 12 # 34 56</h4>
      <h4>Horario: lunes - viernes: 7:00 - 22:30</h4>
      <h4>sabados: 8:00 - 17:00</h4>
    </div>
    <div class="text-center col-sm-12 col-md-6 col-lg-4">
      <button type="button" class="btn btn-outline btn-lg" id="btn-head" onclick="location.href='/universidad'">
        Regresar</button>
    </div>
  </div>
</div>

<!--places free section-->
<div class="text-center"id="free">
  <div class="row">
    <div class="text-center col-sm-12 col-md-6">
      <h1>Capacidad: 30</h1>
    </div>
    <div class="text-center col-sm-12 col-md-6">
      <h1 class="free-text">Disponibles: 12</h1>
    </div>
  </div>
</div>
@stop
