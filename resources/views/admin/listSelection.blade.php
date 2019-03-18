@extends('layouts.admin_structure')
@section('links')
@stop
@section('content')
<h1>BIENVENIDO</h1>
<hr>

<div class="container-fluid padding" id="cards-section">
  <div class="row padding">
    <div class="col-sm-12 col-md-6 text-center">
      <div class="card"style="width: 18rem;">
        <img class="card-imd-top" src="img/admin/university.png" >
        <div class="card-body">
          <h4 class="card-title">Universidades</h4>
          <a href="/zonaLaboral" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 text-center">
      <div class="card" style="width: 18rem;">
        <img class="card-imd-top" src="img/admin/user.png" >
        <div class="card-body">
          <h4 class="card-title">Usuarios</h4>
          <a href="/zonaLaboral" class="btn btn-outline-secondary" id="btn-card">Ingresar</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
