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
        'modelo' => 'RE',
        'user_id' => Auth::id()
      ])->get();

      dd([
          $pedidos,
          $pedidos[0]->pedido_produtos,
          $pedidos[0]->pedido_produtos[0]->produtos
      ]);

      return view('carrinho.index', compact('pedidos'));
    }

    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('cadastros.index');
    }
}
