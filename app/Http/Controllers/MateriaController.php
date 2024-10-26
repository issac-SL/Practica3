<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::paginate(5);
        // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("materias/index",compact("materias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materias = Materia::paginate(5);
        return view('materias.create', compact("materias"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Materia::create($request->all());
        return redirect()->route("materias.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        $materias = Materia::paginate(5);
        return view('materias.show',compact('materias','materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        $materias = Materia::paginate(5);
        return view('materias.edit',compact('materias','materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $materia->update($request->all());
        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
    