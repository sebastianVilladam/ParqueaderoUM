@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DE MI VEHICULO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['veSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('plate', 'PLACA:', ['class' => 'control-label']) !!}
    {!! Form::text('plate', null, ['class' => 'form-control' , 'placeholder' => '$data->plate']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('brand', 'MARCA:', ['class' => 'control-label']) !!}
    {!! Form::text('brand', null, ['class' => 'form-control' , 'placeholder' => '$data->brand']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('line', 'LINEA:', ['class' => 'control-label']) !!}
    {!! Form::text('line', null, ['class' => 'form-control' , 'placeholder' => '$data->line']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('color', 'COLOR:', ['class' => 'control-label']) !!}
    {!! Form::text('color', null, ['class' => 'form-control' , 'placeholder' => '$data->color']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('vehicles', $data->user_id)}}'">Cancelar</button>
  </div>
</div>
@stop
