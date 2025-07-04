<?php
require_once( 'plantillas/cabecera.php' );
?>
<article>
<h2>Listado de alumnos matriculados</h2>

<table>
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido1</th>
<th>Apellido2</th>
<th>Fecha de nacimiento</th>
<th>Correo electrónico</th>
</tr>
</thead>
<tbody>
<?php
$consulta = 'SELECT * FROM  alumnos';
//Ejecuta la consulta y devueve un array con las filas resultantes
$filas = mysqli_query( $conexion, $consulta );

//iterar las filas de la tabla
while ( $fila =  mysqli_fetch_array( $filas ) ) {
    echo '<tr>';
    echo '<td>'. $fila[ 'id' ].' </td>';
    echo '<td>'. $fila[ 'nombre' ].' </td>';
    echo '<td>'. $fila[ 'apellido1' ].' </td>';
    echo '<td>'. $fila[ 'apellido2' ].' </td>';
    echo '<td>'. $fila[ 'fecha_nac' ].' </td>';
    echo '<td>'. $fila[ 'email' ].' </td>';
}

?>
</tbody>

</table>
</article>

<?php require_once( 'plantillas/pie.php' );
?>

