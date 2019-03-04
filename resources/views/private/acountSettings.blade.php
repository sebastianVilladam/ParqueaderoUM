@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DE CUENTA</h1>
<hr>
<div class="container-fluid center" id="form-container">
  <form>
  <div class="form-group">
    <label for="formGroupExampleInput">NOMBRE DE USUARIO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ususario numero uno">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">CORREO ELECTRONICO:</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="usuario01@gmail.com">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">TELEFONO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="555-555-555">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">PLACA DE VEHICULO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ABC123">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">OCUPACION:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Estudiante, ing. sistemas">
  </div>
  <div class="text-center">
    <button type="button" class="btn btn-primary" id="btn-save" onclick="location.href='/Mi cuenta'">Guardar cambios</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='/favoritos'">Cancelar</button>
  </div>
</form>
</div>
@stop
