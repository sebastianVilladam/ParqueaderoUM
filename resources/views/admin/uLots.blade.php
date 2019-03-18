@extends('layouts.private_structure')
@section('links')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/css/vehicles_Style.css">
@stop
@section('content')
<h1>PARQUEADEROS</h1>
<hr>
<button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/administrar universidad'">Volver</button>

<div class="container-fluid">
  <div class="list-group" id="vehicles-list">
    <a class="list-group-item">Parqueadero edificio Fundadores
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/datos de parqueadero'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
    <a class="list-group-item">Parqueadero Bavaria parte baja
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/datos de parqueadero'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
    <a class="list-group-item">Parqueadero Bavaria parte alta
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/datos de parqueadero'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
  </div>
</div>

<button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='/nuevo parqueadero'">Añadir</button>
@stop
