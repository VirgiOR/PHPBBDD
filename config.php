<?php
define("DB_HOST", "localhost");

define("DB_USUARIO","seneca");
define("DB_PASSWORD","1234");
define("DB_NOMBRE","seneca");
//CONECTAR
$conexion = mysqli_connect(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
if(!$conexion){
    echo "<h3>no se puede conectar al servidor</h3>";
    return;

} /*else {
    echo "<h3>conexion establecida correctamente</h3>";

}*/
 

?>
