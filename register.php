<?php

$email = '';
$nombre ='';
$apellido = '';
$idEmpresa = '';
$password = '';
$rePass= '';
$errorPassword ='';
$errorTerminos ='';
$formatoIncorrecto='';
$errorCampos='';
$contenidoJson='';

if ($_POST) {

  $email = $_POST['email'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $idEmpresa = $_POST['idEmpresa'];
  $password = $_POST['password'];
  $rePass = $_POST['rePass'];

  //*************VALIDAR EMAIL
  if (empty($email)) {
  $formatoIncorrecto = "*debe ingresar un email <br>";
  }else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $formatoIncorrecto = "*el email debe ser nombre@ejemplo.com <br>";
    }
  }
  //*************VALIDAR EMAIL

  //*************VERIFICAR QUE TODOS LOS CAMPOS ESTEN COMPLETOS
  if ($email=='' || $nombre=='' || $apellido=='' || $idEmpresa=='' || $password=='' || $rePass=='')
  {
    $errorCampos = '*Debe completar todos los campos <br>';
  }
  //*************VERIFICAR QUE TODOS LOS CAMPOS ESTEN COMPLETOS

 //*************VALIDAR CONTRASEÑA
    if ($password!=$rePass) {
      $errorPassword = '*Las contraseñas no coinciden <br>';
    }
  //*************VALIDAR CONTRASEÑA

  //*************VALIDAR TODOS LOS CAMPOS
  if ($errorPassword =="" && $errorCampos =="" && $formatoIncorrecto =="") {

      $contenidoJson = file_get_contents('json/usuarios.json');
      $usuarios = json_decode($contenidoJson,true);

      $usuarios[] =[
        'email' => $email,
        'password' => password_hash($password,PASSWORD_DEFAULT),
        'nombre' => $nombre,
        'apellido' => $apellido,
        'idEempresa' => $idEmpresa,
      ];

      $usuariosJson = json_encode($usuarios);
      file_put_contents('json/usuarios.json',$usuariosJson);

      //SI VA BIEN REDIRIGE A SUCCESS.PHP
      header("location: login.php?registered=true");
      //SI VA BIEN REDIRIGE A SUCCESS.PHP

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

      <div class="row login">


<form action="register.php" method="post" class="col-md-5 col-xl-3" >

          <div class="logo">
            <img src="img\G-LOGO.png" alt="">
          </div>

          <div class="campos_registro">

            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="email" value="<?= $email?>">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?= $nombre?>">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="apellido" placeholder="apellido" value="<?= $apellido?>">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="idEmpresa" placeholder="ID Empresa Ejemplo: AXQCFM" value="<?= $idEmpresa?>">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="<?=$password?>">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="rePass" placeholder ="Vuelva a escribir la Contraseña" value="<?=$rePass?>">
            </div>

          </div>

          <div class="botones">

            <a href="login.php" class="btn btn-secondary" >login</a>
            <input type="submit" class="btn btn-primary" value="Registrarse" >

            <div class="terminos">
              <label class="" for="check1">Acepto los terminos</label>
              <input class="" type="checkbox" name="terminos" value="">
            </div>

            <p class="invalid-feedback"> <?php echo $errorCampos . $formatoIncorrecto . $errorPassword;?></p>

          </div>

          <footer>

            (c) 2019 Guille

          </footer>
</form>


      </div>


  </body>
</html>
