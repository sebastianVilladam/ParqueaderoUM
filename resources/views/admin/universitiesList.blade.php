@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/universitiesList_Style.css">
@stop
@section('content')
<h1>UNIVERSIDADES REGISTRADAS</h1>
<hr>

<div class="container-fluid padding center" id="table">
  <div class="list-group">
    <a href="/administrar universidad" class="list-group-item list-group-item-action">Universidad Autonoma de Manizales</a>
    <a href="/administrar universidad" class="list-group-item list-group-item-action">Universidad de Manizales</a>
    <a href="/administrar universidad" class="list-group-item list-group-item-action">Universidad Nacional</a>
    <a href="/administrar universidad" class="list-group-item list-group-item-action">Universidad de Caldas</a>
  </div>
</div>
@stop
