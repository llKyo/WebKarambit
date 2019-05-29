<?php
  require_once "../db.php";

  $sql = "SELECT id, username, password, nombre FROM usuarios";
  
  $query = query($sql); 

  while($rs = mysqli_fetch_array($query)){
     $usuario = new Usuario();
     $usuario->setId($rs["id"]) ;
     $usuario->setUsername($rs["username"]);
     $usuario->setPassword($rs["password"]);
     $usuario->setNombre($rs["nombre"]);
     array_push($usuarios,$usuario);
}
echo json_encode($usuarios);
