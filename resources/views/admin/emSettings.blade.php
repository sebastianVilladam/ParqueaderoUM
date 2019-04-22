@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>DATOS DEL EMPLEADO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['emSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('name', 'NOMBRE DEL VIGILANTE:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => '$data->name']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'EMAIL:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control' , 'placeholder' => '$data->email']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('company', 'COMPAÑIA:', ['class' => 'control-label']) !!}
    {!! Form::text('company', null, ['class' => 'form-control' , 'placeholder' => '$data->company']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('uEmployees', $data->uni_id)}}'">Cancelar</button>
  </div>
</div>
@stop
