<?php
$emailVacio = '';
$passVacio = '';
$formatoIncorrecto = '';
$pass ='';
$email ='';

if ($_POST) {

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  if (empty($email)) {
  $emailVacio = "*Debe ingresar un email";}
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $formatoIncorrecto = "*el formato es incorrecto, debe ser nombre@ejemplo.com";
  }

  if (empty($pass)) {
  $passVacio = "*Debe ingresar una contraseña";
  }

  if ($passVacio == '' && $formatoIncorrecto == '' && $email == 'guille_dp@hotmail.com' && $pass == '1234') {
    header("location: index.php");
  }else {
    $passVacio = "*El usuario no existe o la contraseña es incorrecta.";
  }

}

// echo var_dump($passVacio) . var_dump($formatoIncorrecto) . var_dump($email) . var_dump($pass);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Mi perfil</title>
  </head>

  <body>

      <div class="row login">

        <form action="login.php" method="post" class="col-md-5 col-xl-3">

          <div class="logo">
            <img src="img\G-LOGO.png" alt="">
          </div>

            <div class="loginform form-group">
              <input type="DSDFSD" class="form-control" id="email" name="email" placeholder="email" value="<?php echo isset($email)? $email:""; ?>">
            </div>
            <p class="invalid-feedback"><?php  echo $emailVacio . $formatoIncorrecto;?></p>

            <div class="loginform form-group">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" >
            </div>
            <p class="invalid-feedback"><?php  echo $passVacio;?></p>


          <div class="botones">

            <!-- <button type="login" class="btn btn-secondary">Registrarse </button>
            <button type="login" class="btn btn-primary">Login</button> -->
            <input type="submit" class="btn btn-primary" value="login" >
            <a href="register.php" class="btn btn-secondary" >Registrarse</a>

          </div>

          <footer>

            (c) 2019 Guille

          </footer>

        </form>

      </div>


  </body>
</html>
