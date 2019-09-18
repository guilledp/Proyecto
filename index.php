
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Centro de Capacitacion</title>
  </head>

  <body>

    <div class="row">
    </div>
      <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">

          <a class="navbar-brand" href="#">
            <img src="img\G-LOGO.png" alt="Logo" class="img-fluid" id="Logo">
          </a>

          <button class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class=" navbar-collapse show" id="NavBar"> <!--Agregar show-->

            <div class="navbar-nav align-items-end">
              <a class="nav-item nav-link active" href="index.php">Home</a>
              <a class="nav-item nav-link" href="#">Mis Certificados</a>
              <a class="nav-item nav-link" href="profile.php">Perfil</a>
              <a class="nav-item nav-link" href="login.php">Salir</a>
            </div>

          </div>

        </nav>
      </header>
    </div>

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
          <button type="button" class="btn btn-secondary btn-lg btn-block">C003 - Riesgo electrico I</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C005 - Trabajo en altura I</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C003 - Autoelevadores</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C010 - Lesiones musculoesuqeleticas y LMC</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C010 - Lesiones musculoesuqeleticas y LMC</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C014 - Curso basico de Primeros Auxilios</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C041 - Programa especifico SAN CEFERINO</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C041 - Programa especifico SAN CEFERINO</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C038 - Capacitacion  para huespedes de hotel</button>
          </div>

          <div class="col-md-4 curso">
            <button type="button" class="btn btn-secondary btn-lg btn-block">C044 - Res 960/15 Autoelevadores (Avanzado)</button>
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