<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=VT323&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <title>Mi Primer PHP</title>
    <style media="screen">
      body {
        background-color: black;
        padding: 20px;
        color: #51DF00;
        font-family: 'VT323', monospace;
        line-height: 20px;
        /* font-size: 20px; */
      }
    </style>
  </head>
  <body>
    <p>
    <?php
      $edad = "Se complica";
      $altura = 1.7;
      $cadenaSimple = 1.3;
      $cadenaDoble = "txtdoble";

      echo $edad;
      echo "<br>";
      echo $altura;
      echo "<br>";
      echo $cadenaSimple;
      echo "<br>";
      echo $cadenaDoble;
      echo "<br>";
      echo "<br>";

      var_dump($edad);
      var_dump($altura);
      var_dump($cadenaSimple);
      var_dump($cadenaDoble);

      $pal1 = "tres";
      $pal2 = "tristes";
      $pal3 = "tigres";
      $pal4 = "tragan";
      $pal5 = "trigo";
      $pal6 = "en";
      $pal7 = "un";
      $pal8 = "trigal";


      echo $pal1 . " " . $pal2 . " " . $pal3 . " " . $pal4 . " " . $pal5 . " " . $pal6 . " " . $pal7 . " " . $pal8 ;





     ?>
     </p>


<!--
En base a la frase “Tres tristes tigres tragan trigo en un trigal”, crear una variable por cada palabra, donde el nombre de cada variable indique la posición de la palabra en la frase.

¿Se puede asignar como nombre de la variable un número ($1, $2, $3)?
Asignarle a cada variable su posición numérica escrita como texto ($uno, $dos, $tres).
Imprimir la frase utilizando todas las variables que declaramos.
Imprimir una oración, utilizando al menos dos variables ya declaradas en el punto anterior. -->

<p>
<?php
$miAuto = [
  "color" => ["blanco", "negro"],
  "marca" => "Ford",
  "modelo" => "Ka",
  "motorizacion" => 1.5
];
echo "<pre>";
var_dump($miAuto);
echo "</pre>";


 ?>
 </p>

<p>
 <?php
 $varA = "Hola";
 $varB = "Mundo";
 $varConcaten = $varA . " " . $varB;

 echo "<pre>";
 var_dump($varConcaten);
 echo "</pre>";

 $varQBueno = "Que bueno esta PHP";



 echo "<pre>";
 var_dump($edad . " " . $varQBueno);
 echo "</pre>";



?>

</p>
    <!--
    Crear un array numérico con 5 strings de animales diferentes. Luego de esto, ejecutar un var_dump para ver los resultados.
    Agregar 2 nuevos animales al final del array, y ejecutar otro var_dump para ver los resultados.
    Imprimimos la siguiente oración “Me gustan los animales: animal1, animal2, ...” con los 7 animales que declaramos.
    Reemplazar el primer animal por uno nuevo, e imprimir el resultado.
    Agregar un nuevo animal en la posición 100, e imprimir el resultado.
    Agregar un nuevo animal en la posición 16, e imprimir el resultado. -->

    <p>
      <?php
        $animales = ["Perro", "Gato", "Gepardo", "Elefante", "Jirafa"];
        $animales [] = "hipopotamo";

        echo "<pre>";
        var_dump($animales);
        echo "</pre>";
      ?>

    </p>


    <p>
      <?php
        $en = 3;
        $de = 2.5;
        $res = $en * $de;
        $resComplejo = ($en * 2 + $de) / ($en / 2);

        echo "<pre>";
        var_dump($en + $de);
        var_dump($en - $de);
        var_dump($en * $de);
        var_dump($en / $de);
        var_dump($res);
        var_dump($en + 1);
        var_dump($de - 0.6);
        var_dump($resComplejo);
        echo "</pre>";
      ?>

    </p>


    <p>
      <?php
        $prueba = "pureba";

        echo "<br><span style='color: #51DF00; font-family: 'VT323', monospace;'>";
        var_dump($prueba);
        echo "</span><br>";

        echo "$prueba";
      ?>

    </p>





  </body>
</html>
