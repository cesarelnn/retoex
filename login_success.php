<HTML>
<HEAD>
<TITLE>Subir Imagen</TITLE>
</HEAD>
<BODY>
<?php
if (isset($_GET['proceso'])){
echo $_GET['proceso']."<br>";
}
?>
<FORM enctype="multipart/form-data" method="post" action="insertar.php">
Archivo: <INPUT type="file" name="archivo" size="30">
<INPUT type="submit" name="submit" value="Subir archivo">
</FORM>
</BODY>
</HTML>
