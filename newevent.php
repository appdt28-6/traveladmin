<?php 
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$nameError = null;
		$fechaError = null;
		$ubicacionError = null;
		$costoError = null;
		
		// keep track post values
		$name = $_POST['name'];
		$fecha = $_POST['fecha'];
		$ubicacion = $_POST['ubicacion'];
		$costo = $_POST['costo'];
		
		// validate input
		$valid = true;
		if (empty($name)) {
			$nameError = 'Please enter Name';
			$valid = false;
		}
		$valid = true;
		if (empty($fecha)) {
			$fechaError = 'Please enter Fecha';
			$valid = false;
		}

		$valid = true;
		if (empty($ubicacionError)) {
			$ubicacion = 'Please enter Locación';
			$valid = false;
		}
		
		
		if (empty($costo)) {
			$costoError = 'Please enter Costo';
			$valid = false;
		}
if ($_FILES['archivo']["error"] > 0)
			  {
			  $error="Error:No haz seleccionado foto.";
			  }
			else
			  {
			$error="Imagen subida con exito.";
			  $nombrearchivo=$_FILES['archivo']['name'];
			  move_uploaded_file($_FILES['archivo']['tmp_name'],"photoevent/" . $_FILES['archivo']['name']);
			  }
		
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO evento (nombre,fecha,direccion,estado,desde,photo) values(?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($name,$fecha,$ubicacion,$estado,$desde,$nombrearchivo));
			Database::disconnect();
			header("Location: evento.php");
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
								<h4 class="page-title">Crear Evento</h4>
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
                        			<h4 class="m-t-0 header-title"><b>Información principal del evento</b></h4>
                        			<!--<p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p>-->
									<br>
                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" action="newevent.php" method="post" role="form" enctype="multipart/form-data">                                    
	                                            <div class="form-group" <?php echo !empty($nameError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">Nombre:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="eventname" class="form-control" placeholder="¡Verano Mástravel..." value="<?php echo !empty($name)?$name:'';?>">
	                                                    <?php if (!empty($nameError)): ?>
											      		<span class="help-inline"><?php echo $nameError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
	                                            <div class="form-group" <?php echo !empty($fechaError)?'error':'';?>>
	                                                <label class="col-md-2 control-label" for="example-email">Fecha Del:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" id="fecha" name="fecha" class="form-control" placeholder="1 al 5 de Junio" value="<?php echo !empty($fecha)?$fecha:'';?>">
	                                                    <?php if (!empty($fechaError)): ?>
											      		<span class="help-inline"><?php echo $fechaError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group" <?php echo !empty($ubicacionError)?'error':'';?>>
	                                                <label class="col-md-2 control-label" for="example-email">Lugar:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" id="ubicacion" name="ubicacion" class="form-control" placeholder="Hotel Plaza..." value="<?php echo !empty($ubicacion)?$ubicacion:'';?>">
	                                                    <?php if (!empty($ubicacionError)): ?>
											      		<span class="help-inline"><?php echo $ubicacionError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
	                                            <div class="form-group" <?php echo !empty($estadoError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">Estado:</label>
	                                                <div class="col-md-10">
	                                                     <select name="estado" id="state" class="form-control mySelectBoxClass">
							                        <option value="Aguascalientes">Aguascalientes</option>
							                        <option value="Baja California">Baja California</option>
							                        <option value="Baja California Sur">Baja California Sur</option>
							                        <option value="Campeche">Campeche</option>
							                        <option value="Chiapas">Chiapas</option>
							                        <option value="Chihuahua">Chihuahua</option>
							                        <option value="Coahuila">Coahuila</option>
							                        <option value="Colima">Colima</option>
							                        <option value="Distrito Federal">Distrito Federal</option>
							                        <option value="Durango">Durango</option>
							                        <option value="Estado de México">Estado de México</option>
							                        <option value="Guanajuato">Guanajuato</option>
							                        <option value="Guerrero">Guerrero</option>
							                        <option value="Hidalgo">Hidalgo</option>
							                        <option value="Jalisco">Jalisco</option>
							                        <option value="Michoacán">Michoacán</option>
							                        <option value="Morelos">Morelos</option>
							                        <option value="Nayarit">Nayarit</option>
							                        <option value="Nuevo León">Nuevo León</option>
							                        <option value="Oaxaca">Oaxaca</option>
							                        <option value="Puebla">Puebla</option>
							                        <option value="Querétaro">Querétaro</option>
							                        <option value="Quintana Roo">Quintana Roo</option>
							                        <option value="San Luis Potosí">San Luis Potosí</option>
							                        <option value="Sinaloa">Sinaloa</option>
							                        <option value="Sonora">Sonora</option>
							                        <option value="Tabasco">Tabasco</option>
							                        <option value="Tamaulipas">Tamaulipas</option>
							                        <option value="Tlaxcala">Tlaxcala</option>
							                        <option value="Veracruz">Veracruz</option>
							                        <option value="Yucatán">Yucatán</option>
							                        <option value="Zacatecas">Zacatecas</option>
							                    		</select>
	                                                </div>
	                                            </div>
	                                                                     
	                                            <div class="form-group" <?php echo !empty($costoError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">Costo base:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="costo" class="form-control" value="<?php echo !empty($costo)?$costo:'';?>">
	                                                    <?php if (!empty($costoError)): ?>
											      		<span class="help-inline"><?php echo $costoError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
                                                <?php echo $error;?> 
	                                             <div class="form-group">
	                                                <label class="col-md-2 control-label">Imagen del evento</label>
	                                                <div class="col-md-10">
	                                                  <input type="file" name="archivo" id="archivo"></input>
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