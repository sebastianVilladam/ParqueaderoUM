@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DEL PARQUEADERO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['lotSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('name', 'NOMBRE DEL PARQUEADERO:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => '$data->name']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('adress', 'DIRECCION:', ['class' => 'control-label']) !!}
    {!! Form::text('adress', null, ['class' => 'form-control' , 'placeholder' => '$data->adress']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('phone_number', 'TELEFONO:', ['class' => 'control-label']) !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control' , 'placeholder' => '$data->phone_number']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('schedule', 'HORARIO:', ['class' => 'control-label']) !!}
    {!! Form::text('schedule', null, ['class' => 'form-control' , 'placeholder' => '$data->schedule']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('capacity', 'CAPACIDAD:', ['class' => 'control-label']) !!}
    {!! Form::text('capacity', null, ['class' => 'form-control' , 'placeholder' => '$data->capacity']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('uLots', $data->university_id)}}'">Cancelar</button>
  </div>
</div>
@stop
