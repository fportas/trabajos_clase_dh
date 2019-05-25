<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=VT323&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <title>practica php</title>
    <style media="screen">
      body {
        background-color: #1B2631;
        color: orange;
        font-family: 'VT323', monospace;
        line-height: 20px;
        padding: 20px;
        font-size: 1.4em;

      }
    </style>
  </head>
  <body>

    <h1>Ejer 2A</h1>
    <p>a. Definir una función triangulo() que retorne su superficie (​ ¿Cómo calcular la superficie de un triángulo​ ?).</p>
    <?php
      function triangulo($base, $altura) {
        return ($base*$altura)/2;
      }

      echo triangulo(34,5);

     ?>

    <hr>


    <h1>Ejer 2B</h1>
    <p>b. Definir una función rectangulo() que retorne su superficie (¿​ Cómo calcular la
    superficie de un rectángulo​ ?).</p>

      <?php   function rectangulo($base, $altura) {
        return $base*$altura;
      }

      echo rectangulo(4,6);
      ?>




    <hr>


   <h1>Ejer 2C</h1>
   <p>c. Definir una función cuadrado() que retorne su superficie (¿​ Cómo calcular la
   superficie de un cuadrado​ ?).</p>

   <?php
      function cuadrado($lado) {
        return $lado*$lado;
      }

      echo "<h2>" . cuadrado(3) . "</h2>";



   ?>

   <hr>

   <h1>Ejer 1D</h1>
   <p>Utilizando la función ​ pi()​ , definir una función circulo() que retorne su
   superficie. ¿​ Cómo calcular la superficie de un círculo​ ?)</p>

   <?php
     function circulo($radio) {
       return pi()*$radio*$radio;
     }

     echo "<h2>" . circulo(3) . "</h2>";

    ?>



   <hr>



   <h1>Ejer 1E</h1>
   <p>e. Modificar tabla para que si recibe un sólo parámetro o si el segundo parámetro NO es un número, utilice ​ numeroMagico​ como límite.</p>

   <?php   //function tabla2($inic, $tope = NULL) {

     // if ($tope == NULL || $tope == !is_numeric() {
     //   global $numeroMagico;
     //   $tope = $numeroMagico;
     // }
     // $miArray = [];
     // for ($i=$inic; $i <= $tope; $i++) {
     //   array_push($miArray, $i); "<br>";
     // }
     // return $miArray;
     //  }
     //
     //  print_r (tabla2(2,8));

     function tabla2($inic, $tope = NULL) {
       if ($tope == NULL || !is_numeric($tope)) {
        global $numeroMagico;
        $tope = $numeroMagico;
       }
       $myArray = [];
       for ($i=$inic; $i <= $tope; $i++) {
         array_push($myArray, $i);
       }
       return $myArray;
     }

     print_r (tabla2(2, 4));



   ?>


   <hr>


    <!--
3. Generar un archivo llamado ​ incluir.php​ que retorne un ​ echo​ con el siguiente string
“Soy incluir.php”.d. Utilizando la función ​ pi()​ , definir una función circulo() que retorne su
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
