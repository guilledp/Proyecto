<?php

$errorTerminos ='';
$errorCampos = '';
$emailVacio ='';
$formatoIncorrecto = '';
$passVacio = '';
$nombreVacio = '';
$apellidoVacio = '';
$empresaVacio = '';
$rePassVacio = '';

$email = '';
$nombre ='';
$apellido = '';
$idEmpresa = '';
$password = '';
$rePass= '';

if ($_POST) {

  $email = $_POST['email'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $idEmpresa = $_POST['idEmpresa'];
  $password = $_POST['password'];
  $rePass = $_POST['rePass'];

  //*************VALIDAR EMAIL
  if (empty($email)) {
  $formatoIncorrecto = "*Ingrese su email";
  }else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $formatoIncorrecto = "*Debe ser nombre@ejemplo.com";
    }
  }
  //*************VALIDAR EMAIL

  //*************VALIDAR PASS
  if (empty($password)) {
  $passVacio = "*Ingrese una contraseña";
  }
  //*************VALIDAR PASS

  //*************VALIDAR NOMBRE
  if (empty($nombre)) {
  $nombreVacio = "*Ingrese su nombre";
  }
  //*************VALIDAR NOMBRE

  //*************VALIDAR APELLIDO
  if (empty($apellido)) {
  $apellidoVacio = "*Ingrese su apellido";
  }
  //*************VALIDAR APELLIDO

  //*************VALIDAR EMPRESA
  if (empty($idEmpresa)) {
  $empresaVacio = "*Ingrese codigo de empresa AXQ323";
  }
  //*************VALIDAR EMPRESA

  //*************VALIDAR REPASS
  if (empty($rePass)) {
  $rePassVacio = "*Vuelva a escribir la contraseña";
  }
  //*************VALIDAR REPASS

  //*************VALIDAR TODOS LOS CAMPOS
  if ($formatoIncorrecto =="" && $nombreVacio =="" && $apellidoVacio =="" && $empresaVacio =="" && $passVacio =="" && $rePassVacio =="") {

    $usuario =[
        'email' => $email,
        'password' => password_hash($password,PASSWORD_DEFAULT),
        'nombre' => $nombre,
        'apellido' => $apellido,
        'idEempresa' => $idEmpresa,
      ];

      $usuarioJson = json_encode($usuario);

      file_put_contents('json/usuarios.json',$usuarioJson);

  }else {




  }
  //*************VALIDAR TODOS LOS CAMPOS


}




// $errorTerminos ='';
//
// if ($_POST) {
//
// $_POST['email'] = $email;
// $_POST['password'] = $password;
// $_POST['avatar'] = $avatar;
//
//   if ($_POST['nombre']==='') {
//     $nombre='';
//   }else {
//     $_POST['nombre'] = $nombre;
//   }
//
// $_POST['apellido'] = $apellido;
// $_POST['ideEmpresa'] = $idEmpresa;
//
//
// $usuarioJson =[
//     'email' => $email,
//     'password' =>password_hash($password,PASSWORD_DEFAULT),
//     'avatar' => $avatar,
//     'nombre' => $nombre,
//     'apellido' => $apellido,
//     'idEempresa' => $idEmpresa,
//   ];
//
//   json_encode($usuario);
//
//   file_put_contents('json/usuarios.json',$usuarioJson);
//   echo "string";
//   var_dump($usuarioJson);
//
// }



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
              <input type="email" class="form-control" name="email" placeholder="<?php echo $formatoIncorrecto != ''? $formatoIncorrecto:"email"; ?>" <?php echo $formatoIncorrecto != ''? 'id = "red"':""; ?>>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="nombre" placeholder="<?php echo $nombreVacio != ''? $nombreVacio:"Nombre"; ?>" <?php echo $nombreVacio != ''? 'id = "red"':""; ?>>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="apellido" placeholder="<?php echo $apellidoVacio != ''? $apellidoVacio:"Apellido"; ?>" <?php echo $apellidoVacio != ''? 'id = "red"':""; ?>>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="idEmpresa" placeholder="<?php echo $empresaVacio != ''? $empresaVacio:"ID Empresa Ejemplo: AXQCFM"; ?>" <?php echo $empresaVacio != ''? 'id = "red"':""; ?>>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="<?php echo $passVacio != ''? $passVacio:"Contraseña"; ?>" <?php echo $passVacio != ''? 'id = "red"':""; ?>>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="rePass" placeholder="<?php echo $rePassVacio != ''? $rePassVacio:"Vuelva a escribir la Contraseña"; ?>" <?php echo $rePassVacio != ''? 'id = "red"':""; ?>>
            </div>

          </div>
          <p class="invalid-feedback" id="right"><?php  echo $errorCampos;?></p>

          <div class="botones">

            <a href="login.php" class="btn btn-secondary" >login</a>
            <input type="submit" class="btn btn-primary" value="Registrarse" >

            <div class="terminos">
              <label class="" for="check1">Acepto los terminos</label>
              <input class="" type="checkbox" name="terminos" value="">
              <p class="invalid-feedback"><?php  echo $errorTerminos;?></p>
            </div>

          </div>

          <footer>

            (c) 2019 Guille

          </footer>
</form>


      </div>


  </body>
</html>
