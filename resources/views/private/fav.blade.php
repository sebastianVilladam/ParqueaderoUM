@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/fav_Style.css">
@stop
@section('content')
<h1>FAVORITOS</h1>
<hr>

<!--Favorite section-->
<div class="container-fluid padding center" id="table">
  <div class="list-group">
    @forelse($list as $favorite)
      <a href="{{route('favP', $favorite->id)}}" class="list-group-item list-group-item-action">{{$favorite->name}}
      <span class="badge badge-primary badge-pill">{{$favorite->free}}</span></a>
    @empty
      <h3>Aun no tienes favoritos, ve y busca tus lugares de interes y disfruta de informacion adicional</h3>
    @endforelse
  </div>
</div>

<!--image section-->
<div class="container-fluid" id="img-container"></div>

  <!--statistics-->
  <div class="container-fluid text-center" id="graph-section">
    <button type="button" class="btn btn-primary" id="btn-his" onclick="location.href='/historial'">Ver mi historial</button>
</div>
@stop
