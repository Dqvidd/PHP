<?php
  echo "<h1>Hola mundo"." o si"."<h1>";

  # GET (Pilla la variable index.php?id=2)
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
  } else {
    $id = 1;
  }

  

  # Condicionales

  if ($id == 1){
    echo "La id es 1";
  } else {
    echo "La id no es 1";
  }

  # Funciones
  function hola($a){
    echo "<h1>La función és "."$a"."</h1>";
  }

  hola("puta");

  #Listas

  $list = ["hola1", "hola2"];
  echo $list[1];

  #Bucles
  for ($i = 1; $i <= 10; $i++) {
    echo $i;
  }

  foreach ($list as $palabras) {
    echo "<li>$palabras</li>";
  }
?>