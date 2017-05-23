<?php
include("utilerias.php");
$conexion=conecta();//servidor y bd
$u=GetSQLValueString($_POST["txtUsuario"], "text");
$n=GetSQLValueString($_POST["txtNombre"], "text");
$c=GetSQLValueString($_POST["txtClave"], "text");
$d=GetSQLValueString($_POST["txtDepto"], "int");
$v=GetSQLValueString($_POST["txtVigencia"], "int");

$consulta=sprintf("update usuarios set nombre=%s, clave=%s, departamento=%d, vigencia=%d where usuario=%s",$n,$c,$d,$v,$u);
print($consulta);
mysql_query($consulta);
if(mysql_affected_rows()>0){
	print("Usuario actualizado :)");
}
else{
	print("Usuario no actualizado :(");
}
?>