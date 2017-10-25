<?php

require_once 'classDb.php';
require_once 'classValidacion.php';

class Mysql extends db{


    private $db;

    public function __construct(){
      $this->db = new PDO('mysql:host=localhost; charset=utf8', 'root', '');
      $dbCrear = $this->db->prepare("CREATE DATABASE IF NOT EXISTS usuarios");
      $dbCrear->execute();
      $this->db->exec('USE usuarios');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


  public function save(Usuario $usuario){

    $validacion = new Validacion;
    $validacion = $validacion->validarUsuarioMysql($usuario->usuario, $usuario->mail);

    if (count($validacion) == 0) {

        $sql = $this->db->prepare("INSERT INTO usuario (usuario, contrasenia, mail, telefono, avatar) VALUES (:usuario, :contrasenia, :mail, :telefono, :avatar)");

        $sql->bindValue(':usuario', $usuario->usuario);
        $sql->bindValue(':contrasenia', $usuario->pass);
        $sql->bindValue(':mail', $usuario->mail);
        $sql->bindValue(':telefono', $usuario->telefono);
        $sql->bindValue(':avatar', $this->guardarAvatar('avatar', uniqid(), "../images/"));

        $sql->execute();

    }else{
        return false;
    }

  }

}
