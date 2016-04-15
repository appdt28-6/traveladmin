 <?php $event=$_GET['event'];?>
 <select class="form-control select2" name="extra">
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM extrapaq where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         
                                                         echo '<option value='.$row['id_extra'].'>'.utf8_encode($row['descr'])." $".$row['costo'].'</option>';
                                                         
                                                        
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                </select>