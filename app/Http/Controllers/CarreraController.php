<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carrera::paginate(5);
        // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("carreras/index",compact("carreras"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::paginate(5);
        return view('carreras.create', compact("carreras"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Carrera::create($request->all());
        return redirect()->route("carreras.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        $carreras = Carrera::paginate(5);
        return view('carreras.show',compact('carreras','carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
        $carreras = Carrera::paginate(5);
        return view('carreras.edit',compact('carreras','carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        $carrera->update($request->all());
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index');
    }
}