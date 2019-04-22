@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVO USUARIO</h1>
<hr>
<div class="container-fluid center" id="form-container">

  {!! Form::open(['route' => 'userAdd']) !!}
    <div class="form-group">
      {!! Form::label('name', 'NOMBRE DEL USUARIO:', ['class' => 'control-label']) !!}
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
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('users')}}'">Cancelar</button>
  {!! Form::close() !!}
</div>
@stop
