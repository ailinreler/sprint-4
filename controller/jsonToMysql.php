<?php

require "../conexion/conn.php";

$pasarJsonAMysql = 'no';

if ($pasarJsonAMysql == 'si') {


  $dbCrear = $db->prepare("DROP TABLE IF EXISTS usuarios.usuario");
  $dbCrear->execute();

  $query = $db->prepare("CREATE TABLE IF NOT EXISTS usuario (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(80) NOT NULL,
    contrasenia VARCHAR(60) NOT NULL,
    mail VARCHAR(100) NOT NULL,
    telefono VARCHAR(100) NULL DEFAULT NULL,
    avatar VARCHAR(200) NULL DEFAULT NULL,
    PRIMARY KEY (id))");

  $query->execute();


  $json = file_get_contents("../usuarios.json");

  $json = explode(PHP_EOL, $json);

  foreach ($json as $key => $value) {

    $json[$key] = json_decode($value, true);


    if ($value != NULL) {

      $insertarEnDb = $db->prepare("INSERT INTO usuario (usuario, contrasenia, mail, telefono, avatar) VALUES (:usuario, :contrasenia, :pass, :telefono, :avatar)");

      $insertarEnDb->bindValue(':usuario',$json[$key]['user'], PDO::PARAM_STR);
      $insertarEnDb->bindValue(':contrasenia',$json[$key]['pass'], PDO::PARAM_STR);
      $insertarEnDb->bindValue(':pass',$json[$key]['mail'], PDO::PARAM_STR);
      $insertarEnDb->bindValue(':telefono',$json[$key]['telefono'], PDO::PARAM_STR);
      $insertarEnDb->bindValue(':avatar',$json[$key]['avatar'], PDO::PARAM_STR);

      $insertarEnDb->execute();
      // var_dump($json[$key]['user']);

    }

  }

}
