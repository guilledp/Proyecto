<?php


$emailVacio = '';
$passVacio = '';
$formatoIncorrecto = '';
$pass ='';
$email ='';
$passRegistrado =false;
$passRegistrado = false;
$usuarioValido = false;
$success = "";

if (isset($_GET['registered'])) {
  if ($_GET['registered'] === 'true'){
    $success =  '    <div class="alert alert-success" role="alert"> Usuario generado con Exito! Inicie sesion aqui.</div>';
  }
}

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

  if ($passVacio == '' && $emailVacio == '' && $formatoIncorrecto == '' ) {

    $contenidoJson = file_get_contents('json/usuarios.json');
    $usuarios = json_decode($contenidoJson,true);

              foreach ($usuarios as $usuario) {

                //echo " <br> usuario registrado <br>" ;
                //var_dump($usuario['email']);

                if ($usuario['email']===$email) {
                  if (password_verify($pass,$usuario['password'])) {
                    $usuarioValido = true;
                  }else {
                    $usuarioValido = false;
                  }
                }
              }

              //echo " <br> el email que esta en el campo es <br> " . $email;

          // echo "usuario valido:  ";
          // var_dump($usuarioValido);
          // var_dump($usuarios);

        if ($usuarioValido =='true') {
            //INICIA SESION
            session_start();
            $_SESSION['id'] = $email;
            //echo "<br>la sesion esta a nombre de <br>" ;
            //var_dump($_SESSION['id']);
            header("location: index.php");
            //INICIA SESION
        } else {
          $passVacio = "*El usuario no existe o la contraseña es incorrecta";
        }
  }
}

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

      <?php echo $success; ?>

      <div class="row login">


        <form action="login.php" method="post" class="col-md-5 col-xl-3">

          <div class="logo">
            <img src="img\G-LOGO.png" alt="">
          </div>

            <div class="loginform form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo isset($email)? $email:""; ?>">
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
