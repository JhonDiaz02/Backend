<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\AlumnoCurso;
use Illuminate\Http\Request;

class AlumnoCursoController extends Controller
{
    public function index()
    {
        $curso = AlumnoCurso::all();
        return response() -> json($curso);
    }

    public function store(Request $request)
    {
        $alumno_curso = new AlumnoCurso();
        $alumno_curso -> alumno_id = $request -> alumno_id;
        $alumno_curso -> curso_id = $request -> curso_id;

        $alumno_curso -> save();
    }

    public function update(Request $request, $id)
    {
        $alumno_curso = AlumnoCurso::findOrFail($id);
        $alumno_curso -> alumno_id = $request -> alumno_id;
        $alumno_curso -> curso_id = $request -> curso_id;

        $alumno_curso -> save();
        return response() -> json($alumno_curso);
    }

    public function destroy($id)
    {
        $alumno_curso = AlumnoCurso::destroy($id);
        return response() -> json($alumno_curso);
    }

}
