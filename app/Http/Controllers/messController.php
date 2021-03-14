<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messController extends Controller
{
    public function store(Request $request)
    {
        // return request('nombre');
        // return $request->get('nombre');
        // return $request->get('email');
        // return $request->get('subject');
        // return $request->get('contenido');

        request()->validate([
            'nombre'=>'required'
        ]);
    }

}
