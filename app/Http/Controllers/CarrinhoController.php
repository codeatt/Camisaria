<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;

class CarrinhoController extends Controller
{
    // Acesso exclusivo para usuários logados
    function __construct()
    {
      // obriga estar logado
      $this->middleware('auth');
    }

    public function index()
    {

      $pedidos = Pedido::where([
        'status' => 'RE',
        'user_id' => Auth::id()
      ])->get();

      return view('carrinho.index', compact('pedidos'));
    }
}
