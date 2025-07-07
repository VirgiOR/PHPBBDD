<?php
require_once('config.php'); //conectar a la bd

//redirigimos a listado si no se llega a la página desde el formalurio
if(!isset($_POST['id']) || !isset($_POST['nombre'])) {
    header('Location: listado.php'); //deja de actualizar la página y se redirige

}
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$fechaNac = $_POST['fecha_nac'];
$email = $_POST['email'];

$consulta = "UPDATE  alumnos SET nombre=?, apellido1=?,apellido2=?, fecha_nac=?, email=? WHERE id=?";
$preparada = mysqli_prepare($conexion,$consulta);
mysqli_stmt_bind_param($preparada, 'sssssi', $nombre,$apellido1,$apellido2,$fechaNac,$email,$id);
mysqli_stmt_execute($preparada);
if (mysqli_affected_rows($conexion)==1){
    header('Location: listado.php');
}else { 
    header('Location: editar.php?id='.$id);
}

?>