@extends('layouts.admin_structure')
@section('links')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/css/vehicles_Style.css">
@stop
@section('content')
<h1>VEHICULOS</h1>
<hr>
<button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='{{route('userSettings', $u_id)}}'">Volver</button>

<div class="container-fluid">
  <div class="list-group" id="vehicles-list">
    @foreach($list as $vehicle)
      <a class="list-group-item">{{ $vehicle->plate }}
        <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='{{ route('vehicleSettings', $vehicle->id)}}'">Editar</button>
        {!! Form::open(['method' => 'DELETE','route' => ['vehicleDelete', $vehicle->id]]) !!}
          {!! Form::submit('Eliminar', ['class' => 'btn btn-primary mb-2', 'id' => 'btn-delete']) !!}
        {!! Form::close() !!}
      </a>
    @endforeach
  </div>
<button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='{{route('vehicleAddForm', $u_id)}}'">Añadir</button>
@stop
