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
        $curso = Curso::all();
        $alumno = Alumno::all();
        return compact('curso','alumno');
    }

    public function store(Request $request)
    {
        $valida = AlumnoCurso::where('alumno_id',$request -> alumno_id)->where('curso_id',$request -> curso_id)->first();
        if(!$valida){
            $alumno_curso = new AlumnoCurso();
            $alumno_curso -> alumno_id = $request -> alumno_id;
            $alumno_curso -> curso_id = $request -> curso_id;
    
            $alumno_curso -> save();
        }else{
            return response()->json([
                'message' => 'El alumno ya esta en ese curso'
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $valida = AlumnoCurso::where('alumno_id',$request -> alumno_id)->where('curso_id',$request -> curso_id)->first();
        if(!$valida){

            $alumno_curso = AlumnoCurso::findOrFail($id);
            $alumno_curso -> alumno_id = $request -> alumno_id;
            $alumno_curso -> curso_id = $request -> curso_id;
    
            $alumno_curso -> save();
            return response() -> json($alumno_curso);
        }else{
            return response()->json([
                'message' => 'Record not found.'
            ], 404);
        }
    }

    public function destroy($id)
    {
        $alumno_curso = AlumnoCurso::destroy($id);
        return response() -> json($alumno_curso);
    }

}
