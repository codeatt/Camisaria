<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class CadastroController extends Controller
{
    public function create()
    {
      return view('cadastro');
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        \App\Cadastro::create($validatedData);

        return response()->json('Form is successfully validated and data has been saved');

    }
}
