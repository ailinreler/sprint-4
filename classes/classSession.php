<?php

// if ($_POST) {
//     $session = Session::login($_POST['user'], $_POST["pass"]);
// }

require_once 'classValidacion.php';

class session{

    public static function login($user, $pass){

        $errores = Validacion::validar();

        if (count($errores) == 0) {
            $_SESSION['sessionopen'] = true;
            $_SESSION['userlogged'] = $datosUsuario['usuario'];
            $_SESSION['useravatar'] = $datosUsuario['avatar'];
        }

    }


    public function register($usuario){

        $errores = Validacion::validar();


    }

}
