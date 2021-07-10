<?php

include 'includes/triangulo.php';
$triangulo = new triangulo ();
echo $triangulo->get_formulario();

if (isset($_POST['guardar'])){
    echo $triangulo->$area (8,0);
   
}
 

