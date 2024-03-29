<?php

include_once('session.php');

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

  <div class="col-md-8">

    <!-- EDITAR CURSO EN CASO EMPRESA -->
          <?php
              if ($_SESSION['tipo'] == 'empresa') {
                include('boton_curso_editar.php');
              }
              ?>
    <!-- EDITAR CURSO EN CASO EMPRESA -->

    <div class="titulo-curso">
      <h1 class="display-1"> <b>  C001 - CURSO BASICO DE RCP Y PRIMEROS AUXILIOS</b> </h1>
    </div>

    <h2 class="display-2">Mira el siguiente video</h2>

    <div class="curso-video">
      <iframe id="ytplayer" type="text/html" width="720" height="405"
        src="https://www.youtube.com/embed/gVKTgaldTWA?controls=0&modestbranding=1&playsinline=1&color=white"
        frameborder="0" allowfullscreen>
      </iframe>
    </div>

    <!-- <h2 class="display-2">Material adicional</h2>

    <div class="">
      <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=[https://www.your_website/file_name.pptx]' width='100%' height='600px' frameborder='0'>
    </div> -->

    <div class="curso-examen">
      <h3>Estas listo? </h3>
      <a href="examen.php" class="btn btn-success btn-lg" >Hacer el Examen!</a>
    </div>



  </div>



</div>


    </main>

    <footer>

      (c) 2019 Guille

    </footer>

  </body>
</html>
