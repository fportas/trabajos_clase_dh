<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=VT323&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <title>practica php</title>
    <style media="screen">
      body {
        background-color: black;
        color: green;
        font-family: 'VT323', monospace;
        line-height: 20px;
        padding: 20px;
        font-size: 1.4em;

      }
    </style>
  </head>
  <body>

    <h1>Ejer 1A</h1>
    <p>a. Definir una función ​ mayor()​ que reciba 3 números y devuelva el mayor.
    Imprimir el resultado.</p>
    <?php
      function mayor($num1, $num2, $num3) {
        return max($num1, $num2, $num3) . "<br>";
      }

      echo mayor(2,345,99);

     ?>

    <hr>


    <h1>Ejer 1B</h1>
    <p>b. Definir una función ​ tabla() ​ que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero
    base hasta el numero limite, imprimir el resultado.</p>

      <?php   function tabla($inic, $tope) {
        $miArray = [];
        for ($i=$inic; $i <= $tope; $i++) {
          array_push($miArray, $i); "<br>";
        }
        return $miArray;
      }

      print_r (tabla(2,8));
      ?>




    <hr>


   <h1>Ejer 1C</h1>
   <p>c. Definir una variable llamada ​ numeroMagico​ , que contenga un número, dicha
   variable deberá estar en la 1er línea de nuestro código PHP.</p>

   <?php $numeroMagico = 14;  ?>

   <hr>

   <h1>Ejer 1D</h1>
   <p>d. Modificar ​ mayor()​ para que si recibe sólo 2 parámetros o si el tercer
   parámetro NO es un número (​ is_numeric()​ ), compare a esos dos números
   con ​ numeroMagico​ .</p>

   <?php
   //global $numeroMagico
   function mayor2($num1, $num2, $num3 = NULL) {
     if ($num3 == NULL || !is_numeric($num3)) {
      global $numeroMagico;
      $num3 = $numeroMagico;
     }
     return max($num1, $num2, $num3);
   }

   echo mayor2(2,3, 2346890);

    ?>



   <hr>



   <h1>Ejer 1E</h1>
   <p>e. Modificar tabla para que si recibe un sólo parámetro o si el segundo parámetro NO es un número, utilice ​ numeroMagico​ como límite.</p>


   <?php

   function mayor3($num1, $num2, $num3 = NULL) {
     if ($num3 == NULL || !is_numeric($num3)) {
      global $numeroMagico;
      $num3 = $numeroMagico;
     }
     return max($num1, $num2, $num3);
   }

   echo mayor3(2,3);

    ?>



   <hr>


    <!--
2. Generar un archivo llamado ​ superficie.php​ :
a. Definir una función triangulo() que retorne su superficie (​ ¿Cómo calcular la
superficie de un triángulo​ ?).
b. Definir una función rectangulo() que retorne su superficie (¿​ Cómo calcular la
superficie de un rectángulo​ ?).
c. Definir una función cuadrado() que retorne su superficie (¿​ Cómo calcular la
superficie de un cuadrado​ ?).
d. Utilizando la función ​ pi()​ , definir una función circulo() que retorne su
superficie. ¿​ Cómo calcular la superficie de un círculo​ ?)
3. Generar un archivo llamado ​ incluir.php​ que retorne un ​ echo​ con el siguiente string
“Soy incluir.php”.
a. Incluir en el archivo, ​ saludo.php​ . ¿Qué sucede?
b. Reemplazar ​ include​ por ​ require​ . ¿Qué sucede?
c. Generar en la misma carpeta un archivo ​ saludo.php​ que solamente haga
echo​ “Hola mundo”. ¿Qué sucede ahora con el ​ punto a​ y el ​ punto b​ ?
d. En el archivo ​ incluir.php​ reemplazar el ​ require​ por ​ include​ , e incluir 3 veces
el mismo archivo. ¿Qué sucede?
e. En el archivo ​ incluir.php​ reemplazar todos los ​ include​ por ​ include_once​ .
¿Qué sucede?
4. Crear un archivo ​ todoJunto.php​ que incluya el archivo ​ funciones.php​ y
superficie.php​ en donde se definirá una función que reciba los radios de 3 círculos
y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las
funciones ya definidas.
5. Modificar ​ todoJunto.php​ para que en su primer línea diga $funcionesEjecutadas =
0. Luego, modificar cada función de ​ funciones.php​ y ​ superficie.php​ para que al
comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver -->




  </body>
</html>
