<!DOCTYPE html>
<html>
<head>
	<title>LISTAR PRODUCTOS</title>
</head>
<body>
<div align="center">
	<p>LISTA PRODUCTOS VISTA</p>
	<a href="{{route('crear_productos')}}">Nuevo Producto</a>
</div>	
	<table border="1" align="center">
		<th>ID</th>
		<th>TIPO</th>
		<th>DESCRIPCION</th>
		<th>OPCIONES</th>
	<tbody>
		<tr>
			<td>1</td>
			<td>COMPUTACION</td>
			<td>TECLADO</td>
			<td><a href="{{route('editar_productos',1)}}">Editar</a> 
				<form action="{{route('eliminar_producto',1)}}" method="post">
				@csrf
				@Method('DELETE')
				<input type="submit" name="Eliminar" value="eliminar">
			</form>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>COMPUTACION</td>
			<td>IMPRESORA</td>
			<td><a href="{{route('editar_productos',2)}}">Editar</a>
			<form action="{{route('eliminar_producto',2)}}" method="post">
				@csrf
				@Method('DELETE')
				<input type="submit" name="Eliminar" value="eliminar">
			</form> </td>
		</tr>
	</tbody>	
		
	</table>
</body>
</html>