<?php
$fch1=date("Y-m-d")." 00:00:00";
$fch2=date("Y-m-d")." 23:59:59";
date_default_timezone_set('mexico/general');
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=AsistenciasSocios".date("d-m-y").".xls");
?>
<HTML LANG="es">
<TITLE>::. Exportacion de Datos .::</TITLE>
</head>
<body>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT socios.nombre as nombre , asistencias.area as area, asistencias.llegada as llegada,asistencias.salida as salida FROM asistencias inner join socios on socios.id_socio=asistencias.id_socio where area='MENSUALIDAD ESTUDIANTE' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
MENSUALIDAD ESTUDIANTE
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT socios.nombre as nombre , asistencias.area as area, asistencias.llegada as llegada,asistencias.salida as salida FROM asistencias inner join socios on socios.id_socio=asistencias.id_socio where area='MENSUALIDAD TODO INCLUIDO' and fecha BETWEEN '$fch1' AND '$fch2'";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
MENSUALIDAD TODO INCLUIDO
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT socios.nombre as nombre , asistencias.area as area,asistencias.llegada as llegada,asistencias.salida as salida FROM asistencias inner join socios on socios.id_socio=asistencias.id_socio where area='MENSUALIDAD GYM' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 MENSUALIDAD GYM
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT area,llegada FROM asistencias_clase where area='CLASE GYM' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
CLASE GYM
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT socios.nombre as nombre , asistencias.area as area,asistencias.llegada as llegada,asistencias.salida as salida FROM asistencias inner join socios on socios.id_socio=asistencias.id_socio where area='MENSUALIDAD ZUMBA' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 MENSUALIDAD ZUMBA
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT area,llegada FROM asistencias_clase where area='CLASE ZUMBA' and fecha BETWEEN '$c1' AND '$c2'  ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 CLASE ZUMBA
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT socios.nombre as nombre , asistencias.area as area,asistencias.llegada as llegada,asistencias.salida as salida FROM asistencias inner join socios on socios.id_socio=asistencias.id_socio where area='MENSUALIDAD HIP-HOP' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 MENSUALIDAD HIP-HOP
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT area,llegada FROM asistencias_clase where area='CLASE HIP-HOP' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 CLASE HIP-HOP
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT area,llegada FROM asistencias_clase where area='CLASE TAEBO' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 CLASE TAEBO
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT area,llegada FROM asistencias_clase where area='CLASE INSANITY' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 CLASE INSANITY
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>
<?php
$NombreBD = "pvbiogym";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);
$sql ="SELECT area,llegada FROM asistencias_clase where area='CLASE SALSA' and fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);
 $cuenta = mysql_num_rows($result);

?>
 CLASE SALSA
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Numero de socios</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
</tr>", $cuenta);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la ConexiĂłn
?>
</table>

</body>
</html>