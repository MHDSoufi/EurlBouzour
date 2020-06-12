{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="invoice col-md-10 offset-md-1">
      <div class="row">
        <div class="col-6">
          <label>Nom de la promotion</label>
          <h4>
            {{$promo->nom_promo}}
          </h4>

          <hr>          
          <label>Adresse:</label>
          <div class="adr">
          <h5>{{$promo->adr}}</h5>
          </div>
          <label>Description:</label>
          <p>
            {{$promo->description}}
          </p>
        </div>  
        <div class="col-6">
          @for
          {{dd(getLienImageAll($promo->id))}}
        </div>     
      </div>
    </div>
  </div>
</div>


@stop
@section('plugins.Datatables', true)
@section('css')

@stop
@section('js')

@stop