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

    <h1>Ejer 3</h1>
    <p>3. Generar un archivo llamado ​ incluir.php​ que retorne un ​ echo​ con el siguiente string
    “Soy incluir.php”.</p>
    <?php

      require("partial-1.php")


     ?>

    <hr>




    <!--
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
