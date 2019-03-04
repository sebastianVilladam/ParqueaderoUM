@extends('layouts.employees_structure')
@section('links')
<link rel="stylesheet" href="/css/laborPlace_Style.css">
@stop
@section('content')
<h1>PARQUEADERO FUNDADORES</h1>
<hr>

<!--search section-->
<div class="container-fluid">
  <form class="form-inline">
    <div class="form-group mb-2">
      <label for="staticEmail2" class="sr-only">Busqueda de informacion porplaca:</label>
      <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Busqueda de placa:">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="inputPassword2" class="sr-only">placa</label>
      <input type="text" class="form-control" id="inputPassword2" placeholder="Placa del vehiculo">
    </div>
    <button type="submit" class="btn btn-primary mb-2" id="btn-out">Buscar</button>
  </form>
</div>

<!--vehicle plate register section-->
<div class="container-fluid" id="register-form">
  <form method="post">
    <div class="form-group" id="register-input">
      <label for="exampleFormControlInput1">PLACA DEL VEHICULO:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ABC123">
    </div>
    <div class="form-group" id="register-input">
      <label for="exampleFormControlTextarea1">OBSERVACIONES:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>
  <div class="text-center">
    <button type="button" class="btn btn-primary" id="btn-in" onclick="location.href='/zonaLaboral'">Ingreso</button>
    <button type="button" class="btn btn-primary" id="btn-out" onclick="location.href='/zonaLaboral'">Salida</button>
  </div>
</div>

<!--capacity and places free section-->
<div class="container-fluid" id="info-section">
  <div class="row">
    <div class="col-xm-12 col-sm-6">
      <div class="text-center">
        <h1 id="title1">Capacidad: 20</h1>
      </div>
    </div>
    <div class="col-xm-12 col-sm-6">
      <div class="text-center">
        <h1 id="title2">Disponibilidad: 5</h1>
      </div>
    </div>
  </div>
</div>

<!--register history-->
<div class="container-fluid" id="history-section">
  <div class="text-center">
    <h1>HISTORIAL DE REGISTROS</h1>
  </div>
  <div class="list-group">
    <a class="list-group-item">GHB753 Fecha:04/03/2019 hora:15:20 Ingreso</a>
    <a class="list-group-item">JMN411 Fecha:04/03/2019 hora:15:00 Ingreso</a>
    <a class="list-group-item">HHF733 Fecha:04/03/2019 hora:14:52 Salida</a>
    <a class="list-group-item">JRS451 Fecha:04/03/2019 hora:14:23 Ingreso</a>
    <a class="list-group-item">QRT656 Fecha:04/03/2019 hora:13:30 Salida</a>
  </div>
</div>
@stop
