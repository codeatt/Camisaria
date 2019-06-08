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

    <div class="hero-wrap hero-bread" style="background-image: url('https://movatsteste.000webhostapp.com/imagens/bg2_.png'); background-size: cover; background-position: top;">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/" style="color:#fff;">Home</a></span> <span style="color:#fff;">personalizar</span></p>
                    <h1 class="mb-0 bread" style="color:#dbcc8f !important; ">Minha Camisa</h1>
                </div>
            </div>
        </div>
    </div>

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
                        <a href="#" class="img-prod"><img class="img-fluid" src="https://movatsteste.000webhostapp.com/imagens/passo1.png" alt="Colorlib Template">
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
                        <a href="#" class="img-prod"><img class="img-fluid" src="https://movatsteste.000webhostapp.com/imagens/passo2.png" alt="Colorlib Template">
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
                        <a href="#" class="img-prod"><img class="img-fluid" src="https://movatsteste.000webhostapp.com/imagens/passo3.png" alt="Colorlib Template">
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
                        <a href="#" class="img-prod"><img class="img-fluid" src="https://movatsteste.000webhostapp.com/imagens/passo4.png" alt="Colorlib Template">
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


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="https://movatsteste.000webhostapp.com/imagens/camisa_social.jpg" class="image-popup prod-img-bg"><img src="https://movatsteste.000webhostapp.com/imagens/camisa_social.jpg" class="img-fluid" alt="produto"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>Camisa de Algodão</h3>
                    <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><i class="far fa-star"></i></a>
                            <a href="#"><i class="far fa-star"></i></a>
                            <a href="#"><i class="far fa-star"></i></a>
                            <a href="#"><i class="far fa-star"></i></a>
                            <a href="#"><i class="far fa-star"></i></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                    <p class="price"><span>R$120.00</span></p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><i class="fas fa-sort-down"></i></div>
                                    <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                            <i class="fas fa-minus-circle"></i>
	                	</button>
	            		</span>
                            <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                            <i class="fas fa-plus-circle"></i>
	                 </button>
	             	</span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <p style="color: #000;">80 piece available</p>
                        </div>
                    </div>
                    <p><a href="https://movatsteste.000webhostapp.com/carrinho.html" class="btn btn-primary py-3 px-5">Comprar</a></p>
                </div>
            </div>




            <div class="row mt-5">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>

                        <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Manufacturer</a>

                        <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Reviews</a>

                    </div>
                </div>
                <div class="col-md-12 tab-wrap">

                    <div class="tab-content bg-light" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="p-4">
                                <h3 class="mb-4">Nike Free RN 2019 iD</h3>
                                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little
                                    Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and
                                    Parole and dragged her into their agency, where they abused her for their.</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                            <div class="p-4">
                                <h3 class="mb-4">Manufactured By Nike</h3>
                                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little
                                    Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and
                                    Parole and dragged her into their agency, where they abused her for their.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                            <div class="row p-4">
                                <div class="col-md-7">
                                    <h3 class="mb-4">23 Reviews</h3>
                                    <div class="review">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="desc">
                                            <h4>
                                                <span class="text-left">Jacob Webb</span>
                                                <span class="text-right">14 March 2018</span>
                                            </h4>
                                            <p class="star">
                                                <span>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
							   					</span>
                                                <span class="text-right"><a href="#" class="reply"><i class="fas fa-reply-all"></i></a></span>
                                            </p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="desc">
                                            <h4>
                                                <span class="text-left">Jacob Webb</span>
                                                <span class="text-right">14 March 2018</span>
                                            </h4>
                                            <p class="star">
                                                <span>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
							   					</span>
                                                <span class="text-right"><a href="#" class="reply"><i class="fas fa-reply-all"></i></a></span>
                                            </p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="desc">
                                            <h4>
                                                <span class="text-left">Jacob Webb</span>
                                                <span class="text-right">14 March 2018</span>
                                            </h4>
                                            <p class="star">
                                                <span>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
							   					</span>
                                                <span class="text-right"><a href="#" class="reply"><i class="fas fa-reply-all"></i></a></span>
                                            </p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="rating-wrap">
                                        <h3 class="mb-4">Give a Review</h3>
                                        <p class="star">
                                            <span>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
							   					(98%)
						   					</span>
                                            <span>20 Reviews</span>
                                        </p>
                                        <p class="star">
                                            <span>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
							   					(85%)
						   					</span>
                                            <span>10 Reviews</span>
                                        </p>
                                        <p class="star">
                                            <span>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
							   					(98%)
						   					</span>
                                            <span>5 Reviews</span>
                                        </p>
                                        <p class="star">
                                            <span>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
							   					(98%)
						   					</span>
                                            <span>0 Reviews</span>
                                        </p>
                                        <p class="star">
                                            <span>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
							   					(98%)
						   					</span>
                                            <span>0 Reviews</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scriptCustomizado')
<script>
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
</script>

@stop