<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Marca;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::with('marca')->get();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        return view('equipos.create', compact('marcas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'MarcaID' => 'required|exists:marcas,id',
            'Modelo' => 'required',
            'NumeroSerie' => 'required',
            'FechaCompra' => 'required|date',
            'Descripcion' => 'nullable',
            'Estado' => 'required',
        ]);

        Equipo::create($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo creado correctamente.');
    }

    public function show(Equipo $equipo)
    {
        $equipo->load('marca'); // Cargar la relación 'marca'
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        $marcas = Marca::all();
        return view('equipos.edit', compact('equipo', 'marcas'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'MarcaID' => 'required|exists:marcas,id',
            'Modelo' => 'required',
            'NumeroSerie' => 'required',
            'FechaCompra' => 'required|date',
            'Descripcion' => 'nullable',
            'Estado' => 'required',
        ]);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo eliminado correctamente.');
    }
}
