<?php $event=$_GET['event'];?>
<select class="form-control select2" name="barra">
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM barra where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         
                                                         echo '<option value='.$row['id_barra'].'>'.$row['desc']." $".$row['costo'].'</option>';
                                                         
                                                        
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                      </select>  