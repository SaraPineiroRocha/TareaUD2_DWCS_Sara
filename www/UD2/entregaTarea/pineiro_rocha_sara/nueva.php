<?php
include ('./utils.php');
?>
session_start();
<div class="errores">
<?php

//Define las variables y las inicializa a vacia
$nombreErr = $edadErr = "";
$nombre = $edad = "";

//Verificación de los datos introducidos en el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreErr = "El campo de nombre está vacío.";
    echo $nombreErr;
  } else {
    $nombre = test_input($_POST["nombre"]);
    filtrarCampo($nombre);
    esTextoValido($nombre);
    echo $nombre;
  }

  if (empty($_POST["edad"])) {
    $edadErr = "El campo de edad está vacío.";
    echo $edadErr;
  } else {
    $edad = test_input($_POST["edad"]);
    filtrarCampoEdad($edad);
    esEdadValida($edad);
    echo $edad;
  }
  //Guardado de datos en el array
  guardarTarea($nombre, $edad);
}
function test_input($dato){
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
?>
</div>