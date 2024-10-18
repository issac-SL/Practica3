<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(5);
       // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view ("alumnos/index",compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::paginate(5);
        return view ("alumnos.create",compact("alumnos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aun no grabamos
        //return $request;
        Alumno::create($request->all());
        return redirect()->route("alumnos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        return view ("alumnos.show",compact('alumnos','alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        return view ("alumnos.edit",compact("alumnos","alumnos"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //aqui se actulizaran los datos 
        $alumno->update($request->all());
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
          return redirect()->route('alumnos.index');
    }
}
