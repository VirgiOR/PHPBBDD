<?php

if(!isset($POST ["nombre"])) {
    header("Location:registro.php");

}
require_once("../plantillas/cabecera.php");

$nombre= $_POST["nombre"];
$tipo= $_POST["tipo"];
$creditos= $_POST["creditos"];
$curso= $_POST["curso"];

?>

<h2>Asignatura a insertar</h2>

<ul>
    <ui>Nombre: <?=$nombre?></ui>
    <ui>Tipo: <?=$tipo?></ui>
    <ui>Creditos: <?=$creditos?></ui>
    <ui>Curso: <?=$curso?></ui>
    

</ul>

<?php
 $consulta= "insert into asignaturas (nombre,tipo,CREDITOS,curso)
 values('$nombre','$tipo','$creditos','$curso')";
 //echo $consulta

 $resultado= mysqli_query($conexion, $consulta);
  
 if ($resultado>0) {
    echo "<p>Se ha insertado la asignatura  satisfactoriamente</p>";
 }else{
    echo "<p class = 'error'> error tuyo, so torpe</p>";
 }

 ?>


<?php require_once("../plantillas/pie.php");?>