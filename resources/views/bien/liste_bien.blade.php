{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')

    
    <div class="card">
            <div class="card-header">
              	<h2 class="card-title">Listes des Biens</h2>
         	  <a href="{{ route('bien.create') }}" class="btn btn-app" 
                    title="Ajouter un Bien">
                <i class="fas fa-plus"></i> 
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Intitulet</th>
                  <th>Type</th>
                  <th>Surface</th>
                  <th>Prix</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($biens as $bien)
                    <tr>
                      <td>{{$bien->intitulet}}</td>
                      <td>{{$bien->type}}</td>
                      <td>{{$bien->surface}}</td>
                      <td>{{$bien->prix}}</td>
                      <td style="text-align: center;vertical-align: middle;">
                        <div class="btn-group">
                          <a href="{{ route('bien.show', $bien->id)}}"  class="btn btn-default">Voir <i class="fas fa-eye"></i></a>
                          <a href="{{ route('bien.edit', $bien->id)}} " class="btn btn-info">Modifier <i class="fas fa-edit"></i></a>
                          
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
$(document).ready(function() {
  $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "oLanguage": {"sUrl": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"},
      "columns": [
                    { "width": "30%" },
                    { "width": "10%" },
                    { "width": "10%" },
                    { "width": "15%" },
                    { "width": "35%" }
                  ],
     });

   
});
</script>
@stop