<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {


        return view('site.contato', ['titulo' => 'Contato']);
    }


}


class stdClass {
    $a = '';
}

$class = new stdClass;