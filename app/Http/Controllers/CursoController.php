<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;


class CursoController extends Controller
{

    public function index()
    {
        $curso = Curso::all();
        return response() -> json($curso);
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso -> nombre = $request -> nombre;
        $curso -> fecha_inicio_curso = $request -> fecha_inicio_curso;
        $curso -> fecha_final_curso = $request -> fecha_final_curso;

        $curso -> save();
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso -> nombre = $request -> nombre;
        $curso -> fecha_inicio_curso = $request -> fecha_inicio_curso ? $request -> fecha_inicio_curso : now();
        $curso -> fecha_final_curso = $request -> fecha_final_curso ?$request -> fecha_inicio_curso : now();

        $curso -> save();
        return response() -> json($curso);
    }

    public function destroy(Request $request)
    {
        $curso = Curso::destroy($request->id);
        return response() -> json($curso);
    }
}
