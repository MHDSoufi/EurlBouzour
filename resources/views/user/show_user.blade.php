{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="invoice col-md-8 offset-md-2">
      <div class="row">
        <div class="col-10 offset-1">
          <h4>
            {{$user->name}}
          </h4>
          <hr>
        </div>       
      </div>
       <h4>{{$user->psoeudo}}</h4>
       <p><i class="fas fa-briefcase"></i> {{$user->fonction}}</p>
       <p><i class="fas fa-envelope"></i> {{ ($user->email) ? $user->email : "Aucun Adresse n'a été enregistrer" }}</p>
       <p>{{ ($user->tel) ? $user->tel : "Aucun numéro de téléphone n'a été enregistrer" }}</p>
       <hr>
       <a href="{{ route('user.index') }}" class="btn  btn-default btn-flat">Tous les utilisateurs</a>
       <a href="{{ route('user.edit' ,$user->id)}}" class="btn  btn-primary btn-flat float-right">Modifier l'utilisateur</a>
    </div>
  </div>
</div>


@stop
@section('plugins.Datatables', true)
@section('css')

@stop
@section('js')

@stop