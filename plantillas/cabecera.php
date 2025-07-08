<?php
//incluimos la coexión a la base d datos
$ruta = '/PHPBBDD/';
$rutaPHP = $_SERVER['DOCUMENT_ROOT'].$ruta;

require_once($rutaPHP.'/config.php');

?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
<link rel="stylesheet" href ="<?=$ruta?>/css/estilos.css" >
</head>
<body>

<header>
<h1>Gestión de alumnos Seneca</h1>
<nav>
<ul>
<li><a href = '<?=$ruta?>index.php'>Página de Inicio</a> </li>
<li><a href = '<?=$ruta?>listado.php'>Mostrar alumnos</a> </li>
<li><a href = '<?=$ruta?>registro.php'>Insertar Alumnos</a> </li>
<li><a href = '<?=$ruta?>asignaturas/registro.php'>Mostrar Asignatura</a> </li>
<li><a href = '<?=$ruta?>asignaturas/listado.php'>Insertar Asignatura</a> </li>
</ul>
</nav>
</header>

<main>