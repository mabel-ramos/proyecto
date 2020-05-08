<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;

class ProductoController extends Controller
{
    function index()
    {
    	return Productos::all();
        //return "hola desde el controlador";
    }
    function listar()
    {
    	$productos =  Productos::join("categorias","productos.categoria_id","=","categorias.id")
            ->select('Productos.id','Productos.nombre','Productos.precio','Productos.estado','categorias.descripcion')
            ->get();

    	return view('productos.listar',compact('productos'));
    }
    function crear()
    {
        $categorias = Categorias::all();
    	//recuperar dato, guardar datos, actulizar datros con los modelos
    	return view('productos.crear',compact('categorias'));
    }
    function guardar(Request $request)
    {
    	$producto = new Productos;
        $producto->categoria_id =$request->categoria_id;
        $producto->nombre =  $request->nombre;
        $producto->precio = $request->precio;
        $producto->estado = "AC";
        $producto->save();
        return redirect('/producto');   	
    }

    function editar($id)
    {
        $producto = Productos::find($id);
        $categorias = Categorias::all();   
        $id_prod = $id;
    	return view('productos.editar',compact('id_prod','categorias','producto'));

    }
    function modificar($id,Request $request)
    {
        $producto = Productos::find($id);
        $producto->categoria_id = $request->categoria_id;
        $producto->nombre =  $request->nombre;
        $producto->precio = $request->precio;      
        $producto->save();
        return redirect('/producto');       
    }
    function eliminar($id)
    {
    	 $producto = Productos::find($id);
         $producto->delete();
    	return redirect('/producto');
    }

}
