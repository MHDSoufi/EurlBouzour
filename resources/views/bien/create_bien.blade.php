{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')
    <div class="row">
          <div class="col-md-10 offset-md-1">
    <form action="{{ route('bien.store') }}" method="post">
    	@csrf
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Creer un bien</h3>
              </div>
              <div class="card-body">
                 <div class="form-group">                  
                  <label>Type</label>
                  <select class="form-control select2" style="width: 100%;" id="type" name="type">
                    <option value="Appartement">Appartement</option>
                    <option value="Bureau">Bureau</option>
                    <option value="Local">Local</option>
                    <option value="Place">Place de parking</option>
                  </select>             
                </div>
                <div class="form-group">                  
                  <label for="name">Intitulet du bien</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-font"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('intitulet') ? 'is-invalid' :''}}" id="intitulet" name="intitulet" value="{{ old('intitulet')}}">
                    {!! $errors->first('intitulet','<div class="invalid-feedback">:message</div>') !!}
                  </div>              
                </div>         
                <div class="form-group">                  
                  <label for="name">Surface du bien</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-chart-area"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('surface') ? 'is-invalid' :''}}" id="surface" name="surface" value="{{ old('surface')}}">
                    {!! $errors->first('surface','<div class="invalid-feedback">:message</div>') !!}
                  </div>              
                </div>
                 <div class="form-group">                  
                  <label for="name">Prix du bien</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-coins"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('prix') ? 'is-invalid' :''}}" id="prix" name="prix" value="{{ old('prix')}}">
                    {!! $errors->first('prix','<div class="invalid-feedback">:message</div>') !!}
                  </div>              
                </div>
                <div class="form-group"> 
                  <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                     <select multiple name="promotion[]">
                      <option>Selection les promotions</option>
                     </select>
                    <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                      <label for="one">
                        <input type="checkbox" id="one" />First checkbox</label>
                      <label for="two">
                      <input type="checkbox" id="two" />Second checkbox</label>
                      <label for="three">
                      <input type="checkbox" id="three" />Third checkbox</label>
                      </div>
                  </div>
                </div>
                
    
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
         </form>
         </div>
       </div>



@stop
@section('plugins.Select2', true)
@section('css')
<style type="text/css">
  .multiselect {
  width: 100%;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
  
</style>
@stop
@section('js')
<script type="text/javascript">
$('#type').on("change", function(event){
  var intitulet = document.getElementById("intitulet");
  var surface = document.getElementById("surface");
  var type = document.getElementById("type");
  if(type.value == "Place"){
    intitulet.disabled  = true;
  }
  switch(type.value) {
  case "Place":
    intitulet.disabled  = true;
    surface.disabled = true;
    break;
  case "Local":
    intitulet.disabled = true;
    break;
  case "Bureau":
   intitulet.disabled = true;
    break;
  default:
    intitulet.disabled  = false;
    surface.disabled = false;
}
});
var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>
@stop