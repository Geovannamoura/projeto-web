<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;

class CadastrarController extends Controller
{
    //Regra de negócio: validar e persistir dados
    public function salvar(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|min:3|max:50',
            'modelo' => 'required|string|max:50',
            'tipo' => 'required|string',
            'preco' => 'required|numeric',
            'estado' => 'required|string',
            'data_fabricacao' => 'required|date',
        ],
        [
            'marca.required' => 'O campo marca é obrigatório.',
            'marca.min' => 'O campo marca deve ter no mínimo 3 caracteres.',
            'modelo.required' => 'O campo modelo é obrigatório.',
            'tipo.required' => 'O campo tipo é obrigatório.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um número.',
            'estado.required' => 'O campo estado é obrigatório.',
            'data_fabricacao.required' => 'O campo data de fabricação é obrigatório.',
            'data_fabricacao.date' => 'O campo data de fabricação deve ser uma data válida.',
        ]);
        $objeto = new Objeto();
        $objeto->fill($request->all());
        $objeto->save();

        //dd($request);
        return view('cadastrosalvo');
    }
}
