@extends('layouts.private_structure')
@section('links')
<link rel="stylesheet" href="/css/history_Style.css">
@stop
@section('content')
<h1>MI HISTORIAL</h1>
<hr>
<div class="container-fluid" id="graph-section">
  <dl>
    <dt>
      VEHICULO: HHW646
    </dt>
    <dd class="percentage percentage-50"><span class="text">BIBLIOTECA(UAM): 50%</span></dd>
    <dd class="percentage percentage-35"><span class="text">CUPULA(UAM): 35%</span></dd>
    <dd class="percentage percentage-10"><span class="text">BAVARIA(UAM): 10%</span></dd>
    <dd class="percentage percentage-5"><span class="text">FUNDADORES(UAM): 5%</span></dd>
  </dl>
  <dl>
    <dt>
      VEHICULO: ABC123
    </dt>
    <dd class="percentage percentage-50"><span class="text">BIBLIOTECA(UAM): 50%</span></dd>
    <dd class="percentage percentage-35"><span class="text">CUPULA(UAM): 35%</span></dd>
    <dd class="percentage percentage-10"><span class="text">BAVARIA(UAM): 10%</span></dd>
    <dd class="percentage percentage-5"><span class="text">FUNDADORES(UAM): 5%</span></dd>
  </dl>
</div>
@stop
