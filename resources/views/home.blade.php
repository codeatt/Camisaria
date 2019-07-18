@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parabéns !!!</div>
                <div><h1>Seja bem vindo !</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Usuário<strong> {{ Auth::user()->name }} </strong>está logado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
