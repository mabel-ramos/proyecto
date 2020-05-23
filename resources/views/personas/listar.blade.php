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
						<th>CATEGORIA</th>
						<th>NOMBRE</th>
						<th>PRECIO</th>
						<th>ESTADO</th>
						<th>OPCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($productos as $prod)
                    <tr>
						<td>{{$prod->id}}</td>
						<td>{{$prod->descripcion}}</td>
						<td>{{$prod->nombre}}</td>
						<td>{{$prod->precio}}</td>
						<td>{{$prod->estado}}</td>
						<td><a href="{{route('editar_productos',$prod->id)}}" class="btn btn-block bg-gradient-primary">Editar</a> 
							<form action="{{route('eliminar_producto',$prod->id)}}" method="post" >
							@csrf
							@Method('DELETE')
							<input type="submit" name="Eliminar" value="eliminar" class="btn btn-block bg-gradient-danger">
						</form>
						</td>
					</tr>
					@endforeach
					     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection
