<?php
require_once( '../config.php' );


if(!$_GET['id']) {
    header('Location:listado.php');
}

$_SESSION['mensaje']='';



$id = $_GET['id'];

$consulta = "DELETE FROM asignaturas WHERE  id=$id";

$resultado = mysqli_query($conexion, $consulta);
$numfilas=mysqli_affected_rows($conexion);

if ($numfilas==1){
    $_SESSION["mensaje"]="Asignatura borrada correctamente. Se ha borrado $numfilas filas";
}else{
    $_SESSION["mensaje"]="Error, no se puede borrar".$resultado;
}

header ("Location:listado.php");

?>
