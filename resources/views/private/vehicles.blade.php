@extends('layouts.private_structure')
@section('links')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="/css/vehicles_Style.css">
@stop
@section('content')
<h1>MIS VEHICULOS</h1>
<hr>
<button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='{{route('fav',auth()->id())}}'">Volver</button>

<div class="container-fluid">
  <div class="list-group" id="vehicles-list">
    @foreach($list as $vehicle)
      <a class="list-group-item">{{ $vehicle->plate }}
        <button type="button" class="btn btn-primary mb-2" id="btn-edit" onclick="location.href='{{ route('veSettings', $vehicle->id)}}'">Editar</button>
        {!! Form::open(['method' => 'DELETE','route' => ['veDelete', $vehicle->id]]) !!}
          {!! Form::submit('Eliminar', ['class' => 'btn btn-primary mb-2', 'id' => 'btn-delete']) !!}
        {!! Form::close() !!}
      </a>
    @endforeach
  </div>
<button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='{{route('veAddForm', $u_id)}}'">Añadir</button>
@stop
