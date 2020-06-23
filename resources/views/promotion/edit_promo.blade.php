{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
            	  <button id="titreUpdate" class="btn btn-app"   
                        style="margin-top: -12px;"
                        title="Modifier le titre"
                        >
                            <i class="fas fa-edit">                         
                            </i>
                  </button>
              <h5><b>{{ $promo->nom_promo}}</b></h5>
              {{$promo->adr .' '. App\Model\Comune::find($promo->comune_id)['intitulet']}}
                  <button id="adrUpdate" class="btn btn-app" 
                          style="margin-right: -45px;margin-top: -3px;"
                          title="Modifier l'adresse"
                          >
                            <i class="fas fa-edit">                         
                            </i>
                  </button>
            </div>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
               <div class="col-md-12">
            		<div class="card">
              			<div class="card-header">
               				 <h3 class="card-title">
                  				Description
               				 </h3>
               				 <button id="DisUpdate" class="btn btn-app"
                               title="Modifier la description" >
               				 	<i class="fas fa-edit">             				 		
               				 	</i>
               				 </button>
              			</div>
              <!-- /.card-header -->
              			<div class="card-body">
                			<p class="lead">{{$promo->description}}</p>
              			</div>
              <!-- /.card-body -->
            		</div>
            <!-- /.card -->
          		</div>
              
          <div class="row">
                    <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Liste des comoditées</h3>
                      <button id="DisUpdate" class="btn btn-app"
                               title="Ajouter une comoditées" >
                        <i class="fas fa-plus">                         
                        </i>
                       </button>
                    </div>
                <!-- /.card-header -->
                  <div class="card-body">
                   <table id="comoditeTable" class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 80%;">Comodité</th>
                        <th style="width: 20%;">Action</th>
                      </tr>
                    </thead>
                   <tbody>
                       @foreach ($promo->comodites as $Comodite)
                       <tr>
                          <td>
                             {{ $Comodite->intitulet }}
                          </td>
                         <td>
                          <button>supprime</button>
                         </td>
                       </tr>
                       @endforeach                
                    </tbody>
                  </table>
                 </div>              
                </div>
             </div>
              <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Liste des biens</h3>
                      <button style="float: right;">Ajout</button>
                    </div>
                <!-- /.card-header -->
                  <div class="card-body">
                   <table id="bienTable" class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 40%;">Intitulet des biens</th>
                        <th style="width: 10%;">Surface</th>
                        <th style="width: 10%;">Quantitées</th>
                        <th style="width: 20%;">Prix</th>
                        <th style="width: 20%;">Action</th>
                      </tr>
                    </thead>
                   <tbody>
                       <tr>
                         <td>
                           F2 Simple Duplex
                         </td>
                         <td>
                           64 M²
                         </td>
                         <td>
                           5
                         </td>
                         <td>
                           3500000000DA
                         </td>
                         <td>
                           <button>modif</button>
                           <button>X</button>
                         </td>
                       </tr>   
                       <tr>
                         <td>
                           F3 Simple Duplex
                         </td>
                         <td>
                           64 M²
                         </td>
                         <td>
                           6
                         </td>
                         <td>
                           3500000000DA
                         </td>
                         <td>
                           <button>modif</button>
                           <button>X</button>
                         </td>
                       </tr>             
                    </tbody>
                  </table>
                 </div>              
                </div>
             </div>
              </div>
            <div class="row">
              <div class="col-md-4">
                <a href="{{route('promo.index')}}" class="btn btn-block btn-danger ">Retour à la liste des promotion</a>
              </div>
              <div class="col-md-4">
                <a href="#" class="btn btn-block btn-primary ">Voir la promotion</a>
              </div>
              <div class="col-md-4">
                <a href="#" class="btn btn-block btn-success ">Voir la Gallery d'images</a>
              </div>
            </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <!--           MODAL update       -->
        <div class="modal fade" id="modal-update">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titreModal"></h4>
              <button type="button" class="close" id="btnClose" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
              <form method="post" action="{{ route('promo.update', $promo->id) }}" id="simple_form" class="form-horizontal">
                @csrf 
                @method('PUT')
                <div class="form-group" id="DivUpdate">
                	
                </div> 
                <button class="btn btn-primary" type="submit">Modifier</button>            
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@stop
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('css')
<style type="text/css">
	.btn-app {
    float: right;
    font-size: 10px;
    height: 40px;
    margin: 0 0 5px 5px;
    min-width: 40px;
    padding: 5px 5px;}
</style>
@stop
@section('js')
 @if(Session::has('message'))
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  </script>
  <script type="text/javascript">
   
    //sweet alert function 
   Toast.fire({
        type: 'success',
        title: '{{Session::get("message")}}'
      });

  </script>
 @endif
<script type="text/javascript">
$(document).ready(function() {

    $('#comoditeTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "oLanguage": {"sUrl": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"},
          
      });
    $('#bienTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "oLanguage": {"sUrl": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"},
          
      });

    /*rénitialisé le form */

      $('#modal-update').on('hidden.bs.modal', function () {
        var myNode = document.getElementById("DivUpdate");
          while (myNode.firstChild) {
          myNode.removeChild(myNode.firstChild);
        }
      });
    /*Update des élément*/

    $('#DisUpdate').on('click', function(event){
    	$("#modal-update").modal("show");
    	var div = document.getElementById('DivUpdate');
    	var divStylModal = document.getElementsByClassName("modal-dialog");
    	var titre = document.getElementById('titreModal');    	
    	titre.innerHTML ="Moodifier la discription";
    	var elem = document.createElement("TEXTAREA");
    	elem.className = "form-control";
    	elem.name= "Descrip";
    	elem.rows = "5";
    	console.log(divStylModal);
    	divStylModal[0].classList.add("modal-lg");
    	var t = document.createTextNode("{{ $promo->description }}");
    	elem.appendChild(t);
    	div.appendChild(elem);
    });

    //Titre et adress update

    $('#titreUpdate').on('click', function(event){
      $("#modal-update").modal("show");
      var div = document.getElementById('DivUpdate');
      var titre = document.getElementById('titreModal');      
      titre.innerHTML ="Moodifier le Titre de la promotion";
      var elem = document.createElement("INPUT");//champ input Text Nom promo
      elem.setAttribute("type", "text");
      elem.className = "form-control";
      elem.name = "namePromo";
      elem.value = "{{ $promo->nom_promo }}";
      div.appendChild(elem); 
      
    });

    //Adresse Update
    $("#adrUpdate").on('click', function(event){
       $("#modal-update").modal("show");
       var div = document.getElementById('DivUpdate');
      var titre = document.getElementById('titreModal');      
      titre.innerHTML ="Moodifier l'adresse de la prommotion";
      var elemAdr = document.createElement("INPUT");//champ input Text adresse complete
      elemAdr.setAttribute("type", "text"); 
      elemAdr.className = "form-control";
      elemAdr.style.marginTop = "10px";
      elemAdr.name = "adrPromo";
      elemAdr.value = "{{ $promo->adr }}";
      div.appendChild(elemAdr);

      var elemSelect = document.createElement("SELECT"); // le button pour changer la commune
      elemSelect.className = "form-control";
      elemSelect.setAttribute('id', 'comune');
      elemSelect.name = "comune";  
      elemSelect.style.marginTop = "10px";
      div.appendChild(elemSelect);   
      cityUpdate();
    });

    // fonction des commune
    function cityUpdate(wilayaId) {
      $.get('{{ url('comune/byId')}}'+'/'+'{{$promo->comune_id}}', function(data) {
            $('#comune').empty();
            $.each(data, function(index, comune) {
                $('#comune').append($('<option>', { 
                    value: comune.id,
                    text : comune.intitulet 
                }));
            });
           
      $('#comune').val("{{$promo->comune_id}}").prop('selected', true);
            
    });
    }
} );


</script>
@stop