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
          		<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des comoditées</h3>
                <button style="float: right;">Ajout</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
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
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->



            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
@stop