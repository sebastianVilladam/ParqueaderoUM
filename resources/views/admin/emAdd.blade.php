@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVO VIGILANTE</h1>
<hr>
<div class="container-fluid center" id="form-container">

  {!! Form::open(['route' => 'emAdd']) !!}
    <div class="form-group">
      {!! Form::label('name', 'NOMBRE DEL VIGILANTE:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email', 'EMAIL:', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('password', 'CONTRASEÑA:', ['class' => 'control-label']) !!}
      {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::hidden('role_id',2, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::hidden('uni_id', $u_id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('company', 'COMPAÑIA:', ['class' => 'control-label']) !!}
      {!! Form::text('company', null, ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('uEmployees', $u_id)}}'">Cancelar</button>
  {!! Form::close() !!}
</div>
@stop
