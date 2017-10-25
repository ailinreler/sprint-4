<?php
class DB{



  public function guardarAvatar($avatar, $nImagen,$path)
  {
    if ($_FILES[$avatar]['error'] == UPLOAD_ERR_OK) {
      $ext = pathinfo($_FILES[$avatar]['name'], PATHINFO_EXTENSION);
      move_uploaded_file($_FILES[$avatar]['tmp_name'], $path . $nImagen . "." . $ext);

      return $nImagen . '.' . $ext;

    }
  }
}
