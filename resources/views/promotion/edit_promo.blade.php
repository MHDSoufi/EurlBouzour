{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
            	<button style="float:right;">ARB</button>
              <h5><b>{{ $promo->nom_promo}}</b></h5>
              {{$promo->adr .' '. App\Model\Comune::find($promo->comune_id)['intitulet']}}
              <button style="float:right;">Modif</button>
            </div>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
               <div class="col-md-12">
            		<div class="card">
              			<div class="card-header">
               				 <h3 class="card-title">
                  				Description
               				 </h3>
               				 <button style="float: right;">modif</button>
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
                      <button style="float: right;">Ajout</button>
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
              <div class="col-md-3">
                <a href="{{route('promo.index')}}" class="btn btn-block btn-danger ">Retour à la liste des promotion</a>
              </div>
              <div class="col-md-3">
                <a href="#" class="btn btn-block btn-primary ">Voir la promotion</a>
              </div>
              <div class="col-md-3">
                <a href="#" class="btn btn-block btn-success ">Voir la Gallery d'images</a>
              </div>
            </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
@stop
@section('plugins.Datatables', true)
@section('js')
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
} );
    

</script>
@stop