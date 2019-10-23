<?php

//VERIFICAR SESION
  session_start();
  if(!isset($_SESSION['id'])){
  die(header("location: login.php"));
  }
//VERIFICAR SESION

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

  <div class="col-md-8">

    <div class="titulo-curso">

      <h1 class="display-1"> <b>  C001 - CURSO BASICO DE RCP Y PRIMEROS AUXILIOS</b> </h1>

    </div>

    <div class="">

      <h2 class="display-2">Mira el siguiente video</h2>

    </div>

    <div class="videocurso">

      <iframe id="ytplayer" type="text/html" width="720" height="405"
      src="https://www.youtube.com/embed/gVKTgaldTWA?controls=0&modestbranding=1&playsinline=1&color=white"
      frameborder="0" allowfullscreen>
      </iframe>

    </div>


    <div class="">

      <h2 class="display-2">Material adicional</h2>

    </div>

    <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=[https://www.your_website/file_name.pptx]' width='100%' height='600px' frameborder='0'>

  </div>

</div>











    </main>

    <footer>

      (c) 2019 Guille

    </footer>

  </body>
</html>
