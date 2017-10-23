<?php

require '../classes/classUsuarios.php';

$usuario = new usuarios('admin', '12345', 'admin@gmail.com','0','avatar');
echo "<pre>";
var_dump($usuario);
