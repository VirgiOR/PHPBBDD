<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/PHPBBDD/config.php'); //conectar a la bd

//redirigimos a listado si no se llega a la página desde el formalurio
if(!isset($_POST['id']) || !isset($_POST['nombre'])) {
    header('Location: listado.php'); //deja de actualizar la página y se redirige

}
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$creditos = $_POST['CREDITOS'];
$curso = $_POST['curso'];


$consulta = "UPDATE  asignaturas SET nombre=?, tipo=?,CREDITOS=?, curso=? WHERE id=?";
$preparada = mysqli_prepare($conexion,$consulta);
mysqli_stmt_bind_param($preparada, 'ssdii', $nombre,$tipo,$creditos,$curso,$id);
mysqli_stmt_execute($preparada);
if (mysqli_affected_rows($conexion)==1){
    header('Location: listado.php');
}else { 
    header('Location: editar.php?id='.$id);
}

?>