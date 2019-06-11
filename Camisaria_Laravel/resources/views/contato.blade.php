@extends('layouts.master')

@section('styleCustomizado')
<style>

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
                    <p class="breadcrumbs"><span class="mr-2"><a href="/" style="color:#fff;">Home</a></span> <span style="color:#fff;">Contato</span></p>
                    <h1 class="mb-0 bread" style="color:#dbcc8f !important; ">Contato</h1>
                </div>
            </div>
        </div>
    </div>

<!-- NOVA SESSÃO -->

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Endereço:</span> Nome da rua, 00 - Bairro | São Paulo - SP</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Telefone:</span> <a href="#">(11) 1234-5678</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Email:</span> <a href="#">contato@camisaria.com.br</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Site</span> <a href="#">wwww.camisaria.com.br</a></p>
                    </div>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-white p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
                    <h2 class="mb-4">Clientes satisfeitos!</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="/imagens/bg2_.png" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/imagens/bg2_.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="/imagens/bg4.png" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/imagens/bg4.png);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="/imagens/alfaiate.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/imagens/alfaiate.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="/imagens/camisa4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/imagens/camisa4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="/imagens/img_home_baixo.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/imagens/img_home_baixo.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="/imagens/bg3.png" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/imagens/bg3.png); color:#fff;">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@stop
