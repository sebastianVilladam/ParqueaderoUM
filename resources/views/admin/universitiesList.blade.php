@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/universitiesList_Style.css">
@stop
@section('content')
<h1>UNIVERSIDADES REGISTRADAS</h1>
<hr>

<div class="container-fluid padding center" id="table">
  <div class="list-group">
    @foreach($list as $university)
      <a href="{{route('adminU', $university->id)}}" class="list-group-item list-group-item-action">{{ $university->name}}</a>
    @endforeach
  </div>
  <button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='/nueva universidad'">Añadir</button>
</div>
@stop
