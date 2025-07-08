<?php
require_once( '../plantillas/cabecera.php' );
if (!isset($_GET['id'])) {
   header ('Location:listado.php');
}

$consulta="SELECT * FROM asignaturas WHERE id=".$_GET['id'];
$resultado= mysqli_query($conexion, $consulta);
if (mysqli_num_rows($resultado)==0) {
    $_SESSION['mensaje']= 'No se puede editar.  No existe nungún alumno con id '.$_GET['id'];
    header('Location:listado.php');
}
$fila= mysqli_fetch_array($resultado);
$id= $fila['id'];
$nombre= $fila['nombre'];
$tipo= $fila['tipo'];
$creditos= $fila['creditos'];
$curso= $fila['curso'];


?>
<article>
<h2>Editar asignaturas</h2>
<form action = 'actualizar.php' method = 'post'>

<div class = 'control'>
<label for = 'nombre'>nNombre: </label>
<input type = 'text' name="nombre" id = 'nombre' required value= '<?=$nombre?>'>
</div>

<div class = 'control'>
<label for = 'tipo'>Tipo: </label>
<input type = 'text' name="tipo" id = "tipo" required value='<?=$tipo?>'>
</div>

<div class = 'control'>
<label for = 'tipo'>Tipo: </label>
<select name ='tipo' id= tipo>
    <option value='TRONCAL'>Troncal</option>
     <option value='OBLIGATORIA'>Obligatoria</option>
      <option value='OPTATIVA'>Optativa</option>


</div>



<div class = 'control'>
<label for = "fechanac">Fecha Nacimiento: </label>
<input type = "num" name="curso" id = "curso" id="fecha_nac" value='<?= $curso?>'>
</div>




<div class="control">
    <input type="submit" value="Editar Asignatura">
</div>
<input type="hidden" name="id" value='<?= $id?>'>

</form>

<?php

require_once( '../plantillas/pie.php' );
?>