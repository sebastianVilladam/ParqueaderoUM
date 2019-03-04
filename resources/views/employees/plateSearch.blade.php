@extends('layouts.employees_structure')
@section('links')
<link rel="stylesheet" href="/css/search_Style.css">
@stop
@section('content')
<!--search result setion-->
<div class="container-fluid">
  <div class="text-center">
    <img src="img/man.png" id="user-photo">
    <h2>Usuario numero uno</h2>
    <h2>HHW646</h2>
    <h3>555-555-555</h3>
    <h3>usuario01@gmail.com</h3>
    <button type="button" class="btn btn-primary mb-2" id="btn-out" onclick="location.href='/zonaLaboral'">Volver</button>
  </div>
</div>

<!--user history-->
<div class="container-fluid" id="history-section">
  <div class="text-center">
    <h1>HISTORIAL DE REGISTROS</h1>
  </div>
  <div class="list-group">
    <a class="list-group-item">HHW646 Fecha:04/03/2019 hora:15:20 Ingreso</a>
    <a class="list-group-item">HHW646 Fecha:01/03/2019 hora:15:00 Ingreso</a>
    <a class="list-group-item">HHW646 Fecha:28/02/2019 hora:14:52 Salida</a>
    <a class="list-group-item">HHW646 Fecha:27/03/2019 hora:14:23 Ingreso</a>
    <a class="list-group-item">HHW646 Fecha:27/03/2019 hora:10:30 Salida</a>
  </div>
</div>
@stop
