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

    <!--   1. Utilizando un ​for​ imprimir los números del 1 al 100.-->
    <?php /*ejer 1*/
      for ($i=0; $i < 100 ; $i++) {
        echo "$i <br>";
      }
     ?>
     <hr>

   <?php /*ejer 2 2. Modificar el ejercicio anterior para que en vez de frenar en el número 100 frene en un número generado aleatoriamente entre 0 y 100. (Utilizar funcion rand($x,$y), https://www.w3schools.com/php/func_math_rand.asp​ )*/
    $aleatorio = rand(0,100);
    for ($i=0; $i < 100 ; $i++) {
      if($i == "$aleatorio"){
        break; }
       echo "$i <br>";
     }
    ?>

      <hr>

    <h2>Tabla del 2 ejer 3</h2>

    <?php /*ejer 3 tabla 3. Mostrar la tabla de multiplicar del 2 (hasta 2 x 10) utilizando un ​for​.*/
     for ($i=0; $i < 11 ; $i++) {
       $resultado = $i*2;
        echo "2 x $i = $resultado <br>";
      }
     ?>
     <hr>


   <h2>ejer <?php $nDeEjer = 4; echo "$nDeEjer"?></h2>
   <p>4. Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).</p>

   <?php
    $cuentaRegresiva = 100;
    while ($cuentaRegresiva > 84) {
      echo "$cuentaRegresiva <br>";
      $cuentaRegresiva--;
    }
    ?>
    <hr>



    <h2>ejer 5</h2>
    <p>5. Un bucle ​while​ que a partir de una variable $contador que comience en 1 vaya aumentando hasta llegar a 5, y que muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.</p>

    <?php
     $contador = 1;
     while ($contador < 6) {
       $resultado = $contador*2;
       echo "$resultado<br>";
       $contador++;
     }
     ?>
     <hr>



   <h2>ejer 6</h2>
   <p>6. Utilizando un ​while​ haremos un script que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.</p>

   <?php
    $monedas = rand(0,1);
    $lances = 0;
    $acumuladoCara = 0;
    while ($acumuladoCara < 6) {
      if ($monedas == 1) {
        $acumuladoCara++;
      }
      $lances++;
      echo "$lances<br>";

    }



     ?>
    <hr>



    <h2>ejer 7</h2>
    <p>7. Utilizando un ​do/while​ realizar un script que tire la moneda hasta que se obtenga ​cara​ (el número 1). Al final del programa imprimir cuántos tiros de moneda llevó.</p>


     <!-- $monedas = rand(0,1);
     $lances = 0;
     $acumuladoCara = 0;
     while ($acumuladoCara < 6) {
       $lances++;
       if ($monedas = 0) {
         $acumuladoCara++;
       }
       echo "$lances<br>";
     }
      -->
    <hr>



   <h2>ejer 8</h2>
   <p>8. Definir un ​array​ con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los nombres en pantalla. a. Resolveresteproblemaconun​for.</p>

   <?php
    $nombres = ["Sofi", "Jime", "Fede", "Fran", "Cata"];
    for ($i=0; $i < 5 ; $i++) {
      echo "$nombres[$i]<br>";
    }
    ?>
    <hr>


    <h2>ejer 8</h2>
    <p>b. Resolver este problema con ​while​.</p>

    <?php
      $nombres = ["Sofi", "Jime", "Fede", "Fran", "Cata"];
      $contador = 0;
      while ($contador < 5) {
       echo "$nombres[$contador]<br>";
       $contador++;
      }
    ?>
     <hr>



     <h2>ejer 8</h2>
     <p>c. Resolver este problema con un ​do/while​.</p>

     <?php
      $nombres = ["Sofi", "Jime", "Fede", "Fran", "Cata"];
      $contador = 0;
      do {
        echo "$nombres[$contador]<br>";
        $contador++;
      } while ($contador < 5);
      ?>
      <hr>




      <h2>ejer 8</h2>
      <p>d. Resolver este problema con un ​foreach.​</p>
      <?php
        $nombres = ["Sofi", "Jime", "Fede", "Fran", "Cata"];
        foreach ($nombres as $nombre) {
          echo "$nombre<br>";
        }
      ?>

      <hr>




      <h2>ejer 9</h2>
      <p>9. Definir un ​array​ con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)
      a. Resolver este problema con un​ for.​​</p>
      <?php
        $nume = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        for ($i=0; $i < count($nume) ; $i++) {
          if ($nume[$i] == 5) {
            echo "Se encontró un 5!";
            break;
          }
          echo "$nume[$i]<br>";
        }
      ?>




    <hr>
    <h2>ejer 9</h2>
    <p>b. Resolver este problema con un ​while​.​​</p>
    <?php
      $nume = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
      $a = 0;
      while ($a <= count($nume)) {
        echo "$nume[$a]<br>";
        $a++;
        if ($nume[$a] == 5) {
          echo "Se encontró un 5!";
          break;
        }
      }
    ?>

    <hr>



    <h2>ejer 9</h2>
    <p>c. Resolver este problema con un ​do/while​.​​</p>
    <?php
      $nume = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
      $a = 0;
      do {
        echo "$nume[$a]<br>";
        $a++;
        if ($nume[$a] == 5) {
          echo "Se encontró un 5!";
          break;
        }
      } while ($a <= count($nume));

    ?>

    <hr>



    <h2>ejer 10</h2>
    <p>10. Utilizando la funcion “Range”(​http://php.net/manual/en/function.range.php​) crear un rango de letras (de la a hasta la o), imprimir un valor que diga “En la posición [index] se encuentra el valor [value]” donde [value] se reemplazará por cada valor del array y [index] representa el índice.​​</p>
    <?php
      foreach (range("a", "o") as $letras) {
        $index = 0;
        $pos = "En la posición $index se encuentra el valor $letras[$index]";
        echo "$pos<br>";
        $index++;
      }

    ?>

    <hr>

    <h2>ejer 11</h2>
    <p>10. Utilizando la funcion “Range”(​http://php.net/manual/en/function.range.php​) crear un rango de letras (de la a hasta la o), imprimir un valor que diga “En la posición [index] se encuentra el valor [value]” donde [value] se reemplazará por cada valor del array y [index] representa el índice.​​</p>
    <?php
      foreach (range("a", "o") as $letras) {
        $index = 0;
        $pos = "En la posición $index se encuentra el valor $letras[$index]";
        echo "$pos<br>";
        $index++;
      }

    ?>

    <hr>

    <h2>ejer 11</h2>
    <p>Definir una variable ​$mascota​ que sea un array asociativo
      a. En el índice ​animal​ debe decir qué animal es.
      b. En el índice ​edad​ debe decir la edad.
      c. En el índice ​altura​ debe decir la altura​.
      d. En el índice ​nombre​ debe decir el nombre
    </p>
    <?php
      $mascota = [
        animal => "perro",
        edad => 17,
        altura => "50cm",
        nombre => "Etual"]
      foreach ($mascotas as $atributo => $valor) {
        echo "$atributo: $valor<br>";
      }

    ?>

    <hr>


<!--
12. Recorrer los valores del array con un ​foreach​ imprimiendo (como ejemplo): animal: perro
edad: 5
altura: 0,60 nombre: Sonic
13. Partiendo de un archivo con la siguiente variable definida:
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
Crear un script que muestre el nombre de la capital y el país desde la variable $​ceu​. Opcional​:​ Ordenar la lista por el nombre del país.
Ejemplo de output:
La capital de Holanda es Amsterdam. La capital de Grecia es Atenas.
La capital de Alemania es Berlín.
14. Partiendo de un archivo con la siguiente variable definida:
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"], "Colombia" => ["Cartagena", "Bogota", "Barranquilla"], "Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
Crear un script que muestre el nombre de cada país y sus ciudades desde la variable ​$ceu​ con el siguiente
formato:
Las ciudades de Argentina son: ● Buenos Aires
● Córdoba ● Santa Fé

  Las ciudades de Brasil son: ● Brasilia
● Rio de Janeiro
● Sao Pablo
15. A partir del ejercicio anterior:
● Agregarle a cada país un dato extra además de sus ciudades llamado ​esAmericano​. Este valor debe ser ​true ​o ​false.
● Hacer que la impresión anterior no muestre países que no sean Americanos.
IMPORTANTE: ​Para que esto funcione de manera prolija deberán crear un array asociativo ​por cada país en donde cada país tendrá los en la posición ciudades, sus ciudades y en la posición esAmericano un booleano conforme a si es o no americano.
Curso Desarrollo Web Full Stack Clase 03 (PHP) -->


  </body>
</html>
