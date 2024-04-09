<?php

namespace App\Http\Controllers;

use App\Models\Tareas; /**Acceso al modelo */
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
      $tareas['tareas'] = Tareas::all();   /**Trae todos los datos de la tabla tareas */
      return view ( 'tareas', $tareas );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $tarea= request()->all(); /** va a recepcionar todos los datos enviados por post*/
      Tareas::create($tarea);/**crea el modelo y realiza un pedido*/
      return redirect ('/'); /**redirecciona a la vista principal */
      
   
    }
    
    /**
     * Display the specified resource.
     */
    public function show(tareas $tareas)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tareas $tareas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tareas $tareas)
    {
      //
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $tarea=Tareas::findOrfail($id);/**Busca el registro  que se quiere eliminar con el dato que hemos enviado ($id)*/
      $tarea->delete();
      return redirect ('/');
      
    }
}
