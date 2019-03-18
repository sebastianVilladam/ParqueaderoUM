@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVO VIGILANTE</h1>
<hr>
<div class="container-fluid center" id="form-container">
  <form>
  <div class="form-group">
    <label for="formGroupExampleInput">NOMBRE DEL EMPLEADO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">TELEFONO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">EMPRESA:</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="text-center">
    <button type="button" class="btn btn-primary" id="btn-save" onclick="location.href='/vigilantes'">Añadir</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='/vigilantes'">Cancelar</button>
  </div>
</form>
</div>
@stop
