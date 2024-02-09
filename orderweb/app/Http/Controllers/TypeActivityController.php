<?php

namespace App\Http\Controllers;


use App\Models\TypeActivity;
use Illuminate\Http\Request;

class TypeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_activity = TypeActivity::all(); //select * from observations
        //dd($observations);
        return view('type_activity.index', compact('type_activitys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert into causal (description) values ('xxxx')
        $type_activity = TypeActivity::create($request->all());
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
        $type_activity=   TypeActivity::find($id);
        if($type_activity)
        {
            return view('type_activity.edit', compact('type_activity'));
        }
        else
        {
            return redirect()->route('type_activity.index');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity)
        {
            $type_activity->delete(); //delete from causal where id = x value
            session()->flash('messages','Registro Eliminado Exitosamente');
        }

        else
        {
            session()->flash('warning','No Se Encuentra El Registro Solicitado');
            
        }

        return redirect()->route('type_activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity)
        {
            $type_activity->delete(); //delete from causal where id = x value
            session()->flash('messages','Registro Eliminado Exitosamente');
        }

        else
        {
            session()->flash('warning','No Se Encuentra El Registro Solicitado');
            
        }

        return redirect()->route('type_activity.index');
    }
}
