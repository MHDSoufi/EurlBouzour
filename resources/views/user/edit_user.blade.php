{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')

    <div class="row">
          <div class="col-md-8 offset-md-2">
    <form action="{{ route('user.update', $user->id) }}" method="post">
    	@csrf
      @method('PUT')
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifer l'utilisateur</h3>
              </div>
              <div class="card-body">
                <!-- Nom -->
                <div class="form-group">
                  <label for="name">Nom et Prénom</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-id-card"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' :''}}" id="name" name="name" value="{{ (old('name')) ? old('name') : $user->name }}">
                    {!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label for="psoeudo">Psoeudo</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('psoeudo') ? 'is-invalid' :''}}" id="psoeudo" name="psoeudo" value="{{ (old('psoeudo')) ? old('psoeudo') : $user->psoeudo}}">
                    {!! $errors->first('psoeudo','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- phone mask -->
                <div class="form-group">
                  <label for="tel">Numéro de téléphone</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('tel') ? 'is-invalid' :''}}" id="tel" name="tel" value="{{(old('tel')) ? old('tel') : $user->tel}}">
                    {!! $errors->first('tel','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label for="email">Email</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' :''}}" id="email" name="email" value="{{(old('email')) ? old('email') : $user->email}}">
                    {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                      <!-- select -->
                      <div class="form-group">
                        <label>Fonction</label>
                        <select class="custom-select" name="fonction" >
                          <option>{{$user->fonction}}</option>
                          <option>{{($user->fonction == "Administrateur") ? "Commercial" : "Administrateur" }}</option>
                        </select>
                      </div>
                <!-- /.form group -->

              </div>
              <!-- /.card-body -->
            </div>
            <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
            <a href="{{ URL::previous() }}" class="btn btn-default float-left">Annuler</a>
         </form>
         </div>
       </div>
@stop