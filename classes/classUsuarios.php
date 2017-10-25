<?php

<<<<<<< HEAD
class Usuario {
=======
class usuarios{
>>>>>>> f416a0724057a1b4c5618b9c92d30b0f2db57639

    private $usuario;
    private $pass;
    private $mail;
    private $telefono;
    private $avatar;


    public function __construct ($usuario, $pass, $mail,$telefono,$avatar){

        $this->usuario = $usuario;
        $this->pass = password_hash($pass, PASSWORD_DEFAULT);
        $this->mail = $mail;
        $this->telefono = $telefono;
        $this->avatar = $avatar;

    }




    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {

        $this->usuario = $usuario;

        return $this;
    }


    public function getPass()
    {
        return $this->pass;
    }


    public function setPass($pass)
    {

        $this->pass = password_hash($pass, PASSWORD_DEFAULT);

        return $this;
    }


    public function getMail()
    {
        return $this->mail;
    }


    public function setMail($mail)
    {

        $this->mail = $mail;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {


        $this->telefono = $telefono;

        return $this;
    }



    public function getAvatar()
    {
        return $this->avatar;
    }


    public function setAvatar($avatar)
    {

        $this->avatar = $avatar;

        return $this;
    }


}
