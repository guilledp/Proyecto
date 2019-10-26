<?php

include_once('session.php');

$errorTamaño = "";
$errorTipo = "";
$nombreAvatar = $_SESSION['id'];

if (isset($_FILES["fileToUpload"])) {

    $target_dir = "img/useravatar/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;

    // VERIFICAR SI ES UN ARCHIVO
    if ($_FILES["fileToUpload"]["tmp_name"] != "") {
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          $uploadOk = 1;
        } else {
          $uploadOk = 0;
        }
      }
    }

    // VERIFICAR TAMAÑO
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      $errorTamaño =  "El archivo debe pesar menos de 5 MB.";
      $uploadOk = 0;
    }
    // VERIFICAR FORMATO
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      $errorTipo = "seleccione una imagen del tipo JPG, JPEG, PNG o GIF.";
      $uploadOk = 0;
    }
    // VERIFICAR ERRORES Y SUBIR EL ARCHIVO
    if ($uploadOk == 0) {
    } else {
      $target_file = $target_dir . $nombreAvatar . "";
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // PUEDE HABER UN MENSAJE SI SE SUBIO CORRECTAMENTE
      }
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
      <div class="input-group mb-3">
      <form action="profile.php" method="post" enctype="multipart/form-data">

          <div class="image-upload">
            <label for="fileToUpload">

              <div class="container">
                <img src= <?=$nombreAvatar?> alt="Avatar" class="image">
                <div class="bottom-right"><i class="icon ion-md-create"></i></div>
              </div>

            </label>
            <input type="file" name="fileToUpload" id="fileToUpload">
          </div>

          <div class="">
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
