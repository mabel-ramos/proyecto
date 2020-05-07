@extends('layouts.admin')
@section('contenedor')

	
<div class="row">
	<div class="col-lg-4">
		
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('guardar_productos')}}" method="POST">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="txtTipo">Tipo Producto</label>
                    <input type="text" class="form-control" name="txtTipo" id="txtTipo" >
                  </div>
                  <div class="form-group">
                    <label for="txtDescripcion">Descripcion Producto</label>
                    <input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion" >
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
	</div>
	<div class="col-lg-4">
		
	</div>

	
</div>
	

@endsection