<?php

try {
  $db = new PDO('mysql:host=localhost; charset=utf8', 'root', '');
  $dbCrear = $db->prepare("CREATE DATABASE IF NOT EXISTS usuarios");
  $dbCrear->execute();
  $db->exec('USE usuarios');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo $e->getMessage();
}
