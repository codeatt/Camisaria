@extends('layouts.master')
@section('pagina_titulo', '- Contato')

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
button.mfp-arrow.mfp-arrow-left.mfp-prevent-close, button.mfp-arrow.mfp-arrow-right.mfp-prevent-close {
    outline: none;
}

.mfp-arrow-right:after {
    border-left: 27px solid #3F3F3F;
    

</style>
@stop

@section('content')

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
            <div class="row d-flex mb-5 contact-info"  style="position: relative; top: 20px;">
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
               
                    <form action="/php/mail.php" id="myForm" class="bg-white p-5 contact-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome" name="nome">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                        </div>
                        <div class="form-group">
                            <textarea name="mensagem" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar" name="submit" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

    
    

                </div>

                <div class="col-md-6 d-flex">

                <iframe width="100%" height="100%"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.050976600197!2d-46.67744558439356!3d-23.602504668999522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7e792ef9%3A0x1eaad4d76eaaf389!2sAv.+Dr.+Cardoso+de+Melo%2C+90+-+Vila+Ol%C3%ADmpia%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1563423593950!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>

   
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
                    <h2 class="mb-4">&nbsp;</h2>
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p> -->
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
