<?php
  require_once "usuario.php";

    $usuario1 = new Usuario("fede", "15 de febrero", "fede@mail.com");
    $usuario2 = new Usuario("sofi", "14 de marzo", "sofi@mail.com");





    echo "<pre>";
    var_dump($usuario1);
    echo "</pre>";
    echo "<pre>";
    var_dump($usuario2);
    echo "</pre>";



 ?>
