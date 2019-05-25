<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>A Camisaria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <!-- Header -->
  <nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>                        
  </button>
            <a class="navbar-brand collapse navbar-collapse" href="#home"><img src="imagens/logo_camisaria_2.png"    alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">


            <li><a href="#sobre">SOBRE</a></li>            
                <li><a href="#produtos">PRODUTOS</a></li>
                <li><a href="#servicos">SERVIÇOS</a></li>
                <li><a href="#cadastro" >CADASTRO</a></li>  
                <li><a href="#contato">CONTATO</a></li>

               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
      <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       
                        <li> <form class="form-signin center-block">
                            <h2 class="form-signin-heading">Login</h2>
                            <label for="inputEmail" class="sr-only">E-mail</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" style="width:90%;" required autofocus>
                            <label for="inputPassword" class="sr-only">Senha</label>
                            <input type="password" id="inserirSenha" class="form-control" placeholder="Senha" style="width:90%;" required>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value="Lembrar Senha"> <span style="padding-left:20px;">Lembrar Senha</span>
                              </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit"style="width:90%;">Logar</button>
                            </form>
                                   </li>
                    </ul>
                </li>
              <!--  <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="VOLTAR AO TOPO">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>© 2019 A Camisaria - Todos os direitos reservados.
            <!--<a href="#" data-toggle="tooltip" title="Visit w3schools">url do site</a> --></p>
    </footer>

    <script>
        $(document).ready(function() {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>

</body>

</html>
