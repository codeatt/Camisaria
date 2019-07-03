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

button.mfp-arrow.mfp-arrow-left.mfp-prevent-close,
button.mfp-arrow.mfp-arrow-right.mfp-prevent-close {
    outline: none;
}

.mfp-arrow-right:after {
    border-left: 27px solid #3F3F3F;
    margin-left: 39px;
}
</style>
@stop

@section('content')

<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="/imagens/banner_img1.png" alt="">
                    <div class="one-forth d-flex align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">#APROVEITE!</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">Camisas Personalizadas</h1>
                                <p class="mb-4">Oferecemos uma vasta gama de combinações, que permitem total liberdade
                                    para que você crie a camisa que mais se adeque ao seu estilo.</p>

                                <a href="/crie_sua_camisa" class="btn-custom">Crie sua camisa!</a><br><br>
                                <a href="/#passo_a_passo" class="btn2">Passo a Passo</a>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="/imagens/banner_img2.png" alt="">
                    <div class="one-forth d-flex align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">#APROVEITE!</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">Camisas Personalizadas</h1>
                                <p class="mb-4">A partir da obtenção de suas medidas, através do nosso prático
                                    procedimento online, sua camisa é confeccionada respeitando a forma de seu corpo,
                                    minimizando imperfeições e acentuando atributos positivos.</p>
                                <a href="/crie_sua_camisa" class="btn-custom">Crie sua camisa!</a><br><br>
                                <a href="/#passo_a_passo" class="btn2">Passo a Passo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <img class="one-third order-md-last img-fluid" src="/imagens/banner_img3.png" alt="">
                    <div class="one-forth d-flex align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">#APROVEITE!</span>
                            <div class="horizontal">
                                <h1 class="mb-4 mt-3">Camisas Sob Medida!</h1>
                                <p class="mb-4">Oferecemos uma vasta gama de combinações, que permitem total liberdade
                                    para que você crie a camisa que mais se adeque ao seu estilo.</p>
                                <a href="/crie_sua_camisa" class="btn-custom">Crie sua camisa!</a><br><br>
                                <a href="/#passo_a_passo" class="btn2">Passo a Passo</a>
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
                <p>Acreditamos que vestir-se bem é um estilo de vida e nos traz personalidade, elegância, sucesso e
                    felicidade. Pensanso nisso possibilitamos que nossos clientes criem peças
                    personalizadas de acordo com seu estilo. Torne-se o protagonista e personalize cada detalhe de sua
                    camisa.</p>

                <p>A Camisaria une automação, moda e customização de peças. Nossa área de produção fica localizada na
                    cidade de São Paulo, com distribuição para todo o país.
                    Viva uma experiência única e crie sua própria camisa com a comodidade de comprar online e receber em
                    sua casa ou escritório um produto da mais alta qualidade feito sob medida.</p>

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
                <p>Confira todas as etapas da criação de sua camisa, desde a escolha da matéria prima até a entrega no
                    local desejado!</p>
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
                        <a id="saiba_mais" data-toggle="modal" data-target="#passo_a_passo_l"
                            style="cursor: pointer; color:#000;"><i class="far fa-question-circle"></i> Saiba Mais</a>
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
                        <a id="saiba_mais" data-toggle="modal" data-target="#passo_a_passo_2"
                            style="cursor: pointer; color:#000;"><i class="far fa-question-circle"></i> Saiba Mais</a>
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
                        <a id="saiba_mais" data-toggle="modal" data-target="#passo_a_passo_3"
                            style="cursor: pointer; color:#000;"><i class="far fa-question-circle"></i> Saiba Mais</a>

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
                        <br>
                        <a id="saiba_mais" data-toggle="modal" data-target="#passo_a_passo_4"
                            style="cursor: pointer; color:#000;"><i class="far fa-question-circle"></i> Saiba Mais</a>

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
                    <h4 style="line-height:1.0;" id="txt_promo">Personalize sua camisa até amanhã e <span
                            style="font-weight:bold;">ganhe 50% de desconto!</span></h4>
                    <p><a href="/crie_sua_camisa"><button type="button" class="btn btn-secondary btn-lg"
                                id="btn_home">Crie sua camisa!</button></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
                <h2 class="mb-4">&nbsp;</h2>
                <p></p>
            </div>
        </div> -->
    </div>
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="/imagens/bg2_.png" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(/imagens/bg2_.png);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="/imagens/bg4.png" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(/imagens/bg4.png);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="/imagens/alfaiate.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(/imagens/alfaiate.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="/imagens/camisa4.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(/imagens/camisa4.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="/imagens/img_home_baixo.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(/imagens/img_home_baixo.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 ftco-animate">
                <a href="/imagens/bg3.png" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(/imagens/bg3.png); color:#fff;">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus-circle" style="color: rgba(255,255,255,0.8); font-size:20px;"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>





<!--   MODAIS -->






<!-- Modal PASSO 1 -->
<div class="modal fade login" id="passo_a_passo_l" aria-labelledby="passo_a_passo_l">
    <div class="modal-dialog login animated" style="width:100%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Passo 1</h5>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">

                        <!-- ITEM 1 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 1 -->


                        <!-- ITEM 2 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 2 -->


                        <!-- ITEM 3 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 3 -->



                        <!-- ITEM 4 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 4 -->



                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>
                        <a data-toggle="modal" data-target="#passo_a_passo_2"><span style="color:#dbcc8f;">Passo 2</span></a>
                    </span>
                </div>
             </div>

        </div>
    </div>
</div>

<!-- FIM MODAL -->



<!-- Modal PASSO 2 -->
<div class="modal fade login" id="passo_a_passo_2" aria-labelledby="passo_a_passo_2">
    <div class="modal-dialog login animated" style="width:100%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Passo 2</h5>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">

                        <!-- ITEM 1 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 1 -->


                        <!-- ITEM 2 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 2 -->


                        <!-- ITEM 3 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 3 -->



                        <!-- ITEM 4 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 4 -->



                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>
                        <a data-toggle="modal" data-target="#passo_a_passo_3"><span style="color:#dbcc8f;">Passo 3</span></a>
                    </span>
                </div>
             </div>

        </div>
    </div>
</div>

<!-- FIM MODAL -->



<!-- Modal PASSO 3-->
<div class="modal fade login" id="passo_a_passo_3" aria-labelledby="passo_a_passo_3">
    <div class="modal-dialog login animated" style="width:100%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Passo 3</h5>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">

                        <!-- ITEM 1 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 1 -->


                        <!-- ITEM 2 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 2 -->


                        <!-- ITEM 3 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 3 -->



                        <!-- ITEM 4 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 4 -->



                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>
                        <a data-toggle="modal" data-target="#passo_a_passo_4"><span style="color:#dbcc8f;">Passo 4</span></a>
                    </span>
                </div>
             </div>

        </div>
    </div>
</div>

<!-- FIM MODAL -->


<!-- Modal PASSO 4-->
<div class="modal fade login" id="passo_a_passo_4" aria-labelledby="passo_a_passo_4">
    <div class="modal-dialog login animated" style="width:100%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title">Passo 4</h5>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">

                        <!-- ITEM 1 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 1 -->


                        <!-- ITEM 2 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 2 -->


                        <!-- ITEM 3 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 3 -->



                        <!-- ITEM 4 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                            <p>Defina o corte e caimento de sua camisa</p>
                        <div>
                           
                           
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            
                            
                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo. Recomendada para pessoa bem magras e em boa forma física.<br><br>
                                <img src='https://www.jquery-az.com/wp-content/uploads/2015/10/logo.jpg' width='175'>"> Ultra Slim
                            </button>
                            

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 4 -->



                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="forgot login-footer">
                    <!-- <span>
                        <a data-toggle="modal" data-target="#passo_a_passo_2"><span style="color:#dbcc8f;">Passo 2</span></a>
                    </span> -->
                </div>
             </div>

        </div>
    </div>
</div>

<!-- FIM MODAL -->















@stop