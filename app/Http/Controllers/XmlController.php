<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;

class XmlController extends Controller
{
    //Pegar todos os dados e gerar um XML 
    public function gerarXML(){
        //buscar os registros no banco de dados
        $dados = Objeto::all(); //equivalente a SELECT * FROM objetos
        // print_r($dados);

        //retornar a view com os dados
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
