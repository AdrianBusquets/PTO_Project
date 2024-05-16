<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NutricionController extends Controller
{
    public function mostrar(){
        return view('nutricion');
    }
}
