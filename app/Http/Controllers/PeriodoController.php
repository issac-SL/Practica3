<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodos = Periodo::paginate(5);
        // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("periodos/index",compact("periodos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periodos = Periodo::paginate(5);
        return view('periodos.create', compact("periodos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Periodo::create($request->all());
        return redirect()->route("periodos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        $periodos = Periodo::paginate(5);
        return view('periodos.show',compact('periodos','periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        $peirodos = Periodo::paginate(5);
        return view('periodos.edit',compact('peirodos','peirodo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $periodo->update($request->all());
        return redirect()->route('periodos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index');
    }
}