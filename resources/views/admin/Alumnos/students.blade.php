@extends('layouts.main')

@section('content')
  @include('admin.Alumnos.partials.modal')
	<table id="datatable-responsive"  class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
       	<tr>
         	<th>Nombre</th>
         	<th>Apellido Paterno </th>
         	<th>Apellido Materno</th>
          <th>Fecha de Nacimiento</th>
          <th>Teléfono de Casa</th>
          <th>Teléfono Móvil</th>
          <th>Correo</th>
          <th>Acción</th>
       	</tr>
     	</thead>
     	<tbody> 
     	</tbody>
   	</table>

@stop