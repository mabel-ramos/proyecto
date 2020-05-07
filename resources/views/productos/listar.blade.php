@extends('layouts.admin')

@section('contenedor')
<div align="center">
	<p>LISTA PRODUCTOS VISTA</p></div>
	<a href="{{route('crear_productos')}}" class="btn btn-block btn-primary btn-sm">Nuevo Producto</a>
	

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>ID</th>
						<th>TIPO</th>
						<th>DESCRIPCION</th>
						<th>OPCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
						<td>1</td>
						<td>COMPUTACION</td>
						<td>TECLADO</td>
						<td><a href="{{route('editar_productos',1)}}" class="btn btn-block bg-gradient-primary">Editar</a> 
							<form action="{{route('eliminar_producto',1)}}" method="post" >
							@csrf
							@Method('DELETE')
							<input type="submit" name="Eliminar" value="eliminar" class="btn btn-block bg-gradient-danger">
						</form>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>COMPUTACION</td>
						<td>IMPRESORA</td>
						<td><a href="{{route('editar_productos',2)}}" class="btn btn-block bg-gradient-primary">Editar</a>
						<form action="{{route('eliminar_producto',2)}}" method="post">
							@csrf
							@Method('DELETE')
							<input type="submit" name="Eliminar" value="eliminar" class="btn btn-block bg-gradient-danger">
						</form> </td>
					</tr>    
					<tr>
						<td>1</td>
						<td>COMPUTACION</td>
						<td>TECLADO</td>
						<td><a href="{{route('editar_productos',1)}}" class="btn btn-block bg-gradient-primary">Editar</a> 
							<form action="{{route('eliminar_producto',1)}}" method="post">
							@csrf
							@Method('DELETE')
							<input type="submit" name="Eliminar" value="eliminar" class="btn btn-block bg-gradient-danger">
						</form>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>COMPUTACION</td>
						<td>IMPRESORA</td>
						<td><a href="{{route('editar_productos',2)}}" class="btn btn-block bg-gradient-primary">Editar</a>
						<form action="{{route('eliminar_producto',2)}}" method="post">
							@csrf
							@Method('DELETE')
							<input type="submit" name="Eliminar" value="eliminar" class="btn btn-block bg-gradient-danger">
						</form> </td>
					</tr>                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection
