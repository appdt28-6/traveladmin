<?php 
	$coord=$_GET['coord'];
	
	require 'database.php';
		
	if ( !empty($_POST)) {
		// keep track validation errors
		
		
		// keep track post values
		
		$evento=$_POST['evento'];
		
		// validate input
		$valid = true;
		
		
		// insert data
		if ($valid) {
			///////////////////////
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO event_coord (id_evento,id_coord) values(?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($evento,$coord));
			Database::disconnect();

			header("Location: coordasigned.php?coord=$coord");
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
								<h4 class="page-title">Registrar Coordinador</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Coordinador</a>
									</li>
									<li>
										<a href="coordasigned.php?coord=<?php echo $coord;?>">Regresar</a>
									</li>
									
								</ol>
							</div>
						</div>

                        <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Datos de Acceso al coordinador</b></h4>
                        			<!--<p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p>-->
									<br>
                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" action="asignevent.php?coord=<?php echo $coord;?>" method="post" role="form" enctype="multipart/form-data">                                    
	                                            	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Evento:</label>
	                                                <div class="col-md-10">
		                                                <select name="evento" class="form-control mySelectBoxClass">
		                                                <?php 
		                                                include('connect.php');
														$query="SELECT * FROM evento";
														$link=mysql_connect($server,$dbuser,$dbpass);
														$result=mysql_db_query($database,$query,$link);
														while($row = mysql_fetch_array($result))
														{
																echo "<option value=".$row['id_evento'].">".utf8_encode($row['nombre'])." </option>";										
														}
														mysql_free_result($result);
														mysql_close($link);	
														?>
							                    		</select>
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