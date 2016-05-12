<?php $event=$_GET['event'];?>
<select class="form-control select2" name="hab">
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM habitacion where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                        if($row['costo']==0)
                                                        {$no=" (No incrementa)";}
                                                        else{$no=" (Incrementa $".$row['costo'];}
                                                         
                                                         echo '<option value='.$row['id_hab'].'>'.$row['descr'].$no.')</option>';
                                                         
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                </select>