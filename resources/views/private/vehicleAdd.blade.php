@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/settings_Style.css">
@stop
@section('content')
<h1>AÑADIR NUEVO VEHICULO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::open(['route' => 'veAdd']) !!}
    <div class="form-group">
      {!! Form::label('plate', 'PLACA:', ['class' => 'control-label']) !!}
      {!! Form::text('plate', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::hidden('user_id', $u_id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('brand', 'MARCA DEL VEHICULO:', ['class' => 'control-label']) !!}
      {!! Form::text('brand', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('line', 'LINEA:', ['class' => 'control-label']) !!}
      {!! Form::text('line', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('color', 'COLOR:', ['class' => 'control-label']) !!}
      {!! Form::text('color', null, ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <button type="button" class="btn btn-primary" id="btn-cancel" onclick="location.href='{{route('vehicles', $u_id)}}'">Cancelar</button>
  {!! Form::close() !!}
</div>
@stop
