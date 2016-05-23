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
                                <h4 class="page-title">Configuraciones para <?php include ('eventoheader.php');?></h4>
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="#">Configuración</a>
                                    </li>
                                    <li>
                                        <a href="eventos.php">Regresar</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
						<div class="row">
                       
                            <div class="col-sm-12">
                                <div class="card-box">
                                 <form class="form-horizontal" role="form">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Congreso:</label>
                                                    <div class="col-md-10">
                                                       <?php include ('congresos.php') ?><a href="conglist.php?event=<?php echo $event;?>"> Editar</a>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="example-email"> Habitaciones: </label>
                                                    <div class="col-md-10">
                                                      <?php include ('habitaciones.php') ?><a href="hablist.php?event=<?php echo $event;?>"> Editar</a>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">  Barras:</label>
                                                    <div class="col-md-10">
                                                         <?php include ('barras.php') ?><a href="barralist.php?event=<?php echo $event;?>"> Editar</a>
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label"> Extras: </label>
                                                    <div class="col-md-10">
                                                         <?php include ('extras.php') ?><a href="extralist.php?event=<?php echo $event;?>"> Editar</a>
                                                    </div>
                                                </div>           
                                                                         
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Trasportes: </label>
                                                    <div class="col-md-10">
                                                         <?php include ('trasportes.php') ?><a href="opclist.php?event=<?php echo $event;?>"> Editar</a>   
                                                    </div>
                                                </div>                                                                        
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Numero de Pagos</label>
                                                    <div class="col-md-10">
                                                        <?php include ('numpagos.php') ?><a href="pagoslist.php?event=<?php echo $event;?>"> Editar</a>   
                                                    </div>
                                                </div>
                              
                                                
                               
                                            </form>
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