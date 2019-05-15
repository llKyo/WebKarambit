<?php
  require_once "../db.php";
  $id = $_POST["id"];
  $sql = "DELETE FROM usuarios"
         . " WHERE id=$id";
  query($sql);

  $respuesta = new stdClass();
  $respuesta->resultado = true;
  $respuesta->mensaje = "Usuario eliminado";
  echo json_encode($respuesta);