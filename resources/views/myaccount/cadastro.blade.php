@extends('layouts.master')

@section('pagina_titulo', '- Cadastro')

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

@section('content')

<!-- Vericação de erros -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
        @endif
</div>

<!-- adicionar botao nav register -->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate">
                <form method="POST" action="{{ route('cadastros.store') }}" class="billing-form">
                  @csrf
                    <h3 class="mb-4 billing-heading">Cadastro</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Senha') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirmar Senha') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary py-3 px-4" >{{ __('Criar Minha Conta') }}</button>
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

@stop
