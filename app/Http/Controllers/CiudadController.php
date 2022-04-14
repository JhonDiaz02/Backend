<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;

class CiudadController extends Controller
{
    public function index()
    {
        $ciudad = Ciudad::all();
        return response() -> json($ciudad);
    }
}
