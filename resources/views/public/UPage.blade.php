@extends('layouts.public_structure')
@section('links')
<link rel="stylesheet" href="/css/UPage_Style.css">
@stop
@section('content')
<!--U title-->
<div class="container-fluid padding" id="title">
  <div class="text-center">
    <h1>Universidad de manizales</h1>
    <hr>
  </div>
</div>

<!--parking lots section-->
<div class="container-fluid padding center" id="table">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">Parqueadero 1</a>
    <a href="#" class="list-group-item list-group-item-action">Parqueadero 2</a>
    <a href="#" class="list-group-item list-group-item-action">Parqueadero 3</a>
    <a href="#" class="list-group-item list-group-item-action">Parqueadero 4</a>
    <a href="#" class="list-group-item list-group-item-action">Parqueadero 5</a>
  </div>
</div>
@stop
