@extends('layouts.master')

@section('content')

<div class="container">
  <div class="col-md-12">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Funções do sistema</th>
          <!-- <th scope="col">Handle</th> -->
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
        <tr>
          <th scope="row">{{ $usuario->id}}</th>
          <td>{{ $usuario->name}}</td>
          <td>
            <a href="{{ route('cadastros.show', ['visualizarusuario'=>$usuario->id])}}">Visualizar</a>
            <a href="{{ route('cadastros.edit', ['editarusuario'=>$usuario->id])}}">Editar</a>
            <!-- <a href="{{ route('cadastros.destroy', ['apagarusuario'=>$usuario->id])}}">Apagar</a> -->
            <form action="{{ route('cadastros.destroy', ['apagandousuario'=>$usuario->id])}}" method="POST">
                <input name="_method" type="hidden" value="DELETE">
                @csrf
                <button type="submit" class="">Apagar</button>
                  <!-- <a href="{{ route('cadastros.destroy', ['apagarusuario'=>$usuario->id])}}">Apagar</a> -->
                </div>
            </form>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
