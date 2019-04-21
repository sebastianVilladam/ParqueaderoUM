@extends('layouts.admin_structure')
@section('links')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/css/vehicles_Style.css">
@stop
@section('content')
<h1>PARQUEADEROS</h1>
<hr>
<button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='{{route('adminU', $u_id)}}'">Volver</button>

<div class="container-fluid">
  <div class="list-group" id="vehicles-list">
    @foreach($list as $parkingLot)
      <a class="list-group-item">{{ $parkingLot->name }}
        <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='{{ route('lotSettings', $parkingLot->id)}}'">Editar</button>
        {!! Form::open(['method' => 'DELETE','route' => ['parkDelete', $parkingLot->id]]) !!}
          {!! Form::submit('Eliminar', ['class' => 'btn btn-primary mb-2', 'id' => 'btn-delete']) !!}
        {!! Form::close() !!}
      </a>
    @endforeach
  </div>
<button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='{{route('lotAddForm', $u_id)}}'">Añadir</button>
@stop
