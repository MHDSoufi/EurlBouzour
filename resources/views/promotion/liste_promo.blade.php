{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')

    
    <div class="card">
            <div class="card-header">
              	<h2 class="card-title">Listes des promotions Bouzour</h2>
         	  <a class="btn btn-app"  href="{{ route('promo.create') }}" title="Ajouter une promotion">
        <i class="fas fa-plus"></i> 
    </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Promotions</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($promos as $promo)
                    <tr>
                      <td><img height="70" src="  {{url('images/promotions/'.$promo->nom_promo.'/'.getLienImage($promo->id))}} "  /> <strong>{{$promo->nom_promo}}</strong> {{$promo->adr .' '. App\Model\Comune::find($promo->comune_id)['intitulet']}}</td>
                      <td style="text-align: center;vertical-align: middle;">
                        <div class="btn-group">
                          <a href="{{ route('promo.show', $promo->id)}}"  class="btn btn-default">Voir <i class="fas fa-eye"></i></a>
                          <a href="{{ route('promo.edit', $promo->id)}} " class="btn btn-info">Modifier <i class="fas fa-edit"></i></a>
                          
                            <button type="submit" class="btn btn-danger" style="         border-top-left-radius: 0;
                                       border-bottom-left-radius: 0;"
                                       data-toggle="modal" data-target="#modal-default"
                                       >Suprimer <i class="fas fa-trash" style="color: black;"></i></button>
                        </div>
                      </td> 
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        

@stop
@section('plugins.Datatables', true)
@section('css')
<style type="text/css">
	.btn-app{
		margin: 10px 0px 5px 5px;
		padding: 5px;
		padding-top: 10px;
		max-width: 60px;
		height: 40px;
		float: right;
	}
</style>
@stop
@section('js')
<script type="text/javascript" src=""></script>
<script type="text/javascript">
  
	$(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "oLanguage": {"sUrl": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"},
      "columns": [
                    { "width": "60%" },
                    { "width": "40%" }
                  ],
     });
  });
</script>
@stop