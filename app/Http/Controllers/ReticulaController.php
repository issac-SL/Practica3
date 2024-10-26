<?php

namespace App\Http\Controllers;

use App\Models\Reticula;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reticulas = Reticula::paginate(5);
        // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("reticulas/index",compact("reticulas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reticulas = Reticula::paginate(5);
        return view('reticulas.create', compact("reticulas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Reticula::create($request->all());
        return redirect()->route("reticulas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reticula $reticula)
    {
        $reticulas = Reticula::paginate(5);
        return view('reticulas.show',compact('reticulas','reticula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reticula $reticula)
    {
        $reticulas = Reticula::paginate(5);
        return view('reticulas.edit',compact('reticulas','reticula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reticula $reticula)
    {
        $reticula->update($request->all());
        return redirect()->route('reticulas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reticula $reticula)
    {
        $reticula->delete();
        return redirect()->route('reticulas.index');
    }
}