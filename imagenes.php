<?php
$Host = "localhost";
$User = "cmosque1";
$Password = "cmosque1";
$DataBase = "cmosque1_reto1";
$conexion = mysql_connect($Host,$User,$Password)
or die("No se pudo realizar la conexion con el servidor.");
mysql_select_db($DataBase,$conexion)
or die("No se puede seleccionar BD");
$sql = "SELECT id,name,type,weight FROM images";
$consulta = mysql_query($sql)
or die ("No se pudo ejecutar la consulta");
    While ($registro=mysql_fetch_assoc($consulta)){
        echo "<img src=\"ver.php?id=".$registro['id']."\">";
        echo "<br> Nombre archivo: ".$registro['name'];
        echo "<br> Tipo archivo (MIME formato): ".$registro['type'];
        echo "<br> Peso: ".$registro['weight']." bytes.<br><br>";
    }

?>


<br><a href =login.php>Quiero subir una imagen! </a><br>
