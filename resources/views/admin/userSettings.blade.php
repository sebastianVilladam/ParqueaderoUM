@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DEL USUARIO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['userSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('name', 'NOMBRE DEL USUARIO:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => '$data->name']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'EMAIL:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control' , 'placeholder' => '$data->email']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <button type="button" class="btn btn-primary" id="btn-save" onclick="location.href='{{route('userVehicles', $data->id)}}'">Vehiculos de este usuario</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('users')}}'">Cancelar</button>
  </div>
  {!! Form::close() !!}
  {!! Form::open(['method' => 'DELETE','route' => ['userDelete', $data->id]]) !!}
    {!! Form::submit('Eliminar', ['class' => 'btn btn-primary', 'id' => 'btn-cancel']) !!}
  {!! Form::close() !!}
</div>
@stop
