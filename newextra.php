<?php 
	$event=$_GET['event'];
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$descError = null;
		$costoError = null;
		
		// keep track post values
		$desc = $_POST['desc'];
		$costo = $_POST['costo'];
		
		// validate input
		$valid = true;
		
		if (empty($desc)) {
			$descError = 'Please enter Descripción';
			$valid = false;
		}
		
		if (empty($costo)) {
			$costoError = 'Please enter Costo';
			$valid = false;
		}
		
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO extrapaq (id_evento,descr,costo) values(?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($event,$desc,$costo));
			Database::disconnect();
			header("Location: extralist.php?event=$event");
		}
	}
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
								<h4 class="page-title">Opciones extras</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Extras</a>
									</li>
									<li>
										<a href="extralist.php?event=<?php echo $event;?>">Regresar</a>
									</li>
																	</ol>
							</div>
						</div>

                        <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Agregar opciones extras</b></h4>
                        			<!--<p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p>-->
									<br>
                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" action="newextra.php?event=<?php echo $event;?>" method="post" role="form">                                    
	                                            <div class="form-group" <?php echo !empty($descError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">Descripción:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="desc" class="form-control" placeholder="Cuadruple..." value="<?php echo !empty($desc)?$desc:'';?>">
	                                                    <?php if (!empty($descError)): ?>
											      		<span class="help-inline"><?php echo $descError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
	                                            <br>
	                                            <div class="form-group" <?php echo !empty($costoError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">Costo:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" id="costo" name="costo" class="form-control" placeholder="450" value="<?php echo !empty($costo)?$costo:'';?>">
	                                                    <?php if (!empty($costoError)): ?>
											      		<span class="help-inline"><?php echo $costoError;?></span>
											      	<?php endif; ?>
	                                                </div>
	                                            </div>
	                                                                                                        
	                                        <button type="submit" class="btn btn-success waves-effect waves-light m-l-10 btn-md">Guardar</button>                                      
	                                        </form>
                        				</div>
                        				                     				
                        				
                        			</div>
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