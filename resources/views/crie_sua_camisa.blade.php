@extends('layouts.master')
@section('pagina_titulo', '- Crie sua Camisa')

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

#btn_comprar.btn.btn-primary {
    background: #dbcc8f;
    border: none;
    color: #fff;
    border-radius: 7px;
    width: 70%;
    font-size: 16px;
    text-align: center;
    outline:none;
}

#btn_comprar.btn.btn-primary:hover {
    background-color:green;
    color: #fff;
    outline:none;
}



#btn_comprar..btn.btn-primary:focus,
 {
    background-color: green;
    color: #fff;
    outline:none;
}

.btn-primary:focus, .btn-primary.focus {

    box-shadow: none;
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

h6, .h6 {
    font-size: 1rem;
    font-weight: 600;
    color: #dbcc8f;
}
</style>
@stop

@section('content')

<div class="hero-wrap hero-bread"
    style="background-image: url('/imagens/bg2_.png'); background-size: cover; background-position: top;">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/" style="color:#fff;">Home</a></span> <span
                        style="color:#fff;">personalizar</span></p>
                <h1 class="mb-0 bread" style="color:#dbcc8f !important; ">Minha Camisa</h1>
            </div>
        </div>
    </div>
</div>





<section class="ftco-section"  style="padding: 7em 0 4em 0 !important;  position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  col-sm-6 col-md-6  ftco-animate" >
               <img src="/imagens/camisa_social.jpg" class="img-fluid" alt="produto">
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 product-details  ftco-animate">
            <h3 style="margin:15px 0px">Criando camisa personalizada</h3>
            <div class="row "  style="margin-left:15px;" >

             <!-- MODELO -->
                <div>

                  <form class="" action="/carrinho" method="post">
                    @csrf
                    <div class="form-group d-flex">
                        <div class="select-wrap" style="width:290px;">
                            <h6>Modelo</h6>
                            <div class="icon"><i class="fas fa-sort-down"></i></div>
                            <select name="Modelo" id="modelo" class="form-control" placeholder="Modelo">
                            <div class="icon"><i class="fas fa-sort-down"></i></div>
                                <option value="">Escolha</option>
                                <option value="ultra-slim">Ultra Slim</option>
                                <option value="slim-fit">Slim Fit</option>
                                <option value="normal">Normal</option>
                                <option value="comfort">Comfort</option>
                            </select>
                        </div>
                   </div>
                    <div class="form-group d-flex">
                        <div class="select-wrap" style="width:290px;">
                        <h6>Comprimento</h6>
                        <div class="icon"><i class="fas fa-sort-down"></i></div>
                        <select name="comprimento" id="comprimento" class="form-control" placeholder="comprimento">
                                <option value="">Escolha</option>
                                <option value="manga-longa">Manga Longa</option>
                                <option value="manga-curta">Manga Curta</option>
                        </select>
                        </div>
                   </div>
                    <div class="form-group d-flex">
                        <div class="select-wrap" style="width:290px;">
                        <h6>Colarinho</h6>
                        <div class="icon"><i class="fas fa-sort-down"></i></div>
                        <select name="colarinho" id="colarinho" class="form-control" placeholder="colarinho">
                               <option value="">Escolha</option>
                                <option value="frances">Frânces</option>
                                <option value="italiano">Italiano</option>
                                <option value="ingles">Inglês</option>
                                <option value="alemao">Alemão</option>
                        </select>
                        </div>
                   </div>
                    <div class="form-group d-flex">
                        <div class="select-wrap" style="width:290px;">
                        <h6>Bolso</h6>
                        <div class="icon"><i class="fas fa-sort-down"></i></div>
                        <select name="bolso" id="bolso" class="form-control" placeholder="bolso">
                                <option value="">Escolha</option>
                                <option value="com-bolso">Com Bolso</option>
                                <option value="sem-bolso">Sem Bolso</option>
                        </select>
                        </div>
                   </div>
                    <div class="form-group d-flex">
                        <div class="select-wrap" style="width:290px;">
                        <h6>Vista</h6>
                        <div class="icon"><i class="fas fa-sort-down"></i></div>
                        <select name="vista" id="vista" class="form-control" placeholder="vista">
                               <option value="">Escolha</option>
                                <option value="vista-lisa">Vista Lisa</option>
                                <option value="vista-classica">Vista Clássica</option>
                        </select>
                        </div>
                   </div>
                    <div class="form-group d-flex">
                        <div class="select-wrap" style="width:290px;">
                        <h6>Estilo</h6>
                        <div class="icon"><i class="fas fa-sort-down"></i></div>
                        <select name="estilo" id="estilo" class="form-control" placeholder="estilo">
                               <option value="">Escolha</option>
                               <option value="casual">Casual</option>
                               <option value="social">Social</option>
                        </select>
                        </div>
                   </div>

                   <div class="col-md-8">
                     <p style="">
                       <input type="submit" class="btn btn-primary py-3 " id="btn_comprar" style="-max=width:200px;">
                         Adicionar ao carrinho
                       </a>
                     </p>
                   </div>

                  </form>

                </div> <!-- MODELO fim -->

            </div>
          </div>
        </div>
</section>




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
                    <a class="img-prod"><img class="img-fluid" src="/imagens/passo1.png" alt="">
                        <span class="status">PASSO 1</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>Modelo</span>
                            </div>
                        </div>
                        <h3>Informações sobre as características e personalizações que sua camisa pode ter.</h3>
                        <a id="saiba_mais" data-toggle="modal" data-target="#passo_a_passo_l"
                            style="cursor: pointer; color:#000;"><i class="far fa-question-circle"></i> Saiba Mais</a>
                    </div>

                </div>
            </div>

            <!-- FIM PRODUTO -->

            <!-- PRODUTO -->

            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a class="img-prod"><img class="img-fluid" src="/imagens/passo2.png" alt="">
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
                    <a class="img-prod"><img class="img-fluid" src="/imagens/passo3.png" alt="">
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
                    <a class="img-prod"><img class="img-fluid" src="/imagens/passo4.png" alt="">
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
            <div class="modal-body" style="overflow:auto; max-height:600px;">
                <div class="box">
                    <div class="content">

                        <!-- ITEM 1 -->

                        <h4 style=" color:#fff;">Modelo</h4>
                        <p>Conheça os corte e caimentos de uma camisa</p>
                        <div>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Ultra Slim</span></p>
                                Caimento bem enxuto, a camisa fica bem próxima ao corpo.<br> <b>Recomendada para pessoas bem magras e em boa forma física.</b><br><br>
                                <img src='imagens/ultra_slim.jpg' width='175'>">
                                Ultra Slim
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Slim Fit</span></p>
                                Caimento aderente ao corpo, une modernidade e conforto. Ideal para quem quer um visual jovem e contemporâneo.<br><br>
                                <img src='imagens/slim_fit.jpg' width='175'>">
                                Slim Fit
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Normal</span></p>
                                Camisa com corte tradicional, não tão aderente ao corpo, mantendo a elegância de uma peça sob medida.<br><br>
                                <img src='imagens/normal.jpg' width='175'>">
                                Normal
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Comfort</span></p>
                                Camisa com corte mais largo, ideal para quem preza por uma peça mais solta não evidenciando a forma física.<br><br>
                                <img src='imagens/comfort.jpg' width='175'>">
                                Comfort

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 1 -->


                        <!-- ITEM 4 -->

                        <h4 style=" color:#fff;">Comprimento da Manga</h4>
                        <p>Sua camisa terá manda longa ou curta?</p>
                        <div>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Longa</span></p>
                                Camisa de manga Longa.<br><br>
                                <img src='imagens/manga_longa.png' width='175'>">
                                Longa
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Curta</span></p>
                               Camisa de manga curta.<br><br>
                                <img src='imagens/manga_curta.jpg' width='175'>">
                                Curta
                            </button>

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 2 -->

                        <!-- ITEM 3 -->

                        <h4 style=" color:#fff;">Colarinho</h4>
                        <p>Conheça os tipos de colarinho de uma camisa</p>
                        <div>

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Frânces</span></p>
                                Apresenta grande versatilidade adaptando-se a qualquer ocasião, mantendo a elegância
                                 quando usado tanto com ou sem gravata, além de combinar com qualquer tipo de rosto<br>
                                 <b>Os nós indicados são o half-windsor e o four-in-hand.</b><br><br>
                                <img src='imagens/colarinho_frances.png' width='175'>">
                                Frânces
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Italiano</span></p>
                                Caracterizado pelas pontas bem abertas o colarinho italiano transmite grande elegância e sofisticação. Usado preferencialmente com nós de gravata mais
                                volumosos como o windsor ou nó duplo. <br><b>Indicado para rostos ovais, estreitos ou finos.</b><br><br>
                                <img src='imagens/colarinho_italiano.jpg' width='175'>">
                                Italiano
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Inglês</span></p>
                                Colarinho mais alongado. Combina melhor com o half-windor.<br><b>Recomendado para homens com rosto redondo.</b><br><br>
                                <img src='imagens/colarinho_ingles.png' width='175'>">
                                Inglês
                            </button>

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Americano</span></p>
                                É o mais informal dentre todos. Também pode ser usado com gravata mas preferencialmente usado sem. Os nós recomendados são o four-in-hand, half-windsor e windsor.
                                <br> <b>Indicado para rostos ovais, redondos e quadrados.</b><br><br>
                                <img src='imagens/colarinho_americano.jpg' width='175'>">
                                Americano
                            </button>

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 2 -->


                        <!-- ITEM 3 -->

                        <h4 style=" color:#fff;">Bolso</h4>
                        <p>Camisa com bolso ou sem?</p>
                        <div>

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Com Bolso</span></p>
                                O bolso deve ser visto mais como uma questão de estilo.<br>
                                <b>É recomendado que se evite armazenar objetos no bolso da camisa para manter a elegância.</b><br><br>
                                <img src='imagens/bolso_classico.png' width='175'>">
                                Com Bolso
                            </button>

                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true"
                                title="<p><span style='color:#bb935f; font-weight:bold;'>Sem Bolso</span></p>
                               Para situações mais formais recomenda-se a utilização de camisa sem bolso, principalmente quanto acompanhada de terno.>">
                                Sem Bolso
                            </button>

                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 3 -->


                        <!-- ITEM 4 -->

                        <h4 style=" color:#fff;">Vista</h4>
                        <p>Conheça os tipos de vista de uma camisa.</p>
                        <div>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Vista Lisa</span></p>
                               Também conhecida como vista francesa, se identifica por ser plana e sem costura.<br><br>
                                <img src='imagens/vista_lisa.png' width='175'>">
                                Vista Lisa
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Vista Clássica</span></p>
                               Também conhecida como vista militar, é identificada por ter costura em ambas laterais com leve levantamento do tecido.<br><br>
                                <img src='imagens/vista_classica.jpg' width='175'>">
                                Vista Clássica
                            </button>



                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">

                        <!-- FIM ITEM 4 -->


                        <!-- ITEM 4 -->

                        <h4 style=" color:#fff;">Comprimento</h4>
                        <p>Camisa casual ou social?</p>
                        <div>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Casual</span></p>
                               Camisa ideal para ser utilizada para fora da calça em situações de maior informalidade. <br>
                               <b>Em torno de 3cm acima do final do quadril.</b><br><br>
                                <img src='imagens/camisa_social.jpg' width='175'>">
                                Casual
                            </button>


                            <button type="button" class="btn btn-default btn-modal" data-toggle="tooltip"
                                data-html="true" title="<p><span style='color:#bb935f; font-weight:bold;'>Social</span></p>
                               A camisa social é mais comprida que a casual, para que não saia com facilidade de dentro da calça. <br>
                               <b>Chega quase ao final do quadril.</b><br><br>
                                <img src='imagens/camisa_social.jpg' width='175'>">
                                Social
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

                        <h4 style=" color:#fff;">Medidas</h4>
                        <!-- <p>Conheça o corte e caimento de sua camisa</p> -->
                        <div>


                            <p>Para que possamos confeccionar uma camisa com um caimento perfeito para você precisamos
                                de suas medidas exatas. </p>



                            <p>Para isso pensamos em um processo online rápido e fácil, você com a ajuda de um amigo
                                pode tranquilamente tirar todas as medidas necessárias.</p>

                            <span style="color:#dbcc8f; padding-bottom:25px; text-align:center;">Assista o vídeo abaixo
                                e aprenda a tirar as medidas de sua
                                camisa.</span> <br><br>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" width="560" height="315"
                                    src="https://www.youtube.com/embed/gqTxxVeKqXo" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>


                        </div>

                        <hr style=" border-color:gray; margin-bottom:15px !important; margin-top:15px !important;">


                        <!-- FIM ITEM 1 -->

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="forgot login-footer">
                    <!-- <span>
                        <a data-toggle="modal" data-target="#passo_a_passo_3"><span style="color:#dbcc8f;">Passo 3</span></a>
                    </span> -->
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
                    <div class="content" style="line-height:normal; padding-left:20px; padding-right:15px;">

                        <!-- ITEM 1 -->

                        <h4 style=" color:#fff;">Confecção</h4>

                        <img src="/imagens/bg4.png" style="margin:15px 0px;" class="img-fluid" alt="Responsive image">
                        <br><br>
                        <p>Recebemos suas medidas e desenvolvemos uma modelagem exclusiva, que leva o seu nome.
                            Arquivamos tudo, com isso seu próximo pedido fica muito mais fácil evitando o processo de
                            medição.</p>

                        <p>Nossos alfaiates cortam, costuram e finalizam sua camisa. Em seguida conferimos se as medidas
                            de sua peça estão como pediu, para depois passar, dobrar e embalar sua nova camisa.</p>

                        <p>Nos despedimos da camisa e a enviamos para você o mais rápido possível.</p>
                        <div>

                        </div>

                        <hr style=" border-color:gray; margin-bottom:20px !important; margin-top:30px !important;">


                    </div>
                </div>
            </div>
            <!--
            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>
                        <a data-toggle="modal" data-target="#passo_a_passo_4"><span style="color:#dbcc8f;">Passo
                                4</span></a>
                    </span>
                </div>
            </div> -->

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
                    <div class="content" style="line-height:normal; padding-left:20px; padding-right:15px;">

                        <!-- ITEM 1 -->

                        <h4 style=" color:#fff;">Entrega</h4>

                        <img src="/imagens/entrega.jpg" style="margin:15px 0px;" class="img-fluid"
                            alt="Responsive image">
                        <br><br>
                        <p>Nossa plataforma permite que você receba uma camisa da mais alta qualidade, sob medida,
                            produzida com tecidos de primeira linha e confeccionada por grandes alfaiates com toda a
                            comodidade
                            de não precisar sair de casa. Nossos alfaiates aguardam para produzir produtos especialmente
                            para você.</p>
                        <p>Nossas camisas sob-medida são cortadas e ajustadas especialmente para você, em um processo
                            manual,
                            que resulta em um prazo de entrega de até 20 dias úteis no caso da utilização de sedex e até
                            24 dias úteis quando a escolha for PAC.</p>


                        <div>

                        </div>

                        <hr style=" border-color:gray; margin-bottom:20px !important; margin-top:30px !important;">


                    </div>
                </div>
            </div>
            <!--
            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>
                        <a data-toggle="modal" data-target="#passo_a_passo_4"><span style="color:#dbcc8f;">Passo
                                4</span></a>
                    </span>
                </div>
            </div> -->

        </div>
    </div>
</div>

<!-- FIM MODAL -->

@stop
