<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $curso = Alumno::with(
            'cursos',
            'cursos.curso',
            'ciudad',
            'ciudad.depto',
            'ciudad.depto.pais'
        )->get()->toArray();
        return response()->json($curso);
    }

    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->identificacion = $request->identificacion;
        $alumno->correo = $request->correo;
        $alumno->ciudad_id = $request->ciudad_id;

        $alumno->save();
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = $request->nombre;
        $alumno->identificacion = $request->identificacion;
        $alumno->correo = $request->correo;
        $alumno->ciudad_id = $request->ciudad_id;

        $alumno->save();
        return response()->json($alumno);
    }

    public function destroy($id)
    {
        $alumno = Alumno::destroy($id);
        return response()->json($alumno);
    }
}
