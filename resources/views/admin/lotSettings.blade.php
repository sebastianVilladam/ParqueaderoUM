@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DEL PARQUEADERO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  <form>
  <div class="form-group">
    <label for="formGroupExampleInput">NOMBRE DEL PARQUEADERO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Parqueadero edificio Fundadores">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">CAPACIDAD:</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="25">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">TELEFONO:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="555-555-555">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">UBICACION:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="call 12 # 34 56">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">UNIVERSIDAD:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Universidad Autonoma de Manizales">
  </div>
  <div class="text-center">
    <button type="button" class="btn btn-primary" id="btn-save" onclick="location.href='/parqueaderos'">Guardar cambios</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='/parqueaderos'">Cancelar</button>
  </div>
</form>
</div>
@stop
