<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function show($id)
    {
        $pais = Departamento::with('ciudades')->find($id)->toArray();
        return response() -> json($pais);
    }
}
