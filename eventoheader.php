  <?php
  $event=$_GET['event'];
											include('connect.php');
											$query="SELECT * FROM evento where id_evento='$event'";
											$link=mysql_connect($server,$dbuser,$dbpass);
											$result=mysql_db_query($database,$query,$link);
											while($row = mysql_fetch_array($result))
											{
											
											$nombre=utf8_encode($row['nombre']);
											$fecha=$row['fecha'];
											$direccion=$row['direccion'];
											$estado=$row['estado'];
											$desde=$row['desde'];
											}
											mysql_free_result($result);
                                    	mysql_close($link);		

                                    	echo $nombre;	
											?>
