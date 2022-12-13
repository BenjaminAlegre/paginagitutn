<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //LISTAR TODOS LOS ALUMNOS
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //DEVOLVER LA VISTA QUE PERMITA CREAR UN NUEVO ALUMNO
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //EFECTIVAMENTE CREO UN NUEVO ALUMNO Y LO GUARDO EN EL MEDIO PERSISTENTE (BD)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //DEVUELVO VISTA QUE MUESTRA EL DETALLE DE UN ALUMNO EN PARTICULAR
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //DEVUELVE UNA VISTA QUE PERMITE LA EDICIÓN DE UN ALUMNO
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
        //EFECTIVAMENTE ACTUALIZO AL ALUMNO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ELIMINA UN ALUMNO EN PARTICULAR
    }
}
