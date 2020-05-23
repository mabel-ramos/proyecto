<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Http\Requests\CategoriasRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categorias =  Categorias::all();

        return view('categorias.lista',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriasRequest $request)
    {
        /*$validatedata = $request->validate([
            'descripcion' => 'required|unique:Categorias|max:50|min:3'
        ]);*/

        $Categorias = new Categorias;
        $Categorias->descripcion = $request->descripcion;
        $Categorias->estado = "AC";
        $Categorias->save();
        return redirect('/categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categorias::find($id);

        return view('categorias.editar',['id_cat'=>$id,'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedata = $request->validate([
            'descripcion' => 'required|max:50|min:3|unique:Categorias,descripcion,'.$id
        ]);
        $Categorias = Categorias::find($id);
        $Categorias->descripcion = $request->descripcion;
        $Categorias->save();
        return redirect('/categorias');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Categorias = Categorias::find($id);
        $Categorias->delete();
        return redirect('/categorias');
    }
}
