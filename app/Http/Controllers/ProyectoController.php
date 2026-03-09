<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NombreProyecto'    => 'required',
            'fuenteFondos'      => 'required',
            'MontoPlanificado'  => 'required|numeric',
            'MontoPatrocinado'  => 'required|numeric',
            'MontoFondosPropios'=> 'required|numeric',
        ]);

        Proyecto::create($request->all());
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'NombreProyecto'    => 'required',
            'fuenteFondos'      => 'required',
            'MontoPlanificado'  => 'required|numeric',
            'MontoPatrocinado'  => 'required|numeric',
            'MontoFondosPropios'=> 'required|numeric',
        ]);

        $proyecto->update($request->all());
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
    }

    public function pdf()
{
    $proyectos = Proyecto::all();
    $fecha = now()->format('d/m/Y H:i:s');
    $pdf = Pdf::loadView('proyectos.pdf', compact('proyectos', 'fecha'));
    return $pdf->stream('reporte_proyectos.pdf');
}
}
