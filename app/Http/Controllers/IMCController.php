<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IMCController extends Controller
{
    public function mostrarIMC(){
        return view('imc');
    }
}
