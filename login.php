<?php
    require_once "api/db.php";
    session_start();
    if (count($_POST) > 0) {
      $usuario = $_POST["usuario"];
      $password = sha1($_POST["password"]);
      $sesion = iniciarSession($usuario,$clave);
      if ($sesion != null) {
        $_SESSION["sesion"] = $sesion;
        header("Location:index.php");
        exit();
      } else {
        $error = "Error de Inicio de Sesión";
      }
    }
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Iniciar Sessión</title>
  </head>
  <body style="background: black;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg6 pt-5 ">
          <h1 style="color: white;">Login</h1>
        </div>
      </div>
      <div class="row">
        <div class="mx-auto col-lg-6 col-md-6 col-sm-12 pt-5">
          <?php
              if (isset($error)) {
                ?>
                <div class="alert alert-danger">
                  <span>Error de Acceso</span>
                </div>
                <?php
              }
           ?>
          <form action="" method="post">
            <div class="card">
              <div class="card-header">
                <span>Ingrese sus credenciales</span>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="usuario">Username</label>
                  <input type="email" class="form-control" name="correo" value="">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="clave"  value="">
                </div>
                <button type="submit"
                  class="btn btn-primary"
                  name="ingresar_btn">Iniciar Session</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php require_once "templates/scripts.php"; ?>
  </body>
</html>
