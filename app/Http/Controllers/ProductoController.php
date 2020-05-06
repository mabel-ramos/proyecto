<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    function index()
    {
    	return "hola desde el controlador";
    }
    function listar()
    {
    	//return "LISTA PRODUCTOS";
    	return view('productos.listar');
    }
    function crear()
    {

    	//recuperar dato, guardar datos, actulizar datros con los modelos
    	return view('productos.crear');
    }
    function guardar(Request $request)
    {
    	return $request->txtTipo." ".$request->txtDescripcion;    	
    }

    function editar($id)
    {
    	
    	return view('productos.editar',['id_prod'=>$id]);
    }
    function modificar($id,Request $request)
    {
      return $id." tipo ".$request->txtTipo." Descripcion ".$request->txtDescripcion;	
    }
    function eliminar($id)
    {
    	//return "id de registro eliminado: ".$id;
    	return redirect('/producto');
    }

}
