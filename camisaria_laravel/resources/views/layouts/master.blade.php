<!DOCTYPE html>
<html lang="en">

<head>
    <title>A Camisaria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/imagens/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link href="/css/login-register-LR.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    @yield('styleCustomizado')
</head>

<body class="goto-here">
    <div class="py-1 bg-dark" id="topo">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                            <span class="text"><i class="fas fa-phone"></i>&nbsp;+55 11 1234-5678</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                            <span class="text" style="text-transform: initial;"><i class="far fa-envelope"></i>&nbsp;contato@camisaria.com.br</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text" id="texto_topo" style="text-transform: initial; font-style: italic;">Qualidade e bom gosto &amp; na medida certa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="https://movatsteste.000webhostapp.com/imagens/logo_camisaria_2.png" height="35px" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i> Menu
			</button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item  active"><a href="/#a_camisaria" class="nav-link">Quem Somos</a></li>
                    <li class="nav-item"><a href="/crie_sua_camisa" class="nav-link">Crie Sua Camisa</a></li>
                    <li class="nav-item"><a href="/contato" class="nav-link">Contato</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt"></i>&nbsp;Entrar</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" data-toggle="modal" data-target="#loginModal">Entrar</a>
                            <a class="dropdown-item" href="/cadastro">Criar minha conta</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

@yield('content')

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><i class="fas fa-chevron-up"></i></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">A Camisaria</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><i class="fab fa-twitter" style="font-size:28px;"></i></a></li>
                        <li class="ftco-animate"><a href="#"><i class="fab fa-facebook" style="font-size:28px;"></i></a></li>
                        <li class="ftco-animate"><a href="#"><i class="fab fa-instagram" style="font-size:28px;"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5 ">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="#a_camisaria" class=" scroll move">A Camisaria</a></li>
                        <li><a href="#passo_a_passo" class="py-2 d-block">Passo a Passo</a></li>
                        <li><a href="/crie_sua_camisa" class="py-2 d-block">Crie sua Camisa</a></li>
                        <li><a href="/contato" class="py-2 d-block">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Diversos</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Frete</a></li>
                            <li><a href="#" class="py-2 d-block">Política de &amp; Devolução</a></li>
                            <li><a href="#" class="py-2 d-block">Termos e &amp; Condições</a></li>
                            <li><a href="#" class="py-2 d-block">Política de Privacidade</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="/contato" class="py-2 d-block">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Dúvidas?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><i class="fas fa-home"></i><span class="text" style="padding-left:15px;">Nome da rua, 00 - Bairro | São Paulo - SP</span></li>
                            <li><i class="fas fa-phone"></i><span class="text" style="padding-left:15px;">(11) 1234-5678</span></li>
                            <li><i class="fas fa-envelope"></i><span class="text" style="padding-left:15px;">contato@camisaria.com.br</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>2019 - A Camisaria Copyright &copy; Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
  <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
  <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/js/google-map.js"></script>
<script src="/js/main.js"></script>

@yield('scriptCustomizado')

</body>

</html>