<?php

include_once('session.php');

// if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
//   $nombre = $_FILES["archivo"]["name"];
//   $archivo = $_FILES["archivo"]["tmp_name"];
//   $ext = pahtinfo($nombre,PATHINFO_EXTENSION);
//
//   $miArchivo = dirname(__FILE__) . "/img/useravatar/" . $_SESSION['id'] . $ext;
//   move_uploaded_file($arcivo, $miArchivo);
// }
//
// $nombreAvatar = $_SESSION['id'];


$errorTamaño = "";
$errorTipo = "";
$nombreAvatar = $_SESSION['id'];

if (isset($_FILES["archivo"])) {

    $target_dir = "img/useravatar/";
    $target_file = $target_dir . basename($_FILES["archivo"]["name"]);
    $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;

        // VERIFICAR TAMAÑO
    if ($_FILES["archivo"]["size"] > (5 * 1024 * 1024)) {
      $errorTamaño =  "El archivo debe pesar menos de 5 MB.";
      $uploadOk = 0;
    }
    // VERIFICAR FORMATO
    if($ext != "jpg" && $ext != "png" && $ext != "jpeg"
    && $ext != "gif" ) {
      $errorTipo = "seleccione una imagen del tipo JPG, JPEG, PNG o GIF.";
      $uploadOk = 0;
    }

    // VERIFICAR ERRORES Y SUBIR EL ARCHIVO
    if ($uploadOk == 1) {
      $target_file = $target_dir . $nombreAvatar;
      move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file);
      header("location: profile.php?img=" . rand(1000,9999));
    }
}


if (file_exists('img/useravatar/' . $nombreAvatar)) {
  $nombreAvatar =  "img\\useravatar\\" . $nombreAvatar;
}else {
  $nombreAvatar = 'img\user.png' ;
}

?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Mi perfil</title>
  </head>

  <body>

    <?php include 'header.php'; ?>

    <main>
<div class="perfil row">

  <div class="col-md-6">

    <!-- SUBIEENDO ARCHIVOS -->
      <div class="input-group mb-3" id="grupo-avatar">
      <form action="profile.php" method="post" enctype="multipart/form-data">

          <div class="image-upload">

          <label for="archivo">
            <div class="container" id="avatar">
              <img src= <?=$nombreAvatar?> alt="Avatar" class="">
              <div class="bottom-right"><i class="icon ion-md-create"></i></div>
            </div>
          </label>

            <input type="file" name="archivo" id="archivo">
          </div>

          <div class="boton-subir-avatar">
            <input class="btn btn-secondary btn-sm" type="submit" value="subir imagen" name="submit">
            <p class="invalid-feedback"> <?=$errorTipo . " " . $errorTamaño;?> </p>
          </div>


      </form>
      </div>
      <!-- SUBIEENDO ARCHIVOS -->

      <h2 class="display-2">Datos personales</h2>

      <form action="profile.php" method="post">

        <div class="form-group">
          <input type="text" class="form-control" id="name" placeholder="Nombre">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="last-name" placeholder="Apellido">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="company" placeholder="ID Empresa Ejemplo: AXQCFM">
        </div>

        <h2 class="display-2">Inicio de sesion</h2>

        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="email">
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="pass" placeholder="Contraseña">
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="pass" placeholder="Vuelva a escribir la contraseña">
        </div>

        <div class="botones">

          <a href="index.php" class="btn btn-secondary" >cancelar</a>
          <input type="submit" class="btn btn-primary" value="Guardar cambios" >

        </div>

      </form>



  </div>

</div>











    </main>

    <footer>

      (c) 2019 Guille

    </footer>

  </body>
</html>
