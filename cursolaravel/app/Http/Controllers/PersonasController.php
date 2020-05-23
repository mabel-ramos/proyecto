<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\personas;
use App\profesions;
class PersonasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
      

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return personas::all();
    }

    function listar()
    {
      $personas = personas::join("profesions","persona.profesion_id","=","profesions.id") 
      -> select ('profesion_id','nombre','primer_apellido','segundo_apellido','fecha_nacimiento','edad','estado')
      ->get();
      return view('personas.listar',compact('personas'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      //  $profesion = profesions::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(personas $personas)
    {
        //
    }
}
