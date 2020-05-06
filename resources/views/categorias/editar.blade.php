<!DOCTYPE html>
<html>
<head>
	<title>Editar categorias </title>
</head>
<body>
	<div align="center">
    <p>MODIFICAR categorias</p>
	<form action="{{route('categorias.update',$id_cat)}}" method="POST">
		@csrf		
		@Method('PUT')
		<table border="1">
			<tr>
				<td><label for="txtTipo">Tipo categorias</label></td>
				<td><input type="text" name="txtTipo" id="txtTipo" value="COMIDA"></td>
			</tr>
			<tr>
				<td><label for="txtDescripcion">Descripcion producto</label></td>
				<td><input type="text" name="txtDescripcion" id="txtDescripcion" value="POLLO"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="guardar" value="Modificar"></td>
			</tr>
		</table>

	</form>

	</div>
</body>
</html>