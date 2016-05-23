<?php 
	$coord=$_GET['coord'];
	include('connect.php');
	$query="SELECT * from coordinador where id_coord='$coord'";
	$link=mysql_connect($server,$dbuser,$dbpass);
	$result=mysql_db_query($database,$query,$link);
	while($row = mysql_fetch_array($result))
	{
		$nombre=$row['nombre'];
	}
	mysql_free_result($result);
mysql_close($link);		
	
	?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="eventos.php" class="logo"><img src="assets/images/maslogo.png"></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <?php include('perfil.php');?>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
			<?php include('menu.php');?>
			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
					<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Eventos asignados para</h4> <?php echo $nombre;?>
								<ol class="breadcrumb">
                                    <li>
                                        <a href="#">Eventos Asignados</a>
                                    </li>
                                     <li>
                                        <a href="coord.php">Regresar</a>
                                    </li>
                                    
                                </ol>
							</div>
						</div>

                        

                        <div class="row">
                       
                            <div class="col-sm-12">
                                <div class="card-box">
                                 <a href="asignevent.php?coord=<?php echo $coord; ?>">Asignar otro evento</a>
                                 <br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Eventos asignados</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
											include('connect.php');
											$query="SELECT evento.nombre as evento FROM event_coord inner join evento on event_coord.id_evento=evento.id_evento where event_coord.id_coord='$coord'";
											$link=mysql_connect($server,$dbuser,$dbpass);
											$result=mysql_db_query($database,$query,$link);
											while($row = mysql_fetch_array($result))
											{
											echo " <tr>";
											echo " <td>".utf8_encode($row['evento'])."</td>";
											echo " </tr>";
											}
											mysql_free_result($result);
                                    	mysql_close($link);			
											?>
                                         
                                               
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    2016 © AppDT.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

       <?php include('js.php'); ?>
	</body>
</html>