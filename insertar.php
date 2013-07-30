<?php
if (empty($_FILES['archivo']['name'])){
header("location: formulario.php?proceso=falta_indicar_fichero");
exit;
}
$Host = "localhost";
$User = "cmosque1";
$Password = "cmosque1";
$DataBase = "cmosque1_reto1";
$conexion = mysql_connect($Host,$User,$Password)
or die("No se pudo realizar la conexion con el servidor----.");
mysql_select_db($DataBase,$conexion)
or die("No se puede seleccionar BD");
$binario_nombre_temporal=$_FILES['archivo']['tmp_name'] ;
 
$binario_contenido = addslashes(fread(fopen($binario_nombre_temporal, "rb"), filesize($binario_nombre_temporal)));

$binario_nombre=$_FILES['archivo']['name'];
$binario_peso=$_FILES['archivo']['size'];
$binario_tipo=$_FILES['archivo']['type'];

$consulta_insertar = "INSERT INTO images (id, image, name, weight, type) VALUES ('', '$binario_contenido', '$binario_nombre', '$binario_peso', '$binario_tipo')";
mysql_query($consulta_insertar,$conexion)
or die("No se pudo insertar los datos en la base de datos.");
header("location: imagenes.php");  
exit;
?>
