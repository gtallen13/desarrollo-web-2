<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        // public function index()
        // {
        //     $portafolio = [
        //         ['title'=>'Hi'],
        //         ['title'=>'Hola'],
        //         ['title'=>'Salut'],
        //         ['title'=>'GG'],
        //     ];
        //     return view('portafolio', compact('portafolio'));
        // }
        // public function create()
        // {

        // }

        // public function show()
        // {

        // }

    public function __invoke(Request $request)
    {
        $Portafolio = [
            ['title'=>'Hi'],
            ['title'=>'Hola'],
            ['title'=>'Salut'],
            ['title'=>'GG'],
        ];
        return view('portafolio', compact('Portafolio'));
    }
}
