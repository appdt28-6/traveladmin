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
								<h4 class="page-title">Listado de Coordinadores</h4>
								<ol class="breadcrumb">
                                    <li>
                                        <a href="#">Coordinador</a>
                                    </li>
                                    
                                </ol>
							</div>
						</div>

                        

                        <div class="row">
                       
                            <div class="col-sm-12">
                                <div class="card-box">
                                 <a href="newcoord.php">Agregar Coordinador</a>
                                 <br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                    <th>Area</th>
                                                    <th>Detalles</th>
                                                    <th>Asginado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
											include('connect.php');
											$query="SELECT * FROM coordinador";
											$link=mysql_connect($server,$dbuser,$dbpass);
											$result=mysql_db_query($database,$query,$link);
											while($row = mysql_fetch_array($result))
											{
												$area=($row['area']==1)?"Hidalgo":"Queretaro";
                                                //if 1 Queretaro sino pachuca
											echo " <tr>";
											echo " <td>".$row['id_coord']."</td>";
											echo " <td>".utf8_encode($row['nombre'])."</td>";
											echo " <td>".$row['telefono']."</td>";
											echo " <td>".$row['email']."</td>";
											echo " <td>".$area."</td>";
                                            echo " <td><a href=detailcoord.php?coord=".$row['id_coord'].">Clientes</></td>";
                                            echo " <td><a href=coordasigned.php?coord=".$row['id_coord'].">Eventos</></td>";
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