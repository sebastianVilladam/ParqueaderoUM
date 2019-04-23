@extends('layouts.public_structure')
@section('links')
<link rel="stylesheet" href="/css/UPage_Style.css">
@stop
@section('content')
<!--U title-->
<div class="container-fluid padding" id="title">
  <div class="text-center">
    <h1>Parqueaderos de esta universidad</h1>
    <hr>
  </div>
</div>

<!--parking lots section-->
<div class="container-fluid padding center" id="table">
  <div class="list-group">
    @forelse($list as $parkingLot)
      <a href="{{ route('parkingLot',$parkingLot->id) }}" class="list-group-item list-group-item-action">{{$parkingLot->name}}</a>
    @empty
      <h3>Esta universidad no cuenta con parqueaderos registrados</h3>
    @endforelse
  </div>
</div>
@stop
