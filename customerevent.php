<?php $event=$_GET['event'];?>
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
								<h4 class="page-title">Listado de Clientes</h4>
								<ol class="breadcrumb">
									<li>
										<a href="eventos.php">Regresar</a>
									</li>
									<li>
										<a href="excel/clientes.php">Exportar a Excel</a>
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
                       
                            <div class="col-sm-12">
                                <div class="card-box">
                                 <br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Edad</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                     <th>Estado</th>
                                                    <th>Detalles</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
											include('connect.php');
											$query="SELECT * FROM Clientes where id_evento='$event'";
											$link=mysql_connect($server,$dbuser,$dbpass);
											$result=mysql_db_query($database,$query,$link);
											while($row = mysql_fetch_array($result))
											{
                                                //if 1 Queretaro sino pachuca
											echo " <tr>";
											echo " <td>".$row['id_cliente']."</td>";
											echo " <td>".$row['nombre']." ".$row['ap']." ".$row['am']."</td>";
											echo " <td>".$row['edad']."</td>";
											echo " <td>".$row['cel']."</td>";
											echo " <td>".$row['email']."</td>";
                                            echo " <td>".$row['estado']."</td>";
                                            echo '<td width=250>';
							    echo '<a href="profile.php?idcliente='.$row['id_cliente'].'"><button class="btn btn-icon waves-effect waves-light btn-info"> <i class="ti-id-badge "></i> </button></a>';
							   	echo '&nbsp;';
							   //	echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
							   //	echo '&nbsp;';
							   	echo '<a href="deletecliente.php?id='.$row['id_cliente'].'"><button class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </button></a>';
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