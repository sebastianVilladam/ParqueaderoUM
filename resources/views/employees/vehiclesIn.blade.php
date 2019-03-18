@extends('layouts.employees_structure')
@section('links')
<link rel="stylesheet" href="/css/vehiclesIn_Style.css">
@stop
@section('content')
<h1>PARQUEADERO FUNDADORES</h1>
<hr>
<div class="container-fluid" id="indicator">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="text-center">
        <h1>Actualmente parqueados: 15</h1>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 text-center">
      <button type="button" class="btn btn-primary mb-2" id="btn-out" onclick="location.href='/zonaLaboral'">Volver</button>
    </div>
  </div>
</div>

<div class="container-fuild" id="history-section">
  <div class="list-group">
    <a class="list-group-item">GHB753 Kia Picanto Blanco</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
    <a class="list-group-item">GHB753 Kia Picanto Blanco</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
    <a class="list-group-item">GHB753 Kia Picanto Blanco</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
    <a class="list-group-item">GHB753 Kia Picanto Blanco</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
    <a class="list-group-item">GHB753 Kia Picanto Blanco</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
    <a class="list-group-item">GHB753 Kia Picanto Blanco</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
    <a class="list-group-item">GHB753 Kia Picanto Blanco</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro</a>
  </div>
</div>
@stop
