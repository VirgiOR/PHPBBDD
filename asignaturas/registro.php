<?php
require_once( '../plantillas/cabecera.php' );
?>
<article>
<h2>Inscribir una asignatura</h2>
<form action = 'insertar.php' method = 'post'>



<div class = 'control'>
<label for = 'nombre'>Nombre: </label>
<input type = 'text' name="nombre" id = "nombre" >
</div>


<div class = 'control'>
<label for = 'tipo'>Tipo: </label>
<select name ='tipo' id= tipo>
    <option value='TRONCAL'>Troncal</option>
     <option value='OBLIGATORIA'>Obligatoria</option>
      <option value='OPTATIVA'>Optativa</option>


</div>



<div class = 'control'>
<label for = "creditos">Créditos: </label>
<input type = "number" name="creditos" id = "creditos" value='6' min='0.5' max='15'>
</div>

<div class = 'control'>
<label for = 'curso'>Curso: </label>
<input type = 'number ' name="curso" id = "curso" min="1 max="4 step="1">
</div>


<div class="control">
    <input type="submit" value="Añadir Asignatura">
</div>

</form>

<?php

require_once( '../plantillas/pie.php' );
?>