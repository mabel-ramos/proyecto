@extends('layouts.admin')
@section('contenedor')




<div align="center">
	<p>LISTA CATEGORIAS</p></div>
	<a href="{{route('categorias.create')}}">Nueva Categoria</a>	

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
						<th>DESCRIPCION</th>
						<th>OPCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($categorias as $cat)
                    <tr>
						<td>{{$cat->id}}</td>
						<td>{{$cat->descripcion}}</td>						
						<td><a href="{{route('categorias.edit',$cat->id)}}" class="btn btn-block 		bg-gradient-primary">Editar</a>
							

							<form action="{{route('categorias.destroy',$cat->id)}}" method="POST">
								@csrf
								@Method('DELETE')
								<input type="submit" name="eliminar" value="Eliminar" class="btn btn-block bg-gradient-danger">
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