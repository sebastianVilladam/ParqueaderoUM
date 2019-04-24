@extends('layouts.employees_structure')
@section('links')
<link rel="stylesheet" href="/css/laborPlace_Style.css">
@stop
@section('content')
<h1>{{$data->name}}</h1>
<hr>

<!--search section-->
<div class="container-fluid">
  <div class="row padding">
    <div class="col-sm-12 col-md-6">
      <form class="form-inline">
        <div class="form-group mb-2">
          <label for="staticEmail2" class="sr-only">Busqueda de informacion porplaca:</label>
          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Busqueda de placa:">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">placa</label>
          <input type="text" class="form-control" id="inputPassword2" placeholder="Placa del vehiculo">
        </div>
        <button type="button" class="btn btn-primary mb-2" id="btn-out" onclick="location.href='/busqueda'">Buscar</button>
      </form>
    </div>
    <div class="col-sm-12 col-md-6 text-center">
      <button type="button" class="btn btn-primary mb-2" id="btn-out" onclick="location.href='/vehiculos'">Ver vehiculos actuales</button>
    </div>
  </div>
</div>

<!--vehicle plate register section-->
<div class="container-fluid" id="register-form">
  {!! Form::open(['route' => 'addParking']) !!}
    <div class="form-group">
      {!! Form::hidden('parkingLot_id', $data->id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('vehicle_plate', 'PLACA DEL VAHIUCLO:', ['class' => 'control-label']) !!}
      {!! Form::text('vehicle_plate', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::hidden('hour', date('H:i'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::select('action',['Ingreso' => 'Ingreso','Salida'=>'Salida'],'Ingreso',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('observations', 'OBSERVACIONES:', ['class' => 'control-label']) !!}
      {!! Form::textarea('observations', null, ['class' => 'form-control']) !!}
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary" id="btn-in">Enviar</button>
    </div>
  {!! Form::close() !!}
</div>

<!--capacity and places free section-->
<div class="container-fluid" id="info-section">
  <div class="row">
    <div class="col-xm-12 col-sm-6">
      <div class="text-center">
        <h1 id="title1">Capacidad: {{$data->capacity}}</h1>
      </div>
    </div>
    <div class="col-xm-12 col-sm-6">
      <div class="text-center">
        <h1 id="title2">Disponibilidad: {{$data->free}}</h1>
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
    @forelse($registers as $parking)
      <a class="list-group-item">{{$parking->vehicle_plate}} Fecha:{{$parking->created_at}} hora:{{$parking->hour}} {{$parking->action}}</a>
    @empty
    @endforelse
    <!--<a class="list-group-item">GHB753 Fecha:04/03/2019 hora:15:20 Ingreso</a>
    <a class="list-group-item">JMN411 Fecha:04/03/2019 hora:15:00 Ingreso</a>
    <a class="list-group-item">HHF733 Fecha:04/03/2019 hora:14:52 Salida</a>
    <a class="list-group-item">JRS451 Fecha:04/03/2019 hora:14:23 Ingreso</a>
    <a class="list-group-item">QRT656 Fecha:04/03/2019 hora:13:30 Salida</a>-->
  </div>
</div>
@stop
