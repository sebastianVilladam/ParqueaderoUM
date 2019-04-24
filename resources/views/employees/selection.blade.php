@extends('layouts.employees_structure')
@section('links')
<link rel="stylesheet" href="/css/selection_Style.css">
@stop
@section('content')
<h1>{{$name}}</h1>
<hr>

<!--cards-->
<div class="container-fluid padding" id="cards-section">
  <div class="row padding">
    @forelse($list as $parkingLot)
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card"style="width: 18rem;">
          <img class="card-imd-top" src="img/university.jpg" >
          <div class="card-body">
            <h4 class="card-title">{{$parkingLot->name}}</h4>
            <a href="{{route('place', $parkingLot->id)}}" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
          </div>
        </div>
      </div>
    @empty
      <h3>Su universidad no tiene parqueaderos registrados</h3>
    @endforelse
  </div>
</div>
@stop
