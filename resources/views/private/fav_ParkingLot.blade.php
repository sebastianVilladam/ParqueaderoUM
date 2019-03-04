@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/parkingLot_Style.css">
<link rel="stylesheet" href="/css/favP_Style.css">
@stop
@section('content')
<!--parking lot info-->
<div class="container-fluid padding" id="info">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4" id="img-lot">
      <img src="/img/UAM/biblioteca.jpg">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
      <h4>tel: 123 456 789</h4>
      <h4>Dirección: Call 12 # 34 56</h4>
      <h4>Horario: lunes - viernes: 7:00 - 22:30</h4>
      <h4>sabados: 8:00 - 17:00</h4>
    </div>
    <div class="text-center col-sm-12 col-md-6 col-lg-4">
      <button type="button" class="btn btn-outline btn-lg" id="btn-head" onclick="location.href='/favoritos'">
        Regresar</button>
    </div>
  </div>
</div>

<!--places free section-->
<div class="text-center"id="free">
  <div class="row">
    <div class="text-center col-sm-12 col-md-6">
      <h1>Capacidad: 30</h1>
    </div>
    <div class="text-center col-sm-12 col-md-6">
      <h1 class="free-text">Disponibles: 12</h1>
    </div>
  </div>
</div>

<!--statistics section-->
<div class="container-fluid" id="graphs-section">
  <div class="text-center">
    <h1>VOLUMEN DIARIO DE ESTE PARQUEADERO</h1>
  </div>
  <div class="row">
    <div class="col-md-12 col-lg-6">
        <dl>
          <dt>
            LUNES
          </dt>
          <dd class="percentage percentage-80"><span class="text">7:00-8:00 : 80%</span></dd>
          <dd class="percentage percentage-100"><span class="text">9:00-10:00: 100%</span></dd>
          <dd class="percentage percentage-50"><span class="text">11:00-12:00: 50%</span></dd>
          <dd class="percentage percentage-70"><span class="text">13:00-14:00: 70%</span></dd>
          <dd class="percentage percentage-100"><span class="text">15:00-16:00: 100%</span></dd>
          <dd class="percentage percentage-100"><span class="text">17:00-18:00: 100%</span></dd>
          <dd class="percentage percentage-60"><span class="text">19:00-20:00: 60%</span></dd>
          <dd class="percentage percentage-30"><span class="text">21:00-22:00: 30%</span></dd>
        </dl>
      </div>
        <hr>
      <div class="col-md-12 col-lg-6">
        <dl>
          <dt>
            MARTES
          </dt>
          <dd class="percentage percentage-80"><span class="text">7:00-8:00 : 80%</span></dd>
          <dd class="percentage percentage-100"><span class="text">9:00-10:00: 100%</span></dd>
          <dd class="percentage percentage-50"><span class="text">11:00-12:00: 50%</span></dd>
          <dd class="percentage percentage-70"><span class="text">13:00-14:00: 70%</span></dd>
          <dd class="percentage percentage-100"><span class="text">15:00-16:00: 100%</span></dd>
          <dd class="percentage percentage-100"><span class="text">17:00-18:00: 100%</span></dd>
          <dd class="percentage percentage-60"><span class="text">19:00-20:00: 60%</span></dd>
          <dd class="percentage percentage-30"><span class="text">21:00-22:00: 30%</span></dd>
        </dl>
      </div>
        <hr>
      <div class="col-md-12 col-lg-6">
        <dl>
          <dt>
            MIERCOLES
          </dt>
          <dd class="percentage percentage-80"><span class="text">7:00-8:00 : 80%</span></dd>
          <dd class="percentage percentage-100"><span class="text">9:00-10:00: 100%</span></dd>
          <dd class="percentage percentage-50"><span class="text">11:00-12:00: 50%</span></dd>
          <dd class="percentage percentage-70"><span class="text">13:00-14:00: 70%</span></dd>
          <dd class="percentage percentage-100"><span class="text">15:00-16:00: 100%</span></dd>
          <dd class="percentage percentage-100"><span class="text">17:00-18:00: 100%</span></dd>
          <dd class="percentage percentage-60"><span class="text">19:00-20:00: 60%</span></dd>
          <dd class="percentage percentage-30"><span class="text">21:00-22:00: 30%</span></dd>
        </dl>
      </div>
        <hr>
      <div class="col-md-12 col-lg-6">
        <dl>
          <dt>
            JUEVES
          </dt>
          <dd class="percentage percentage-80"><span class="text">7:00-8:00 : 80%</span></dd>
          <dd class="percentage percentage-100"><span class="text">9:00-10:00: 100%</span></dd>
          <dd class="percentage percentage-50"><span class="text">11:00-12:00: 50%</span></dd>
          <dd class="percentage percentage-70"><span class="text">13:00-14:00: 70%</span></dd>
          <dd class="percentage percentage-100"><span class="text">15:00-16:00: 100%</span></dd>
          <dd class="percentage percentage-100"><span class="text">17:00-18:00: 100%</span></dd>
          <dd class="percentage percentage-60"><span class="text">19:00-20:00: 60%</span></dd>
          <dd class="percentage percentage-30"><span class="text">21:00-22:00: 30%</span></dd>
        </dl>
      </div>
        <hr>
      <div class="col-md-12 col-lg-6">
        <dl>
          <dt>
            VIERNES
          </dt>
          <dd class="percentage percentage-80"><span class="text">7:00-8:00 : 80%</span></dd>
          <dd class="percentage percentage-100"><span class="text">9:00-10:00: 100%</span></dd>
          <dd class="percentage percentage-50"><span class="text">11:00-12:00: 50%</span></dd>
          <dd class="percentage percentage-70"><span class="text">13:00-14:00: 70%</span></dd>
          <dd class="percentage percentage-100"><span class="text">15:00-16:00: 100%</span></dd>
          <dd class="percentage percentage-100"><span class="text">17:00-18:00: 100%</span></dd>
          <dd class="percentage percentage-60"><span class="text">19:00-20:00: 60%</span></dd>
          <dd class="percentage percentage-30"><span class="text">21:00-22:00: 30%</span></dd>
        </dl>
      </div>
        <hr>
      <div class="col-md-12 col-lg-6">
        <dl>
          <dt>
            SABADO
          </dt>
          <dd class="percentage percentage-50"><span class="text">8:00-9:00 : 50%</span></dd>
          <dd class="percentage percentage-40"><span class="text">10:00-11:00: 40%</span></dd>
          <dd class="percentage percentage-20"><span class="text">12:00-13:00: 20%</span></dd>
          <dd class="percentage percentage-70"><span class="text">14:00-15:00: 70%</span></dd>
          <dd class="percentage percentage-50"><span class="text">16:00-17:00: 50%</span></dd>
        </dl>
      </div>
    </div>
  </div>
@stop
