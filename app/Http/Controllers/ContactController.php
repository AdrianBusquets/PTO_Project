<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function mostrarContacto(){
        return view('contact');
    }


    public function store(Request $request){
        $validateData= $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'telefono' => 'required|string|max:15',
            'comentario' => 'nullable|string',
        ]);

        Contact::create($validateData);

        return redirect()->route('contact')->with('success', 'Pronto Contactaremos');
    }
}

