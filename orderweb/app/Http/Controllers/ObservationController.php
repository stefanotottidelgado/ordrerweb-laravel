<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $observations = Observation::all(); //select * from observations
        //dd($causals);
        return view('observation.index', compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('observation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert into causal (description) values ('xxxx')
        $observation = Observation::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()-> route('causal.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $observation =  Observation::find($id);
        if($observation)
        {
            return view('observation.edit', compact('observation'));
        }
        else
        {
            return redirect()->route('observation.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $observation =  Observation::find($id);
        if($observation)
        {
            $observation->delete(); //delete from causal where id = x value
            session()->flash('messages','Registro Eliminado Exitosamente');
        }

        else
        {
            session()->flash('warning','No Se Encuentra El Registro Solicitado');
            
        }

        return redirect()->route('observation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $observation =  Observation::find($id);
        if($observation)
        {
            $observation->delete(); //delete from causal where id = x value
            session()->flash('messages','Registro Eliminado Exitosamente');
        }

        else
        {
            session()->flash('warning','No Se Encuentra El Registro Solicitado');
            
        }

        return redirect()->route('observation.index');
    }
}
