{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')

    <div class="row">
          <div class="col-md-8 offset-md-2">
    <form action="{{ route('user.store') }}" method="post">
    	@csrf
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Creer un utilisateur</h3>
              </div>
              <div class="card-body">
                <!-- Nom -->
                <div class="form-group">
                  <label for="name">Nom et Prénom</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-id-card"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' :''}}" id="name" name="name" value="{{ old('name')}}">
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
                    <input type="text" class="form-control {{ $errors->has('psoeudo') ? 'is-invalid' :''}}" id="psoeudo" name="psoeudo" value="{{ old('psoeudo')}}">
                    {!! $errors->first('psoeudo','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>


                <div class="form-group">
                  <label for="pwd">Mot de passe</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control {{ $errors->has('pwd') ? 'is-invalid' :''}}" id="pwd" name="pwd" value="{{ old('pwd')}}">
                    {!! $errors->first('pwd','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label for="pwd2">Confirmer mot de passe</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control {{ $errors->has('pwd2') ? 'is-invalid' :''}}" id="pwd2" name="pwd2" value="{{ old('pwd2')}}">
                    {!! $errors->first('pwd2','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                  <label for="tel">Numéro de téléphone</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('tel') ? 'is-invalid' :''}}" id="tel" name="tel" value="{{old('tel')}}">
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
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' :''}}" id="email" name="email" value="{{old('email')}}">
                    {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                      <!-- select -->
                      <div class="form-group">
                        <label>Fonction</label>
                        <select class="custom-select" name="fonction" >
                          <option>Commercial</option>
                          <option>Administrateur</option>
                        </select>
                      </div>
                <!-- /.form group -->

              </div>
              <!-- /.card-body -->
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
         </form>
         </div>
       </div>
@stop