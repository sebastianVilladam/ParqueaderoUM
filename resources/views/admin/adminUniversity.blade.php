@extends('layouts.admin_structure')
@section('links')
<link rel="stylesheet" href="/css/listSelection_Style.css">
<link rel="stylesheet" href="/css/adminUniversity_Style.css">
@stop
@section('content')
<h1>{{ $data->name }}</h1>
<hr>
<!--buttons section-->
<div class="container-fluid" id="buttons">
  <div class="row">
    <div class="col-sm-12 col-md-6 text-center">
      <button type="button" class="btn btn-primary mb-2" id="btn-out" onclick="location.href='{{route('uSettings', $data->id)}}'">Editar universidad</button>
    </div>
    <div class="col-sm-12 col-md-6 text-center">
      {!! Form::open(['method' => 'DELETE','route' => ['uDelete', $data->id]]) !!}
        {!! Form::submit('Eliminar universidad', ['class' => 'btn btn-primary mb-2', 'id' => 'btn-out']) !!}
      {!! Form::close() !!}
      <!--<button type="button" class="btn btn-primary mb-2" id="btn-out" onclick="#">Eliminar universidad</button>-->
    </div>
  </div>
</div>

<!--cards section-->
<div class="container-fluid padding" id="cards-section">
  <div class="row padding">
    <div class="col-sm-12 col-md-6 text-center">
      <div class="card"style="width: 18rem;">
        <img class="card-imd-top" src="../img/admin/parking.png" >
        <div class="card-body">
          <h4 class="card-title">Parqueaderos</h4>
          <a href="/parqueaderos" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 text-center">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="../img/admin/user.png" >
        <div class="card-body">
          <h4 class="card-title">Vigilantes</h4>
          <a href="/vigilantes" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
