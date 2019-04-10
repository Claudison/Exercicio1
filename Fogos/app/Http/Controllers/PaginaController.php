<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    //retornar a pagina sobre
    public function contato()
    {
        $email = "fogos@empresadosfogos.com";
        $telefone = '38 3740-0000';

        return view('contato')->with('email', $email)
         ->with('telefone', $telefone);


    }

    public function historia()
    {
        $email = "fogos@empresadosfogos.com";
        $telefone = '38 3740-0000';

        return view('historia')->with('email', $email)
         ->with('telefone', $telefone);


        }
    public function sobre()
    {
        $email = "fogos@empresadosfogos.com";
        $telefone = '38 3740-0000';

        return view('sobre')->with('email', $email)
         ->with('telefone', $telefone);



    }
}
