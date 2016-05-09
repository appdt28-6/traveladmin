 <?php
//Exportar datos de php a Excel
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
$NombreBD = "mastravel";
$Servidor = "localhost";
$Usuario = "root";
$Password ="toor";
/*$NombreBD = "mastrave_cm";
$Servidor = "localhost";
$Usuario = "mastrave_root";
$Password ="@ppDT2016.";*/
$IdConexion = mysql_connect($Servidor, $Usuario, $Password);
mysql_select_db($NombreBD, $IdConexion);

$sql = "SELECT Clientes.id_cliente as id ,Clientes.nombre as nombre,Clientes.ap as ap,Clientes.am as am ,Clientes.email as email,Clientes.tel as tel,Clientes.cel as cel,Clientes.gen as gen,Clientes.fn as fn,Clientes.edad as edad,Clientes.calle as calle,Clientes.numero as numero,Clientes.col as col,Clientes.mun as mun,Clientes.cp as cp,Clientes.estado as estado,
                                            datos_medicos.t_sangre as t_sangre,datos_medicos.alergico as alergico,datos_medicos.enfermedad as enfermedad,datos_medicos.enfermedad as enfermedad,datos_medicos.hospital as hospital,datos_medicos.medicamentos as medicamentos,
                                            datos_emergencia.contactname as contactname,datos_emergencia.contactap as contactap,datos_emergencia.contactam as contactam,datos_emergencia.contacttel as contacttel,datos_emergencia.contactcel as contactcel,datos_emergencia.contactmail as contactmail,
                                            coordinador.nombre as coord , evento.nombre as event FROM Clientes inner join datos_medicos on Clientes.id_cliente=datos_medicos.id_cliente 
                                            inner join datos_emergencia on Clientes.id_cliente=datos_emergencia.id_cliente 
                                            inner join coordinador on Clientes.id_coord=coordinador.id_coord
                                            inner join evento on Clientes.id_evento=evento.id_evento";
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
<th>Genero</th>
<th>Fecha de Nacimiento</th>
<th>Edad</th>
<th>Tipo de Sangre</th>
<th>¿Eres alergico a algo?</th>
<th>¿Tienes alguna enfermedad/fractura/cirugía?</th>
<th>¿Haz estado hospitalizado?</th>
<th>Menciona medicamentos utilizados regularmente</th>
<th>Nombre de Contacto:</th>
<th>Apellido Paterno contacto:</th>
<th>Apellido Materno contacto:</th>
<th>Teléfono de contacto:</th>
<th>Celular de contacto:</th>
<th>Email contacto:</th>
<th>Calle</th>
<th>Número</th>
<th>Colonia</th>
<th>Municipio</th>
<th>Codigo Postal</th>
<th>Estado</th>
<th>Contrato</th>
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
<?php ob_end_flush();?>
