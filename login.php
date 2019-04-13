
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Tela de Login em Bootstrap">
  <meta name="author" content="Sergio Renato Bentes Reis Junior">
  <link rel="icon" href="../../favicon.ico">

  <title>Login</title>

  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/signin/"> -->

  <!-- Jquery no head -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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


  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
  <!-- Header -->
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>                        
  </button>
            <a class="navbar-brand" href="index.php"><img src="imagens/logo_camisaria_2.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php#sobre">SOBRE</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="contato.php">CONTATO</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="#contact">PRODUTOS</a></li>
                <li><a href="#contact">SERVIÇOS</a></li>
                

               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">OUTROS
      <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Lorem ipsum 1</a></li>
                        <li><a href="#">Lorem ipsum 2</a></li>
                        <li><a href="#">Lorem ipsum 3</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> 
            </ul>
        </div>
    </div>
</nav>

    
  <div class="container">
  <div class="col-lg-4"></div>
    <div class="col-lg-4">

    <form class="form-signin center-block">
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    </div>
    <div class="col-lg-4"></div>
  </div> <!-- /container -->



  <?php
  include_once "footer.php";
  ?>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>