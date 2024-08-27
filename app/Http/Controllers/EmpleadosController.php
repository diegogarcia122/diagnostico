<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = empleados::all()->sortBy('nombre');
        return view('Empleados.index', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'ciudad' => 'required',
            'cargo' => 'required',
            'salario' => 'required',
        ]);
        empleados::create($request->all());
        return redirect()->route('Empleados.index')
          ->with('success', 'empleados updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleados = Post::find($id);
        return view('Empleados.show', compact('empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'ciudad' => 'required',
            'cargo' => 'required',
            'salario' => 'required',
        ]);
        $empleados = empleados::find($id);
        $empleados->update($request->all());
        return redirect()->route('Empleados.index')
          ->with('success', 'empleados updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleados = empleados::find($id);
        $empleados->delete();
        return redirect()->route('Empleados.index')
          ->with('success', 'empleados deleted successfully');
    }

    public function create()
    {
      return view('Empleados.create');
    }

    public function edit($id)
    {
      $empleados = empleados::find($id);
      return view('Empleados.edit', compact('empleados'));
    }
}
