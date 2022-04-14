<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use GuzzleHttp\Psr7\Request;

class PaisController extends Controller

{
    public function show($id)
    {
        $pais = Pais::with('departamentos','departamentos')->find($id);
        return response() -> json($pais);
    }

    public function index()
    {
        $pais = Pais::all();
        return response() -> json($pais);
    }
}
