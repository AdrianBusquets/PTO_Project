<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    public function mostrar()
    {
        return view('rutinas');
    }
}
