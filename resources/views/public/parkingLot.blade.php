@extends('layouts.public_structure')
@section('links')
<link rel="stylesheet" href="/css/parkingLot_Style.css">
@stop
@section('content')
<!--parking lot info-->
<div class="container-fluid padding" id="info">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4" id="img-lot">
      <img src="/img/UAM/biblioteca.jpg">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
      <h4>tel: {{$data->phone_number}}</h4>
      <h4>Dirección: {{$data->adress}}</h4>
      <h4>Horario: {{$data->schedule}}</h4>
    </div>
    <div class="text-center col-sm-12 col-md-6 col-lg-4">
      <button type="button" class="btn btn-outline btn-lg" id="btn-head" onclick="location.href='{{ route('parkingU', $data->university_id)}}'">
        Regresar</button>
    </div>
  </div>
</div>

<!--places free section-->
<div class="text-center"id="free">
  <div class="row">
    <div class="text-center col-sm-12 col-md-6">
      <h1>Capacidad: {{$data->capacity}}</h1>
    </div>
    <div class="text-center col-sm-12 col-md-6">
      <h1 class="free-text">Disponibles: {{$data->free}}</h1>
    </div>
  </div>
</div>
@stop
