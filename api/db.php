<?php
  function iniciarSession($usuario, $clave){
    $sql = "SELECT id,username,password,nombre FROM usuarios"
      . " WHERE username='$usuario' AND password='$clave'";
    $query = query($sql);
    $usuarioLogueado = null;
    if ($rs = mysqli_fetch_array($query)) {
      $usuarioLogeuado = new stdClass();
      $usuarioLogeuado->id=$rs["id"];
      $usuarioLogeuado->username=$rs["username"];
      $usuarioLogeuado->password=$rs["password"];
      $usuarioLogeuado->nombre=$rs["nombre"];
    }
    return $usuarioLogueado;
  }

 
  function conectar(){
    $servidor = "localhost"; //ip del servidor
    $password = "";
    $usuario = "root";
    $bd = "karambitDb";
    $link = mysqli_connect($servidor
      ,$usuario, $password, $bd);
    return $link;
  }

  function desconectar($link){
     mysqli_close($link);
  }

  function query($sql){
     $link = conectar();
     return mysqli_query($link, $sql);
  }
