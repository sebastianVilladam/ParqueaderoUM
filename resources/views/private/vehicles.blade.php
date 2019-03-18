@extends('layouts.private_structure')
@section('links')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/css/vehicles_Style.css">
@stop
@section('content')
<h1>MIS VEHICULOS</h1>
<hr>

<div class="container-fluid">
  <div class="list-group" id="vehicles-list">
    <a class="list-group-item">GHB753 Kia Picanto Blanco
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/Vehiculo'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
    <a class="list-group-item">JMN411 Ford Fiesta Negro
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/Vehiculo'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
  </div>
</div>

<button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='/Añadir vehiculo'">Añadir</button>
@stop
