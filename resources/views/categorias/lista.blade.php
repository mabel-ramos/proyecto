@extends('layouts.admin')
@section('contenedor')
<div align="center">
	<p>LISTA CATEGORIAS</p>
	<a href="{{route('categorias.create')}}">Nueva Categoria</a>

	<table border="1" align="center">
		<th>ID</th>
		<th>TIPO CATEGORIA</th>
		<th>DESCRIPCION</th>
		<th>OPCIONES</th>
	<tbody>
		<tr>
			<td>1</td>
			<td>COMPUTACION</td>
			<td>TECLADO</td>
			<td><a href="{{route('categorias.edit',1)}}">Editar</a>
				<form action="{{route('categorias.destroy',1)}}" method="POST">
					@csrf
					@Method('DELETE')
					<input type="submit" name="eliminar" value="Eliminar">
				</form>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>COMPUTACION</td>
			<td>IMPRESORA</td>
			<td><a href="{{route('categorias.edit',2)}}">Editar</a>
				<form action="{{route('categorias.destroy',2)}}" method="POST">
					@csrf
					@Method('DELETE')
					<input type="submit" name="eliminar" value="Eliminar">
				</form></td>
		</tr>
	</tbody>	
		
	</table>
</div>
@endsection