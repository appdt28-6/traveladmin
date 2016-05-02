<?php
$fch1=date("Y-m-d")." 00:00:00";
$fch2=date("Y-m-d")." 23:59:59";
date_default_timezone_set('mexico/general');
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Asistemnciaspersonal".date("d-m-y").".xls");
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
$sql = "SELECT usuarios.username as nombre, asistencia_personal.fecha as fecha,asistencia_personal.llegada as llegada,asistencia_personal.salida as salida FROM asistencia_personal inner join usuarios on asistencia_personal.id_usuario=usuarios.idUsuario where asistencia_personal.fecha BETWEEN '$fch1' AND '$fch2' ";
$result=mysql_query($sql,$IdConexion);

?>
Listado de asistencias.
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>Nombre</TD>
<TD>Fecha</TD>
<TD>Llegada</TD>
<TD>Salida</TD>

</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
</tr>", $row["nombre"],$row["fecha"],$row["llegada"],$row["salida"]);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la Conexión
?>
</table>
</body>
</html>