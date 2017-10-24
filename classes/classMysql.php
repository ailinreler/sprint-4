<?php

class mysql extends db{


  public function save(){

    $sql = $this->db->prepare("INSERT INTO usuario (usuario, contrasenia, mail, telefono, avatar) VALUES (:usuario, :contrasenia, :mail, :telefono, :avatar)");

    $sql->bindValue(':usuario', $_POST['user']);
    $sql->bindValue(':contrasenia', $_POST['pass']);
    $sql->bindValue(':mail', $_POST['mail']);
    $sql->bindValue(':telefono', $_POST['phone']);
    $sql->bindValue(':avatar', $this->guardarAvatar('avatar', uniqid(), "../images/"));

    $sql->execute();


  }



    public function guardarAvatar($avatar, $nImagen,$path)
    {
      if ($_FILES[$avatar]['error'] == UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES[$avatar]['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES[$avatar]['tmp_name'], $path . $nImagen . "." . $ext);

        return $nImagen . '.' . $ext;

      }
    }


}
