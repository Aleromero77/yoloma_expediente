<?php

namespace App\Http\Controllers;

use App\Models\Terapeuta;
use Illuminate\Http\Request;

class TerapeutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['Terapeuta']=Terapeuta::paginate(5);
        return view('terapeuta.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('terapeuta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosTerapeuta = request() ->except('_token');
        if ($request->hasFile('foto')){
            $datosTerapeuta['foto']= $request->file('foto')->store('uploads','public');
        }
        Terapeuta::insert($datosTerapeuta);
        return response()->json($datosTerapeuta);
        //

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Terapeuta $terapeuta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $terapeuta=Terapeuta::findOrFail($id);
        return view('terapeuta.edit', compact('terapeuta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $datosTerapeuta = request() ->except('_token', '_method');
        Terapeuta::where('id','=',$id) -> update($datosTerapeuta);

        $terapeuta=Terapeuta::findOrFail($id);
        return view('terapeuta.edit', compact('terapeuta'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Terapeuta::destroy($id);
        return redirect('terapeuta');

    }
}
