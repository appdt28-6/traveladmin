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
								<h4 class="page-title">Opciones para este evento</h4>
								<!--<ol class="breadcrumb">
									<li>
										<a href="#">Ubold</a>
									</li>
									<li>
										<a href="#">Tables</a>
									</li>
									<li class="active">
										Datatable
									</li>
								</ol>-->
							</div>
						</div>

                        

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="col-lg-6">
                                            <h4 class="m-t-0 header-title"><b>Paquete de viaje</b></h4>
                            </div>
                                 <br>
                                 <table>
                                    <tr>
                                        <td>Congreso:</td><td> <?php include ('congresos.php') ?></td><td><a href="conglist.php?event=<?php echo $event;?>"> Editar</a></td>
                                                    
                                    </tr>
                                    <tr>
                                        <td>Habitaciones:</td><td><?php include ('habitaciones.php') ?></td><td><a href="hablist.php?event=<?php echo $event;?>"> Editar</a></td>
                                                    
                                    </tr>
                                    <tr>
                                        <td>Barras:</td><td><?php include ('barras.php') ?></td><td><a href="barralist.php?event=<?php echo $event;?>"> Editar</a></td>
                                                   
                                    </tr>
                                    <tr>
                                        <td>Extras:</td> <td><?php include ('extras.php') ?></td><td><a href="extralist.php?event=<?php echo $event;?>"> Editar</a></td>
                                                   
                                    </tr>
                                    <tr>
                                        <td>Trasportes:</td> <td><?php include ('trasportes.php') ?></td><td><a href="opclist.php?event=<?php echo $event;?>"> Editar</a></td>
                                    </tr>
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