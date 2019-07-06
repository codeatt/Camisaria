@extends('layouts.master')

@section('pagina_titulo', '- Cadastro')

<style>
span.text:hover {
    color: #dbcc8f;
}

.login .social .circle {
    color: #FFFFFF;
    border-radius: 10px;
    display: inline-block;
    margin: 0 10px;
    padding: 12px;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    position: absolute;
    left: 25px;
    font-size: 18px;
}

p#demo {
    text-align: left;
    font-size: 48px;
    margin-top: 0px;
    font-weight: bold;
    position: relative;
    margin-bottom: 0px;
}

.ftco-section {
    padding: 7em 0;
    position: relative;
}

.btn.btn-primary {
    background: #dbcc8f;
    border: none;
    color: #fff;
    border-radius: 7px;
    height: 60px;
    font-size: 16px;
    text-align: center;
}

.btn.btn-primary:focus,
.btn.btn-primary:hover {
    background-color: #222222;
    color: #fff;
}

.preenchido {
    padding-top: 15px;
    font-weight: bolder;
    vertical-align: middle;
    border: 1px solid rgba(0, 0, 0, 0.1) !important;
    height: 58px !important;
    padding-left: 15px;
    padding-right: 15px;
    font-size: 14px;
}

.btn.btn-primary {
    background: #dbcc8f;
    border: none;
    color: #fff;
    border-radius: 7px;
    width: 100%;
    height: 60px;
    font-size: 16px;
    text-align: center;
    outline: none !important;
}

.btn.btn-primary:hover {
    background-color: #222222 !important;
    color: #fff;
    outline: none !important;
}

.btn.btn-primary:focus,
.btn.btn-primary:focus-within,
.btn.btn-primary:active {
    background-color: #222222;
    color: #fff;
    outline: none !important;
}

.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #222222;
    border-color: none;
    outline: none !important;
}

.ftco-footer-social li a {
padding-left: 12px !important;
padding-top: 12px !important;
height: 50px;
width: 50px;
display: block;
float: left;
background: #dbcc8f;
border-radius: 50%;
position: relative;

}


</style>

@section('content')

<!-- Vericação de erros -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
        @endif
</div>

<!-- Vericação de sucesso no cadastro [Alternativa]-->

<!-- @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif -->

<!-- Vericação de erros [Alternativa]-->

<!-- @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif -->

<!-- Modal -->
<div class="modal fade login" id="loginModal" aria-labelledby="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Entrar</h4>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <!-- <div class="social">
                            <a class="circle github" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                            <a id="google_login" class="circle google" href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a id="facebook_login" class="circle facebook" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div> -->
                        <!-- <div class="division">
                            <div class="line l"></div>
                            <span>ou</span>
                            <div class="line r"></div>
                        </div> -->
                        <div class="error"></div>
                        <div class="form loginBox">
                            <form method="" action="" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Senha" name="password">
                                <input class="btn btn-default btn-login" type="button" value="Entrar" onclick="loginAjax()">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="POST" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Senha" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repita sua senha" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="button" value="Criar conta" name="commit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>Deseja
          <a href=""><span style="color:#dbcc8f;">criar uma conta</span></a>
                    ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <a href=""><span>Ainda não é cadastrado?</span></a>
                    <a href="javascript: showLoginForm();">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIM MODAL -->

<!-- <div class="hero-wrap hero-bread" style="background-image: url('/imagens/bg2_.png'); background-size: cover; background-position: top;">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/" style="color:#fff;">Home</a></span> <span style="color:#fff;">Cadastro</span></p>
                <h1 class="mb-0 bread" style="color:#dbcc8f !important; ">Cadastro</h1>
            </div>
        </div>
    </div>
</div> -->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate">
                <form method="POST" action="{{ route('cadastro.store') }}" class="billing-form">
                  @csrf
                    <h3 class="mb-4 billing-heading">Cadastro</h3>
                    <div class="row align-items-end">
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Nome</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Sobrenome</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Estado</label>
                                <div class="select-wrap">
                                    <div class="icon"><i class="fas fa-sort-down"></i></div>
                                    <select name="" id="" class="form-control">
                                      <option value="">São Paulo</option>
                                      <option value="">Rio de Janeiro</option>
                                      <option value="">Belo Horizonte</option>
                                      <option value="">Porto Alegre</option>
                                      <option value="">Brasilia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="streetaddress">Endereço</label>
                                <input type="text" class="form-control" placeholder="Informe seu endereço">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Complemento (opcional)">
                            </div>
                        </div>
                        <div class="w-100"></div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Cidade</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="postcodezip">CEP</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div> -->
                        <!-- <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="text" class="form-control" placeholder="meuemail@email.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input name="password" type="text" class="form-control" placeholder="minhasenha">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <!-- <div class="form-group mt-4">
                                <div class="radio">
                                    <label class="mr-3"><input type="radio" name="optradio"> Deseja receber newsletters? </label>
                                    <label><input type="radio" name="optradio"> Declaro que li e aceito os termos e condições.</label>
                                </div>
                            </div> -->
                            <!-- <p><a href="/checkout" class="btn btn-primary py-3 px-4">Cadastrar</a></p> -->
                            <button class="btn btn-primary py-3 px-4" type="submit">Criar minha conta</button>
                        </div>
                    </div>
                </form>

                <!-- END -->

            </div>
            <!-- .col-md-8 -->
        </div>
    </div>
</section>
<!-- .section -->

@stop
