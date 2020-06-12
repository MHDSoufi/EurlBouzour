{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
    
    <div class="card">
            <div class="card-header">
              	<h2 class="card-title">Listes des utilisateurs</h2>
         	  <a class="btn btn-app"  href="{{route('user.create')}}" title="Ajouter un utilisateurs">
        <i class="fas fa-user-plus"></i> 
    </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom Prénom</th>
                  <th>Psoeudo</th>
                  <th>Fonction</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->psoeudo}}</td>
                      <td>{{$user->fonction}}</td>
                      <td style="text-align: center;"> 
                        <div class="btn-group">
                          <a href="{{ route('user.show', $user->id)}}"  class="btn btn-default">Voir <i class="fas fa-eye"></i></a>
                          <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Modifier <i class="fas fa-edit"></i></a>
                          
                            <button type="submit" class="btn btn-danger" style="         border-top-left-radius: 0;
                                       border-bottom-left-radius: 0;"
                                       data-toggle="modal" data-target="#modal-default"
                                       >Suprimer <i class="fas fa-trash" style="color: black;"></i></button>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
         <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <form action="{{ route('user.destroy', $user)}}" method="POST">
                            @csrf
                            @method('DELETE')
              <button type="submit" class="btn btn-primary" id="confirm">Save changes</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
                    { "width": "20%" },
                    { "width": "20%" },
                    { "width": "20%" },
                    null
                  ],
     });
  });
</script>
@stop