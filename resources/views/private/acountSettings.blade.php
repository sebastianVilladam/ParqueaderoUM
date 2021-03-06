@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DE CUENTA</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['acountSettings', $data->id]]) !!}
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
    <button type="button" class="btn btn-primary" id="btn-save" onclick="location.href='{{route('vehicles', $data->id)}}'">Mis vehiculos</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('fav',$data->id)}}'">Cancelar</button>
  </div>
</div>
@stop
