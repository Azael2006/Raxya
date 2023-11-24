<?php

namespace App\Http\Controllers;

use App\Models\Globo;
use Illuminate\Http\Request;

class GloboController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('globos.index', [
            'globos' => Globo::with('user')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bano' => ['required'],
            'ducha' => ['required'],
            'tomar' => ['required'],
            'lavar' => ['required'],
        ]);

        $ducha_mes = $validated['bano'] * $validated['ducha'] * 80;
        $tomar_mes = $validated['tomar'] * 28;
        $lavar_mes = $validated['lavar'] * 656;


        $producto = $ducha_mes + $tomar_mes + $lavar_mes;
        // Agrega el producto al arreglo validado
        $validated = array_merge($validated, [
            'producto' => $producto,
            'ducha_mes' => $ducha_mes,
            'tomar_mes' => $tomar_mes,
            'lavar_mes' => $lavar_mes,
        ]);        

        $request->user()->globos()->create($validated);

        return to_route('globos.index')->
            with('status', '¡Globo guardado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Globo $globo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Globo $globo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Globo $globo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Globo $globo)
    {
        //
    }
}
