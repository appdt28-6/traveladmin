<?php $idc=$_GET['idcliente'];?>
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
								<h4 class="page-title">Profile</h4>
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
                                    <h4 class="m-t-0 header-title"><b>Información de Clientes</b></h4>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Text</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="Some text value...">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for="example-email">Email</label>
                                                    <div class="col-md-10">
                                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Password</label>
                                                    <div class="col-md-10">
                                                        <input type="password" class="form-control" value="password">
                                                    </div>
                                                </div>
                                                                         
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Placeholder</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="placeholder">
                                                    </div>
                                                </div>                                                                        
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Text area</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                
                                                
                               
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form">                                    
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Readonly</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="Readonly value">
                                                    </div>
                                                </div>                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Disabled</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" disabled="" value="Disabled value">
                                                    </div>
                                                </div>                                    
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Static control</label>
                                                    <div class="col-sm-10">
                                                      <p class="form-control-static">email@example.com</p>
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Helping text</label>
                                                    <div class="col-sm-10">
                                                      <input type="text" class="form-control" placeholder="Helping text">
                                                      <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                    </div>
                                                </div>  
    
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Input Select</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                        <h6>Multiple select</h6>
                                                        <select multiple="" class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                               
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