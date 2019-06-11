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
    /*  padding: 7em 0; */
    position: relative;
}

.btn.btn-primary {
    background: #dbcc8f;
    border: none;
    color: #fff;
    border-radius: 7px;
    width: 60%;
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
							<a href="https://movatsteste.000webhostapp.com/cadastro.html"><span style="color:#dbcc8f;">criar uma conta</span></a>
                        ?</span>
                    </div>
                    <div class="forgot register-footer" style="display:none">
                        <a href="https://movatsteste.000webhostapp.com/cadastro.html"><span>Ainda não é cadastrado?</span></a>
                        <a href="javascript: showLoginForm();">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM MODAL -->



    <div class="hero-wrap hero-bread" style="background-image: url('https://movatsteste.000webhostapp.com/imagens/bg2_.png'); background-size: cover; background-position: top;">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="https://movatsteste.000webhostapp.com/index.html" style="color:#fff;">Home</a></span> <span style="color:#fff;">carrinho</span></p>
                    <h1 class="mb-0 bread" style="color:#dbcc8f !important; ">Meu Carrinho</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(imagens/camisa_social.jpg);"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Camisa 100% algodão </h3>
                                        <p>Far far away, behind the word mountains, far from the countries</p>
                                    </td>

                                    <td class="price">R$194,90</td>

                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                        </div>
                                    </td>

                                    <td class="total">R$194,90</td>
                                </tr>
                                <!-- END TR-->

                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(https://movatsteste.000webhostapp.com/imagens/camisa_social.jpg);"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Algodão 100% camisa</h3>
                                        <p>Far far away, behind the word mountains, far from the countries</p>
                                    </td>

                                    <td class="price">R$150,70</td>

                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                        </div>
                                    </td>

                                    <td class="total">R$150,70</td>
                                </tr>
                                <!-- END TR-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Valor Total da Compra</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>R$345,60</span>
                        </p>
                        <p class="d-flex">
                            <span>Frete</span>
                            <span>R$19,00</span>
                        </p>
                        <p class="d-flex">
                            <span>Desconto</span>
                            <span>R$0,00</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>R$364.60</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="https://movatsteste.000webhostapp.com/checkout.html" class="btn btn-primary py-3 px-4">Realizar a Compra</a></p>
                </div>
            </div>
        </div>
    </section>
<!-- Section -->

@stop
