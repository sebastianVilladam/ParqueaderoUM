@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DE UNIVERSIDAD</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['uSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('name', 'NOMBRE DE LA UNIVERSIDAD:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '$data->name']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'CORREO ELECTRONICO:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '$data->email']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('phone_number', 'TELEFONO:', ['class' => 'control-label']) !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => '$data->phone_number']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('adminU', $data->id)}}'">Cancelar</button>
  </div>
  {!! Form::close() !!}
</div>
@stop
