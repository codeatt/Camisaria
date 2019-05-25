@extends('layouts.master')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="imagens/bg4.png" alt="New York" width="1200" height="700">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="imagens/bg2.png" alt="Chicago" width="1200" height="700">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="imagens/bg3.png" alt="Los Angeles" width="1200" height="700">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- SOBRE -->
    <div id="sobre" class="container text-center">
        <h3>SOBRE</h3>
        <p><em>Camisas Sob Medida</em></p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum id asperiores numquam debitis dolorem possimus repudiandae. Atque harum, perspiciatis voluptatem doloremque praesentium sapiente voluptas possimus aperiam quasi, veniam ratione nam.
        </p>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p class="text-center"><strong>Título um</strong></p><br>
                <a href="#demo" data-toggle="collapse">
                    <img src="imagens/colarinho-classico.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo" class="collapse">
                    <p>Título a definir</p>
                    <p>Descrição 1 a definir e bla bla bla</p>
                    <p>Texto genérico bla bla</p>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>Título dois</strong></p><br>
                <a href="#demo2" data-toggle="collapse">
                    <img src="imagens/colarinho-italiano.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo2" class="collapse">
                    <p>Título a definir</p>
                    <p>Descrição 1 a definir e bla bla bla</p>
                    <p>Texto genérico bla bla</p>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>Título três</strong></p><br>
                <a href="#demo3" data-toggle="collapse">
                    <img src="imagens/colarinho-meio-italiano.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo3" class="collapse">
                    <p>Título a definir</p>
                    <p>Descrição 1 a definir e bla bla bla</p>
                    <p>Texto genérico bla bla</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVIÇOS -->
    <div id="servicos" class="bg-1" >
        <div class="container">
            <h3 class="text-center">SERVIÇOS</h3>
            <p class="text-center" style="margin-bottom:30px;">Lorem ipsum we'll play you some music.</p>


            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="imagens/imagem_1.jpg" alt="" width="400" height="300">
                        <p><strong>Serviço Um</strong></p>
                        <p>Aqui vai a descrição</p>
                        <button class="btn " data-toggle="modal" data-target="#" style="width:90%;">Clique aqui</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="imagens/imagem_2.jpg" alt="" width="400" height="300">
                        <p><strong>Serviço Dois</strong></p>
                        <p>Aqui vai a descrição</p>
                        <button class="btn " data-toggle="modal" data-target="#" style="width:90%;">Clique aqui</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="imagens/imagem_3.jpg" alt="" width="400" height="300">
                        <p><strong>Serviço Três</strong></p>
                        <p>Aqui vai a descrição</p>
                        <button class="btn" data-toggle="modal" data-target="#" style="width:90%;">Clique aqui</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                                <input type="number" class="form-control" id="psw" placeholder="How many?">
                            </div>
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
                        <p>Need <a href="#">help?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTATO -->
    <div id="contact" class="container">
        <h3 class="text-center">CONTATO</h3>
        <p class="text-center" style="margin-bottom:30px;"><em>Preencha seus dados. Retornaremos assim que possível.</em></p>

        <div class="row">
            <div class="col-md-4">
                <p>Nome da rua, 00 - Bairro</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp; São Paulo - SP</p>
                <p><span class="glyphicon glyphicon-phone"></span>&nbsp;Fone: +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span>&nbsp;Email: contato@acamiseraria.com.br</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentário" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Image of location/map -->
    <img src="imagens/img_home_baixo.jpg" class="img-responsive" style="width:100%">
@stop