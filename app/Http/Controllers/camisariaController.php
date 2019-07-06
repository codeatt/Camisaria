<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class camisariaController extends Controller
{
    public function homeCamisaria (){
        return view('index');
    }
    public function crieCamisaria (){
        return view('crie_sua_camisa');
    }
    public function contatoCamisaria (){
        return view('contato');
    }
    
    public function carrinhoCamisaria (){
        return view('carrinho');
    }
    public function checkoutCamisaria (){
        return view('checkout');
    }
}
