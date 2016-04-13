 <?php $event=$_GET['event'];?>
 
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM congreso where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         
                                                         echo $costo=($row['costo']==0)?"Evento sin Congreso":$row['costo'];
                                                         
                                                        
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                             