{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')
    <div class="row">
          <div class="col-md-10 offset-md-1">
    <form action="{{ route('promo.store') }}" method="post">
    	@csrf
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Creer une promotion</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  
                  <label for="name">Nom de la promotion</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-id-card"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' :''}}" id="name" name="name" value="{{ old('name')}}">
                    {!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' :''}}" id="description" name="description" rows="5">{{old('description')}}</textarea>
                      {!! $errors->first('description','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                <label>Localisation</label>
                <div class="row">                                 
                <div class="col-6">
                  <div class="form-group">
                  <label for="adr">Adresse </label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('adr') ? 'is-invalid' :''}}" id="adr" name="adr" value="{{ old('adr')}}">
                    {!! $errors->first('adr','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                </div>
                <div class="col-3">
                   <div class="form-group">
                  <label for="lg">Longitude </label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-globe"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('lg') ? 'is-invalid' :''}}" id="lg" name="lg" value="{{ old('lg')}}">
                    {!! $errors->first('lg','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                </div>

                <div class="col-3">
                   <div class="form-group">
                  <label for="lt">lontitude </label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-globe"></i></span>
                    </div>
                    <input type="text" class="form-control {{ $errors->has('lt') ? 'is-invalid' :''}}" id="lt" name="lt" value="{{ old('lt')}}">
                    {!! $errors->first('lt','<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <!-- /.input group -->
                </div>
                </div>

                <div class="col-5">
                <div class="form-group">
                  <label>Wilaya</label>
                  <select class="form-control select2" style="width: 100%;" id="wilaya">
                    <option>Choisisez votre wilaya</option>
                    @foreach(giveWilaya() as $wilaya)
                      <option  value="{{ $wilaya->id }}">{{$wilaya->intitulet}}</option>
                    @endforeach
                  </select>
                </div>
                </div>

                 <div class="col-5">
                   <div class="form-group {">
                  <label>Commune</label>
                  <select class="form-control select2 {{ $errors->has('comune') ? 'is-invalid' :''}}" style="width: 100%;" name="comune" id="comune">
                   <!-- REMPLI AVEC LE JS -->
                  </select>
                    {!! $errors->first('comune','<div class="invalid-feedback">:message</div>') !!}
                </div>
                
                </div>
                <div class="col-2">
                  <a class="btn btn-app" 
                      style="margin-top: 32px;min-width: 30px; width:50px;height: 38px;padding: 5px 5px;" 
                      title="Ajouter une commune"
                      data-toggle="modal" data-target="#modal-default">
                      <i class="fas fa-plus-circle"></i>
                 </a>
                </div>
                </div>
                
                <div class="row">
                  <label>Comodité</label>
                  <div class="col-12">
                    <div class="form-group">
                      <select class="duallistbox" name="comodite[]" multiple>
                        @foreach(giveComodite() as $comodite)
                          <option value="{{$comodite->id}}">{{$comodite->intitulet}}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
            
                </div>

                <button type="button" class="btn btn-primary btn-flat" 
                      data-toggle="modal" data-target="#modal-picture">
                    Télécharger des photos
                </button>
                <input type="hidden" autocomplete="OFF" name="imgs" id="imgs">

                <!-- /.form group -->

              </div>
              <!-- /.card-body -->
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
         </form>
         </div>
       </div>
       <!--           MODEL       -->
        <div class="modal fade" id="modal-picture">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter des photos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" class="dropzone" method="post" enctype="multipart/form-data">
                @csrf
                <div class="dz-message" data-dz-message><span>Glisser vos photos</span></div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@stop
@section('plugins.Select2', true)
@section('plugins.Duallistbox', true)
@section('plugins.Dropzone', true)
@section('css')
<style type="text/css">
  
</style>
@stop
@section('js')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
Dropzone.autoDiscover = false;
var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
// imageDataArray variable to set value in crud form
var imageDataArray = new Array;
// fileList variable to store current files index and name
var fileList = new Array;
var i = 0;  
  $(function () {
     $('.duallistbox').bootstrapDualListbox({        
        filterPlaceHolder : "Filtrer",
        moveAllLabel : "Tous selectionnés",
        removeAllLabel: "Tous déselctionnés",
        infoText : false
     });

     //fonction onchange 


      // Changement de pays
    $('#wilaya').on('change', function(e) {
        var wilaya_id = e.target.value;
        comune_id = false;
        cityUpdate(wilaya_id);
    });
 
    // Requête Ajax pour les villes
    function cityUpdate(wilayaId) {
      $.get('{{ url('comune') }}/'+ wilayaId + "'", function(data) {
            $('#comune').empty();
            $.each(data, function(index, comune) {
                $('#comune').append($('<option>', { 
                    value: comune.id,
                    text : comune.intitulet 
                }));
            });
            if(comune_id) {
                $('#comune').val(comune_id).prop('selected', true);
            }
        });
    }
    //***********************************************************************
    //code drop zone 

    uploader = new Dropzone(".dropzone",{
        url: "{{url('promo/image/upload')}}",
        paramName : "file",
        uploadMultiple :false,
        acceptedFiles : "image/*,video/*,audio/*",
        addRemoveLinks: true,
        dictRemoveFile:"Supprimer l'image",
        forceFallback: false,
        maxFilesize: 256, // Set the maximum file size to 256 MB
        parallelUploads: 100,
    });//end drop zone
    uploader.on("success", function(file,response) {
        imageDataArray.push(response)
        fileList[i] = {
            "serverFileName": response,
            "fileName": file.name,
            "fileId": i
        };
   
        i += 1;
        console.log(imageDataArray);
        $('#imgs').val(imageDataArray);
    });
    uploader.on("removedfile", function(file) {
        var rmvFile = "";
        for (var f = 0; f < fileList.length; f++) {
            if (fileList[f].fileName == file.name) {
                // remove file from original array by database image name
                imageDataArray.splice(imageDataArray.indexOf(fileList[f].serverFileName), 1);
                $('#imgs').val(imageDataArray);
                // get removed database file name
                rmvFile = fileList[f].serverFileName;
                // get request to remove the uploaded file from server
                $.get( "{{url('promo/image/delete')}}", { file: rmvFile } )
                  .done(function( data ) {
                    //console.log(data)
                  });
                // reset imageDataArray variable to set value in crud form
                
                console.log(imageDataArray)
            }
        }
        
    });

  })
</script>
@stop