<?php

include_once('session.php');

?>


<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Centro de Capacitacion</title>
  </head>

  <body>

    <?php include 'header.php'; ?>

    <div class="search row">
    <div class="col-md-6">

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar cursos">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">  <i class="icon ion-md-search"></i> </button>
          </div>
        </div>

    </div>
    </div>

    <main>

      <div class="row cursos">

          <div class="col-md-4 curso">
          <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C003 - Riesgo electrico I</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C005 - Trabajo en altura I</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C003 - Autoelevadores</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C010 - Lesiones musculoesuqeleticas y LMC</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C010 - Lesiones musculoesuqeleticas y LMC</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C014 - Curso basico de Primeros Auxilios</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C041 - Curso de uso seguro de Maquinas Herramientas</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C041 - Programa especifico de prevencion</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C038 - Capacitacion  para huespedes de hotel</a>
          </div>

          <div class="col-md-4 curso">
            <a href="curso.php" class="btn btn-secondary btn-lg btn-block" >C044 - Res 960/15 Autoelevadores (Avanzado)</a>
          </div>

      </div>

      <div class="vermas">
        <button type="button" class="btn btn-primary">ver todos los cursos</button>
      </div>

    </main>

    <footer>

      (c)2019 Guille

    </footer>

  </body>
</html>
