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

$sql = "SELECT Clientes.id_cliente AS id, Clientes.nombre AS nombre, Clientes.ap AS ap, Clientes.am AS am, Clientes.edad AS edad, Clientes.cel AS cel, Clientes.email AS email, Clientes.estado AS estado, datos_medicos.t_sangre AS T, datos_medicos.alergico AS al, datos_medicos.enfermedad AS enf, datos_medicos.hospital AS hos, datos_medicos.posibleemb AS pemb, datos_medicos.emb AS emb, datos_medicos.medicamentos AS med, datos_emergencia.contactname AS contacto, datos_emergencia.contactap AS contactoap, datos_emergencia.contactam AS contactoam, datos_emergencia.contacttel AS contactotel, datos_emergencia.contactcel AS contactocel, datos_emergencia.contactmail AS contactomail,
coordinador.nombre as coord,
evento.nombre as evento,
barra.descr as barra,
habitacion.descr as hab,
extrapaq.descr as extra,
opcionespaquete.descripcion as op
FROM Clientes
INNER JOIN datos_medicos ON Clientes.id_cliente = datos_medicos.id_cliente
INNER JOIN datos_emergencia On Clientes.id_cliente=datos_emergencia.id_cliente
INNER JOIN paquete ON Clientes.id_cliente=paquete.id_cliente
INNER JOIN barra ON paquete.id_barra=barra.id_barra
INNER JOIN habitacion ON paquete.id_hab=habitacion.id_hab
INNER JOIN extrapaq ON paquete.id_extra=extrapaq.id_extra
INNER JOIN opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion
INNER JOIN coordinador ON Clientes.id_coord=coordinador.id_coord
INNER JOIN evento ON Clientes.id_evento=evento.id_evento
";
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
<th>Edad</th>
<th>Celular <th>
<th>Email</th>
<th>Estado</th>
<th>Tipo de Sangre</th>
<th>¿Eres alergico a algo?</th>
<th>¿Tienes alguna enfermedad/fractura/cirugía?</th>
<th>¿Haz estado hospitalizado?</th>
<th>¿Posible embarazo?</th>
<th>¿Embarazada?</th>
<th>Menciona medicamentos utilizados regularmente</th>
<th>Nombre de Contacto:</th>
<th>Apellido Paterno contacto:</th>
<th>Apellido Materno contacto:</th>
<th>Teléfono de contacto:</th>
<th>Celular de contacto:</th>
<th>Email contacto:</th>
<th>Coordinador</th>
<th>Evento</th>
<th>Barras Libres</th>
<th>Habitacion</th>
<th>Extras</th>
<th>Trasporte</th>
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
</tr>",$row['id'], 
utf8_encode($row['nombre']),
utf8_encode($row['ap']),
utf8_encode($row['am']),
$row['edad'],
$row['cel'],
$row['email'],
$row['email'],
$row['estado'],
$row['T'],
$row['al'],
$row['enf'],
$row['hos'],
$row['pemb'],
$row['emb'],
$row['med'],
$row['contacto'],
$row['contactoap'],
$row['contactoam'],
$row['contactotel'],
$row['contactocel'],
$row['contactomail'],
$row['coord'],
utf8_encode($row['evento']),
$row['barra'],
$row['hab'],
$row['extra'],
$row['op']);
}
mysql_free_result($result);
mysql_close($IdConexion); //Cierras la Conexión
?>
</tbody>
</table>
</body>
</html>
