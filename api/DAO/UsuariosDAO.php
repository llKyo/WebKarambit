<?php


class UsuariosDAO{

    //usuarios -> username,password,nombre
    public function crear($usuario){
      $sql = "INSERT INTO usuarios(username,password,nombre)"
            ." VALUES ('".$usuario->getUsername()
            ."',".$usuario->getPassword().",'".$usuario->getNombre()."')";
      query($sql);
    }

    public function borrar($id){
      $sql = "DELETE FROM usuarios"
             . " WHERE id=$id";
      query($sql);
    
    }
    

}
