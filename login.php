
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
  <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/signin/">

  <!-- Jquery no head -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
  <?php
  include_once "header.php";
  ?>
    
  <div class="container">
    <div class="col-lg-6">

    <form class="form-signin">
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
    <div class="col-lg-6">
  </div> <!-- /container -->



  <?php
  include_once "footer.php";
  ?>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>