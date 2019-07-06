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

<?php $__env->startSection('content'); ?>


<!-- FIM MODAL -->

<div class="hero-wrap hero-bread" style="background-image: url('/imagens/bg2_.png'); background-size: cover; background-position: top;">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/" style="color:#fff;">Home</a></span> <span style="color:#fff;">Cadastro</span></p>
                <h1 class="mb-0 bread" style="color:#dbcc8f !important; ">Cadastro</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate">
                <form action="#" class="billing-form">
                    <h3 class="mb-4 billing-heading">Cadastro</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Nome</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        <div class="w-100"></div>
                        <div class="col-md-6">
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
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Cidade</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postcodezip">CEP</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <label class="mr-3"><input type="radio" name="optradio"> Deseja receber newsletters? </label>
                                    <label><input type="radio" name="optradio"> Declaro que li e aceito os termos e condições.</label>
                                </div>
                            </div>
                            <p><a href="/checkout" class="btn btn-primary py-3 px-4">Cadastrar</a></p>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Camisaria\Camisaria_Laravel\resources\views/cadastro.blade.php ENDPATH**/ ?>