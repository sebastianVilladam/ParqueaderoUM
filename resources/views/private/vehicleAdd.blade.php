@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVO VEHICULO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  <form>
  <div class="form-group">
    <label for="formGroupExampleInput">PLACA DEL VEHICULO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">MARCA:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">LINEA:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">COLOR:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">TIPO DE VEHICULO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="text-center">
    <button type="button" class="btn btn-primary" id="btn-save" onclick="location.href='/Mis vehiculos'">Añadir</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='/Mis vehiculos'">Cancelar</button>
  </div>
</form>
</div>
@stop
