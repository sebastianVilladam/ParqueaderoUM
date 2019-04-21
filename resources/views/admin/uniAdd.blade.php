@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVA UNIVERSIDAD</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::open(['route' => 'uniAdd']) !!}
  <div class="form-group">
    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('phone_number', 'Telefono', ['class' => 'control-label']) !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
  </div>
  <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
  <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='/universidades'">Cancelar</button>
{!! Form::close() !!}
</div>
@stop
