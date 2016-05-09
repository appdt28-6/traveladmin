<?php ob_start("ob_gzhandler"); ?>
 <?php
 date_default_timezone_set('mexico/general');
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=clientes".date("d-m-y").".xls");
?>
<HTML LANG="es">
<TITLE>::. Exportación de Datos .::</TITLE>
</head>
<body>
<?php
/*$NombreBD = "mastravel";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";*/
$NombreBD = "mastrave_cm";
$Servidor = "localhost";
$Usuario = "mastrave_root";
$Password ="@ppDT2016.";
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);

$sql = "SELECT evento.desde as base,paquete.id_paquete as paq,evento.nombre as nombre,coordinador.nombre as coord,habitacion.costo as a,habitacion.descr as a2,barra.costo as b,barra.descr as b2 ,opcionespaquete.costo as c,opcionespaquete.descripcion as c2, extrapaq.descr as e2,extrapaq.costo as e FROM paquete inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion inner join coordinador on paquete.id_coord=coordinador.id_coord inner join evento on paquete.id_evento=evento.id_evento inner join extrapaq on paquete.id_extra=extrapaq.id_extra where paquete.id_evento='$event' and paquete.id_cliente='$id' ";

$result=mysql_query($sql,$IdConexion);
?>
Datos del cliente
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
 <thead>
 <tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Email</th>
<th>Coordinador</th>
<th>Teléfono de Casa</th>
<th>Celular <th>
<th>Fecha de Nacimiento</th>
<th>Costo de Paquete<th>
<th>Tipo de Plan <th>
<th>Tipo de Habitaciòn <th>	
<th>No. de barras <th>		
<th>Extras de viaje <th>
<th>Precio de habitación<th>
<th>Precio de barras <th>	
 </tr>
 </thead>
 <tbody>
 <?php
while($row = mysql_fetch_array($result)) {
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
</tr>",$row['id'], 
utf8_encode($row['nombre']),
utf8_encode($row['ap']),
utf8_encode($row['am']),
$row['email'],
$row['coord'],
$row['tel'],
$row['cel'],
$row['gen'],
$row['gen'],
$row['fn'],
$row['edad'],
$row['t_sangre'],
$row['alergico'],
$row['enfermedad'],
$h=($row['hospital']==0)?"No":"Si",
$row['medicamentos'],
$row['contactname'],
$row['contactap'],
$row['contactam'],
$row['contacttel'],
$row['contactcel'],
$row['contactmail'],
$row['calle'],
$row['numero'],
$row['col'],
$row['mun'],
$row['cp'],
$row['estado'],
utf8_encode($row['event']));
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la Conexión
?>
</tbody>
</table>
</body>
</html>
