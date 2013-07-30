<?php
if(isset($_GET['id'])) {

$Host = "localhost";
$User = "cmosque1";
$Password = "cmosque1";
$DataBase = "cmosque1_reto1";
$conexion = mysql_connect($Host,$User,$Password)
or die("No se pudo realizar la conexion con el servidor.");
mysql_select_db($DataBase,$conexion)
or die("No se puede seleccionar BD");
$sql = "SELECT name,image,type,weight FROM images WHERE id='".$_GET['id']."'";
    $consulta = mysql_query($sql,$conexion);
    $datos = mysql_result($consulta,0,"image");
    $tipo = mysql_result($consulta,0,"type");
    $nombre = mysql_result($consulta,0,"name");
    $peso = mysql_result($consulta,0,"weight");
 
    header("Content-type: $tipo");
    header("Content-length: $peso");
    header("Content-Disposition: inline; filename=$nombre");
 
   echo $datos;
}
?>

