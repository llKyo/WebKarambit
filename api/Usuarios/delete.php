<?php
  require_once "../db.php";
  $id = $_POST["id"];
  $UsuariosDAO->borrar($id);
  $respuesta = new stdClass();
  $respuesta->resultado = true;
  $respuesta->mensaje = "Usuario eliminado";
  echo json_encode($respuesta);