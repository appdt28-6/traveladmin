<?php 
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$nameError = null;
		$telefonoError = null;
		$emailError = null;
		$userError = null;
		$passError = null;
		$areaError = null;
		
		// keep track post values
		$name = $_POST['name']." (".$_POST['siglas'].")";
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$user = $_POST['user'];
		$pass=$_POST['pass'];
		$area=$_POST['area'];
		
		// validate input
		$valid = true;
		if (empty($name)) {
			$nameError = 'Please enter Nombre';
			$valid = false;
		}
		if (empty($telefono)) {
			$telefonoError = 'Please enter Teléfono';
			$valid = false;
		}
		
		if (empty($email)) {
			$emailError = 'Please enter Email';
			$valid = false;
		}

		if (empty($user)) {
			$userError = 'Please enter Usuario';
			$valid = false;
		}

		if (empty($pass)) {
			$passError = 'Please enter Password';
			$valid = false;
		}

		
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO coordinador (nombre,telefono,email,user,pass,area) values(?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($name,$telefono,$email,$user,$pass,$area));
			Database::disconnect();
			header("Location: coord.php");
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
                        			<h4 class="m-t-0 header-title"><b>Datos de Acceso al coordinador</b></h4>
                        			<!--<p class="text-muted m-b-30 font-13">
										Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
									</p>-->
									<br>
                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" action="newcoord.php" method="post" role="form" enctype="multipart/form-data">                                    
	                                            <div class="form-group" <?php echo !empty($nameError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">Nombre:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="name" class="form-control" placeholder="" value="<?php echo !empty($name)?$name:'';?>">
	                                                    <?php if (!empty($nameError)): ?>
											      		<span class="help-inline"><?php echo $nameError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group">
	                                                <label class="col-md-2 control-label">Escuela:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="siglas" class="form-control" placeholder="ITQ" value="">
	                                                </div>
	                                            </div>
	                                            <div class="form-group" <?php echo !empty($telefonoError)?'error':'';?>>
	                                                <label class="col-md-2 control-label" for="example-email">Teléfono:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="" value="<?php echo !empty($telefono)?$telefono:'';?>">
	                                                    <?php if (!empty($telefonoError)): ?>
											      		<span class="help-inline"><?php echo $telefonoError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
	                                             <div class="form-group" <?php echo !empty($ubiError)?'error':'';?>>
	                                                <label class="col-md-2 control-label" for="example-email">Email:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" id="email" name="email" class="form-control" placeholder="" value="<?php echo !empty($email)?$email:'';?>">
	                                                    <?php if (!empty($emailError)): ?>
											      		<span class="help-inline"><?php echo $emailError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
	                                            <div class="form-group" <?php echo !empty($estadoError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">User:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="user" class="form-control" value="<?php echo !empty($user)?$user:'';?>">
	                                                    <?php if (!empty($userError)): ?>
											      		<span class="help-inline"><?php echo $userError;?></span>
											      		<?php endif; ?>  
	                                                </div>
	                                            </div>
	                                                                     
	                                            <div class="form-group" <?php echo !empty($costoError)?'error':'';?>>
	                                                <label class="col-md-2 control-label">Password:</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="pass" class="form-control" value="<?php echo !empty($pass)?$pass:'';?>">
	                                                    <?php if (!empty($passError)): ?>
											      		<span class="help-inline"><?php echo $passError;?></span>
											      		<?php endif; ?>
	                                                </div>
	                                            </div>
                                                <?php //echo $error;?> 
                                                
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Area:</label>
	                                                <div class="col-md-10">
	                                                     <select name="area" class="form-control mySelectBoxClass">
							                       <!-- <option value="Aguascalientes">Aguascalientes</option>
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
							                        <option value="Guerrero">Guerrero</option>-->
							                        <option value="1">Hidalgo</option>
							                        <!--<option value="Jalisco">Jalisco</option>
							                        <option value="Michoacán">Michoacán</option>
							                        <option value="Morelos">Morelos</option>
							                        <option value="Nayarit">Nayarit</option>
							                        <option value="Nuevo León">Nuevo León</option>
							                        <option value="Oaxaca">Oaxaca</option>
							                        <option value="Puebla">Puebla</option>-->
							                        <option value="2">Querétaro</option>
							                       <!-- <option value="Quintana Roo">Quintana Roo</option>
							                        <option value="San Luis Potosí">San Luis Potosí</option>
							                        <option value="Sinaloa">Sinaloa</option>
							                        <option value="Sonora">Sonora</option>
							                        <option value="Tabasco">Tabasco</option>
							                        <option value="Tamaulipas">Tamaulipas</option>
							                        <option value="Tlaxcala">Tlaxcala</option>
							                        <option value="Veracruz">Veracruz</option>
							                        <option value="Yucatán">Yucatán</option>
							                        <option value="Zacatecas">Zacatecas</option>-->
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