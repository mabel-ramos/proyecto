<!DOCTYPE html>
<html>
<head>
	<title>CREAR</title>
</head>
<body>
<div align="center">
	<p>CREAR PRODUCTO</p>
	<form action="{{route('guardar_productos')}}" method="POST">
		@csrf
		<table border="1">
			<tr>
				<td><label for="txtTipo">Tipo Producto</label></td>
				<td><input type="text" name="txtTipo" id="txtTipo"></td>
			</tr>
			<tr>
				<td><label for="txtDescripcion">Descripcion producto</label></td>
				<td><input type="text" name="txtDescripcion" id="txtDescripcion"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="guardar" value="Enviar"></td>
			</tr>
		</table>

	</form>
</div>
</body>
</html>