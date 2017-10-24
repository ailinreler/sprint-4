<?php

require_once '../classes/classDb.php';
require_once '../classes/classUsuarios.php';
require_once '../classes/classMysql.php';


$db = new db();

$usuario = new usuarios($_POST['user'], $_POST['pass'], $_POST['mail'], $_POST['phone'], $_FILES['avatar']);
$guardar = new mysql;
$guardar->save();
var_dump($usuario);
