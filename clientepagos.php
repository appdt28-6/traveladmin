<?php $idc=$_GET['idc'];
include('connect.php');
$query="SELECT * FROM Clientes where id_cliente='$idc'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{

$nombre=utf8_encode($row['nombre']." ".$row['ap']." ".$row['am']." ")."</td>";
                                                                                      
}
mysql_free_result($result);
mysql_close($link);     
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
								<h4 class="page-title">Listado de Pagos de <?php echo $nombre; ?></h4>
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
                      <a href="pagos.php"><- Regresar</a>
                            <div class="col-sm-12">
                                <div class="card-box">
                                 <br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Concepto</th>
                                                    <th>Evento</th>
                                                    <th>ID Paquete</th>
                                                    <th>Sucursal</th>
                                                     <th>Folio</th>
                                                    <th>Fecha</th>
                                                    <th>Comprobante</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
											include('connect.php');
											$query="SELECT * FROM pagos where id_cliente='$idc'";
											$link=mysql_connect($server,$dbuser,$dbpass);
											$result=mysql_db_query($database,$query,$link);
											while($row = mysql_fetch_array($result))
											{
                                            
                                                if ($row['t_pago']==1){$tpago="Pago 1 (21/Abr/2016)";}
                                                if ($row['t_pago']==2){$tpago="Pago 2 (05/May/2016)";}
                                                if ($row['t_pago']==3){$tpago="Pago 3 (19/May/2016)";}
                                                if ($row['t_pago']==4){$tpago="Resto (10/Jun/2016)";}

											echo " <tr>";
											echo " <td>".$row['id_pago']."</td>";
											echo " <td>".$tpago."</td>";
											echo " <td>".$row['id_evento']."</td>";
											echo " <td>".$row['id_paquete']."</td>";
											echo " <td>".$row['suc']."</td>";
                                            echo " <td>".$row['folio']."</td>";
                                            echo " <td>".$row['fecha']."</td>";
                                            echo " <td><a href=../comprobante/".$row['archivo']." target=\"_blank\">Ver comprobante</></td>";
                                            if($row['status']==0){
                                                echo " <td><a href=authpago.php?idc=".$idc."&&id=".$row['id_pago'].">Autorizar</></td>";
                                           
                                            }else{
                                                echo " <td>Confirmado</td>";
                                            }
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