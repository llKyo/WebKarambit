<?php

  require_once "../db.php";
  require_once "../DTO/Usuario.php";
  require_once "../DAO/UsuariosDAO.php";


  $id = $_POST["id"]; 
  $username = $_POST["username"];
  $password = $_POST["password"];
  $nombre = $_POST["nombre"];
 
  $UsuariosDAO = UsuariosDAO::getInstance();
  $usuario = new Usuario();
  $usuario->setId($id);
  $usuario->setUsername($username);
  $usuario->setPassword($password);
  $usuario->setNombre($nombre);
  $UsuariosDAO->crear($usuarios);
  $respuesta = new stdClass();
  $respuesta->resultado = true;
  $respuesta->mensaje = "Usuario ingresado";
  echo json_encode($respuesta);
