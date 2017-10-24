<?php

class db{

  protected $db;

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost; charset=utf8', 'root', '');
    $dbCrear = $this->db->prepare("CREATE DATABASE IF NOT EXISTS usuarios");
    $dbCrear->execute();
    $this->db->exec('USE usuarios');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }



}
