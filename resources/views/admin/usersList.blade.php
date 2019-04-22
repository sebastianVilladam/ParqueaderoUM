@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/universitiesList_Style.css">
@stop
@section('content')
<h1>USUARIOS REGISTRADOS LLLL</h1>
<hr>

<div class="container-fluid padding center" id="table">
  <div class="list-group">
    @foreach($list as $user)
      <a href="{{route('userSettings', $user->id)}}" class="list-group-item list-group-item-action">{{ $user->name}}</a>
    @endforeach
  </div>
  <button type="button" class="btn btn-primary mb-2" id="btn-add" onclick="location.href='/nuevo usuario'">Añadir</button>
</div>
@stop
