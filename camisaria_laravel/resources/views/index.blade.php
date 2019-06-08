@extends('layouts.master')

@section('styleCustomizado')
<style>

</style>
@stop

@section('content')
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
          <a href="/cadastro.html"><span style="color:#dbcc8f;">criar uma conta</span></a>
                    ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <a href="/cadastro.html"><span>Ainda não é cadastrado?</span></a>
                    <a href="javascript: showLoginForm();">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIM MODAL -->

<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="/imagens/banner_img1.png" alt="">
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">#APROVEITE!</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">Camisas Personalizadas</h1>
                                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>

                                <p><a href="/crie_sua_camisa.html" class="btn-custom">Crie sua camisa!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="/imagens/banner_img2.png" alt="">
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">#APROVEITE!</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">Camisas Personalizadas</h1>
                                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>

                                <p><a href="/crie_sua_camisa.html" class="btn-custom">Crie sua camisa!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>





<!-- QUEM SOMOS -->

<section class="ftco-section bg-white" style="margin-bottom:40px;" id="a_camisaria">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="color:#dbcc8f !important; ">A Camisaria</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                    Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                    "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                <p> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied
                    by English versions from the 1914 translation by H. Rackham.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

        </div>
</section>

<!-- FIM SESSÃO -->

<!-- NOVA SESSÃO -->

<section class="ftco-section bg-light" style="margin-bottom:40px;" id="passo_a_passo">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Passo a Passo</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- PRODUTO -->

            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a href="#" class="img-prod"><img class="img-fluid" src="/imagens/passo1.png" alt="">
                        <span class="status">PASSO 1</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>Modelo</span>
                            </div>
                        </div>
                        <h3>Defina o modelo, tecido e carcterísticas de sua camisa.</h3>
                    </div>
                </div>
            </div>

            <!-- FIM PRODUTO -->

            <!-- PRODUTO -->

            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a href="#" class="img-prod"><img class="img-fluid" src="/imagens/passo2.png" alt="">
                        <span class="status">PASSO 2</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>Medidas</span>
                            </div>

                        </div>
                        <h3>Insira suas medidas, de acordo com o informado no site.</h3>


                    </div>
                </div>
            </div>

            <!-- FIM PRODUTO -->

            <!-- PRODUTO -->

            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a href="#" class="img-prod"><img class="img-fluid" src="/imagens/passo3.png" alt="">
                        <span class="status">PASSO 3</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>Confecção</span>
                            </div>

                        </div>
                        <h3>Sua camisa será confeccionada em até 7 dias úteis.</h3>


                    </div>
                </div>
            </div>

            <!-- FIM PRODUTO -->

            <!-- PRODUTO -->

            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a href="#" class="img-prod"><img class="img-fluid" src="/imagens/passo4.png" alt="">
                        <span class="status">PASSO 4</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>Entrega</span>
                            </div>

                        </div>
                        <h3>Receba sua camisa personalizada em casa.</h3>
                    </div>
                </div>
            </div>

            <!-- FIM PRODUTO -->

        </div>
</section>

<!-- FIM SESSÃO -->

<section class="ftco-section ftco-deal bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/imagens/camisa2.png" id="img_promo" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="heading-section heading-section-white align-middle">
                    <span class="subheading">&nbsp;</span>
                    <h2 style="margin:0px;"><span style="color:#fff;" id="h2_promo">24 Horas de Loucura!</span></h2>
                </div>
                <p id="demo"></p>
                <div class="text-deal">
                    <h4 style="line-height:1.0;" id="txt_promo">Personalize sua camisa até amanhã e <span style="font-weight:bold;">ganhe 50% de desconto!</span></h4>
                    <p><a href="/crie_sua_camisa.html"><button type="button"  class="btn btn-secondary btn-lg" id="btn_home">Crie sua camisa!</button></a></p>

                </div>
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

<script>
  $(function(){
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
  })
</script>
