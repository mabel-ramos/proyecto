<!DOCTYPE html>
<html>
<head>
	<title>Editar Producto</title>
</head>
<body>
	<div align="center">
    <p>MODIFICAR PRODUCTO</p>
	<form action="{{route('modificar_productos',$id_prod)}}" method="POST">
		@csrf
		@Method('PUT')
		<table border="1">
			<tr>
				<td><label for="txtTipo">Tipo Producto</label></td>
				<td><input type="text" name="txtTipo" id="txtTipo" value="MUSICAL"></td>
			</tr>
			<tr>
				<td><label for="txtDescripcion">Descripcion producto</label></td>
				<td><input type="text" name="txtDescripcion" id="txtDescripcion" value="GUITARRA"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="guardar" value="Modificar"></td>
			</tr>
		</table>

	</form>

	</div>
</body>
</html>