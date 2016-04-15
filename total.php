  <?php
  $band2=0;
							$total=0;                                              
							include('connect.php');
							$query="SELECT paquete.id_paquete as paq ,habitacion.costo as a,barra.costo as b ,opcionespaquete.costo as c,extrapaq.costo as e FROM paquete inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion inner join extrapaq on paquete.id_extra=extrapaq.id_extra where paquete.id_evento='$event' and paquete.id_cliente='$id' ";
							$link=mysql_connect($server,$dbuser,$dbpass);
							$result=mysql_db_query($database,$query,$link);
							while($row = mysql_fetch_array($result))
							{
							$paq=$row['paq'];
							if($band2==0){
								//no suma precio de congreso
								$total=$row['a']+$row['b']+$row['c']+$row['e'];
								}
								else
								{
								//suma precio de congreso
								$total=$row['a']+$row['b']+$row['c']+$row['d'];
								}
							}
							mysql_free_result($result);
							mysql_close($link);
							?>