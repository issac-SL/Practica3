<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plazas = Plaza::paginate(5);
        // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("plazas/index",compact("plazas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plazas = Plaza::paginate(5);
        return view('plazas.create', compact("plazas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Plaza::create($request->all());
        return redirect()->route("plazas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Plaza $plaza)
    {
        $plazas = Plaza::paginate(5);
        return view('plazas.show',compact('plazas','plaza'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plaza $plaza)
    {
        $plazas = Plaza::paginate(5);
        return view('plazas.edit',compact('plazas','plaza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plaza $plaza)
    {
        $plaza->update($request->all());
        return redirect()->route('plazas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plaza $plaza)
    {
        $plaza->delete();
        return redirect()->route('plazas.index');
    }
}
