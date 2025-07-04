<?php

if(!isset($POST ["nombre"])) {
    header("Location:registro.php");

}
require_once("plantillas/cabecera.php");

$nombre= $_POST["nombre"];
$apellido1= $_POST["apellido1"];
$apellido2= $_POST["apellido2"];
$fechaNac = $_POST["fechanac"];
$email = $_POST["email"];
?>

<h2>Alumno a insertar</h2>

<ul>
    <ui>Nombre: <?=$nombre?></ui>
    <ui>Apellido1: <?=$apellido1?></ui>
    <ui>Apellido2: <?=$apellido2?></ui>
    <ui>Fecha de Nacimiento: <?=$fechaNac?></ui>
    <ui>Correo Electronico: <?$email?></ui>

</ul>

<?php
 $consulta= "insert into alumnos (nombre,apellido1,apellido2,fechanac,email)
 values('$nombre','$apellido1','$apellido2','$fechaNac','$email')";
 //echo $consulta

 $resultado= mysqli_query($conexion, $consulta);
  
 if ($resultado>0) {
    echo "<p>Se ha insertado el alumno satisfactoriamente</p>";
 }else{
    echo "<p class = 'error'> error del alumno </p>";
 }

 ?>


<?php require_once("plantillas/pie.php");?>