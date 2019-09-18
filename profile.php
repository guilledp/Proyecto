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

    <main>
<div class="perfil row">

  <div class="col-md-6">

      <img id="imagen_perfil" src="img\profile.png" alt="">

      <h4>Datos personales</h4>

      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Nombre">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="last-name" placeholder="Apellido">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="company" placeholder="ID Empresa Ejemplo: AXQCFM">
      </div>

      <h4>Inicio de sesion</h4>

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
        <a href="profile.php" class="btn btn-primary" >Guardar cambios</a>

      </div>


  </div>

</div>











    </main>

    <footer>

      (c) 2019 Guille

    </footer>

  </body>
</html>
