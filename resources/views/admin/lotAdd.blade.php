@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVO VEHICULO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  <form>
  <div class="form-group">
    <label for="formGroupExampleInput">NOMBRE DEL PARQUEADERO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">CAPACIDAD:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">TELEFONO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">UBICACION:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">UNIVERSIDAD:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="text-center">
    <button type="button" class="btn btn-primary" id="btn-save" onclick="location.href='/parqueaderos'">Añadir</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='/parqueaderos'">Cancelar</button>
  </div>
</form>
</div>
@stop
