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


        <form action="register.php" method="post" class="col-md-5 col-xl-3">

          <div class="logo">
            <img src="img\G-LOGO.png" alt="">
          </div>

          <div class="campos_registro">

            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Nombre">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="last-name" placeholder="Apellido">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="ID Empresa Ejemplo: AXQCFM">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="email">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" id="pass" placeholder="Contraseña">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" id="pass" placeholder="Vuelva a escribir la contraseña">
            </div>

          </div>

          <div class="botones">

            <!-- <button type="login" class="btn btn-secondary">Registrarse </button>
            <button type="login" class="btn btn-primary">Login</button> -->

            <a href="login.php" class="btn btn-secondary" >login</a>
            <input type="submit" class="btn btn-primary" value="Registrarse" >

            <div class="terminos">
              <label class="" for="check1">Acepto los terminos</label>
              <input class="" type="checkbox" name="check1" value="">
            </div>

          </div>

          <footer>

            (c) 2019 Guille

          </footer>
        </form>


      </div>


  </body>
</html>
