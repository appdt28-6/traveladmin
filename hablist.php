<? $event=$_GET['event']; ?>
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
								<h4 class="page-title">Listado de Habitaciones para <?php include ('eventoheader.php');?></h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Habitaciones</a>
									</li>
									<li>
										<a href="detailevent.php?event=<?php echo $event;?>">Regresar</a>
									</li>
								</ol>
							</div>
						</div>

                        

                        <div class="row">
                       
                            <div class="col-sm-12">
                                <div class="card-box">
                                 <a href="newhab.php?event=<?php echo $event;?>">Agregar Habitación</a>
                                 <br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Descripción</th>
                                                    <th>Costo</th>
                                                   <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
											include('connect.php');
											$query="SELECT * FROM habitacion where id_evento='$event'";
											$link=mysql_connect($server,$dbuser,$dbpass);
											$result=mysql_db_query($database,$query,$link);
											while($row = mysql_fetch_array($result))
											{
											echo " <tr>";
											echo " <td>".utf8_encode($row['descr'])."</td>";
											echo " <td>".$row['costo']."</td>";
											echo '<td width=250>';
                                            echo '<a class="btn btn-success" href="update.php?id='.$row['id_hab'].'">Update</a>';
                                            echo '&nbsp;';
                                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id_hab'].'">Delete</a>';
                                            echo '</td>';
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