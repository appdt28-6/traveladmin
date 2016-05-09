
<?php setlocale(LC_MONETARY, 'es_MX'); ?>
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
								<h4 class="page-title">Finanzas Programadas</h4>
								<ol class="breadcrumb">
									<li>
										<a href="excel/paquetes.php">Exportar a Excel</a>
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
                                                    <th>Email</th>
                                                     <th>PU</th>
                                                      <th>Pagado</th>
                                                      <th>Resta por pagar</th>
                                                     <th>Pagos por</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                             $band2=0;
                                            $total=0;    
											include('connect.php');
											$query="SELECT Clientes.id_cliente as idc,Clientes.nombre as nombre,Clientes.email as email ,evento.desde as base,paquete.id_paquete as paq ,habitacion.costo as a,barra.costo as b ,opcionespaquete.costo as c,extrapaq.costo as e FROM paquete inner join Clientes on paquete.id_cliente=Clientes.id_cliente inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion inner join extrapaq on paquete.id_extra=extrapaq.id_extra inner join evento on paquete.id_evento=evento.id_evento";
											$link=mysql_connect($server,$dbuser,$dbpass);
											$result=mysql_db_query($database,$query,$link);
											while($row = mysql_fetch_array($result))
											{
                                                $idc=$row['idc'];
                                                $base=$row['base'];
                                                if($band2==0){
                                                //no suma precio de congreso
                                                $total=$row['a']+$row['b']+$row['c']+$row['e'];
                                                }
                                                else
                                                {
                                                //suma precio de congreso
                                                $total=$row['a']+$row['b']+$row['c']+$row['d'];
                                                }
                                                $t=$total+$base;
                                                $pp=($t-500)/4;
                                               
                                                $query2="SELECT SUM(pago) as pagado from pagos where id_cliente='$idc' ";
                                                $link=mysql_connect($server,$dbuser,$dbpass);
                                                $result2=mysql_db_query($database,$query2,$link);
                                                while($row2 = mysql_fetch_array($result2))
                                                {
                                                    $pagado=$row2['pagado'];
                                                }
                                                $restada=$t-$pagado;
                                               
    											echo " <tr>";
                                                echo " <td>".$idc."</td>";
                                                echo " <td>".$row['nombre']."</td>";
                                                echo " <td>".$row['email']."</td>";
    											echo " <td>".money_format('%i', $t)."</td>";
                                                echo " <td>".money_format('%i', $pagado)."</td>";
                                                 echo " <td>".money_format('%i', $restada)."</td>";
                                                echo " <td>".money_format('%i', round($pp/100.0,0)*100)."</td>";
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