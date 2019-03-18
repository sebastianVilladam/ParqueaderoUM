@extends('layouts.admin_structure')
@section('links')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/css/vehicles_Style.css">
@stop
@section('content')
<h1>VIGILANTES</h1>
<hr>
<button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/administrar universidad'">Volver</button>

<div class="container-fluid">
  <div class="list-group" id="vehicles-list">
    <a class="list-group-item">Vigilante 1
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/datos del empleado'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
    <a class="list-group-item">vigilante 2
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/datos del empleado'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
    <a class="list-group-item">vigilante3
      <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='/datos del empleado'">Editar</button>
      <button type="button" class="btn btn-primary mb-2" id="btn-delete" onclick="#">Eliminar</button>
    </a>
  </div>
</div>

<button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='/nuevo vigilante'">Añadir</button>
@stop
