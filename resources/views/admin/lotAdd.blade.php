@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVO PARQUEADERO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::open(['route' => 'lotAdd']) !!}
    <div class="form-group">
      {!! Form::hidden('university_id', $u_id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('name', 'NOMBRE DEL PARQUEADERO:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('adress', 'DIRECCION:', ['class' => 'control-label']) !!}
      {!! Form::text('adress', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('phone_number', 'TELEFONO:', ['class' => 'control-label']) !!}
      {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('schedule', 'HORARIO:', ['class' => 'control-label']) !!}
      {!! Form::text('schedule', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('capacity', 'CAPACIDAD:', ['class' => 'control-label']) !!}
      {!! Form::text('capacity', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('free', 'CAMPOS LIBRES:', ['class' => 'control-label']) !!}
      {!! Form::text('free', null, ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('uLots', $u_id)}}'">Cancelar</button>
  {!! Form::close() !!}
</div>
@stop
