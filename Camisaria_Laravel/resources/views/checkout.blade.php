@extends('layouts.master')

@section('styleCustomizado')
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
@stop

@section('content')

<!-- Modal -->
<div class="modal fade login" id="loginModal" aria-labelledby="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Entrar com</h4>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="social">
                            <a class="circle github" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                            <a id="google_login" class="circle google" href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a id="facebook_login" class="circle facebook" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="division">
                            <div class="line l"></div>
                            <span>ou</span>
                            <div class="line r"></div>
                        </div>
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
                            <form method="" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
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
          <a href="/cadastro"><span style="color:#dbcc8f;">criar uma conta</span></a>
                    ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <a href="/cadastro"><span>Ainda não é cadastrado?</span></a>
                    <a href="javascript: showLoginForm();">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIM MODAL -->

<div class="hero-wrap hero-bread" style="background-image: url('/imagens/bg2_.png'); background-size: cover; background-position: top;">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/" style="color:#fff;">Home</a></span><span style="color:#fff;">checkout</span></p>
                <h1 class="mb-0 bread" style="color:#dbcc8f !important; ">Checkout</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate">
                <form action="#" class="billing-form">
                    <h3 class="mb-4 billing-heading">Detalhes da Compra</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Nome</label>
                                <div class="preenchido">Marcos</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Sobrenome</label>
                                <div class="preenchido">Vicente</div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Estado</label>
                                <div class="preenchido">São Paulo</div>
                            </div>
                        </div>
                        <div class="w-100"></div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="preenchido">Nome da rua, 00</div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Cidade</label>
                                <div class="preenchido">São Paulo</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postcodezip">CEP</label>
                                <div class="preenchido">00000000000</div>
                            </div>
                        </div>
                        <div class="w-100"></div>

                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <label class="mr-3"><input type="radio" name="optradio"> Deseja receber futuros comunicados? </label>
                                    <label><input type="radio" name="optradio"> Enviar o pedido para o endereço cadastrado?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- FORM END -->

                <div class="row mt-5 pt-3 d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="cart-detail cart-total bg-light p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Total da Compra</h3>
                            <p class="d-flex">
                                <span>Sub Total</span>
                                <span>R$20.60</span>
                            </p>
                            <p class="d-flex">
                                <span>Frete</span>
                                <span>R$5.00</span>
                            </p>
                            <p class="d-flex">
                                <span>Desconto</span>
                                <span>R$3.00</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>R$22.60</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-detail bg-light p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Formas de Pagamento</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Transferência Eletrônica</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Boleto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Cartão de Crédito</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" class="mr-2"> Declaro que li e aceito os termos e condições.</label>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#loginModal2">Finalizar o Pedido</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-8 -->
        </div>
    </div>
</section>

<!-- END section -->

<!-- Modal -->

<div class="modal fade login" id="loginModal2" aria-labelledby="loginModal2">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="social">
                            <h4 class="modal-title" style="text-align:center;">Pedido realizado com sucesso!</h4>
                            <div class="division">
                                <div class="line l"></div>
                            </div>
                            <h1 style="font-weight:bold; color:#fff;">1903932-0392</h1>
                            <p>Em breve você recebrá um e-mail com os detalhes da compra!</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIM MODAL -->

@stop
