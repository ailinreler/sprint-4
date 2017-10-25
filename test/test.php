<?php
require_once '../classes/classUsuarios.php';
require_once '../classes/classMysql.php';
require_once '../classes/classValidacion.php';


$db = new Mysql;
$usuario = new Usuario($_POST['user'], $_POST['pass'], $_POST['mail'], $_POST['phone'], $_FILES['avatar']);
$errores = $db->save($usuario);

if ($errores === false) {
    header('Location:index.php');
}

var_dump($usuario);
