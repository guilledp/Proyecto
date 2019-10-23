<?php

//VERIFICAR SESION
  session_start();
  if(!isset($_SESSION['id'])){
  die(header("location: login.php"));
  }
//VERIFICAR SESION

if ($_POST){

if( $_FILES['avatar']['error'] === 0){
//mover a la carpeta

  if (!file_exists('avatars')){
  mkdir('avatars');
  }

  $ext = pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
  if ($ext !='png' && $ext !='jpg' && $ext !='jpeg') {
    $errorFormatoImagen = "El formato debe ser .png, .jpg o .jpeg";
  }

  move_uploaded_file($_FILES['avatar']['tmp_name'],'avatars/' . $nombreArchivo);

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

    <?php include 'header.php'; ?>

    <main>
<div class="perfil row">

  <div class="col-md-6">

      <img id="imagen_perfil" src="img\profile.png" alt="">

      <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="avatar" id="avatar">
        <input type="submit" value="Upload Image" name="submit">
      </form>

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
