<?php
  $nombres = ["Clara", "Ana", "Juan", "Ricardo"];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php foreach ($nombres as $nombre) :?>
       <p>Hola <?= $nombre ?>!</p>
    <?php endforeach;?>
   </body>
 </html>
