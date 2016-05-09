<?php $idc=$_GET['idcliente'];
setlocale(LC_MONETARY, 'es_MX');
include('connect.php');
$query="SELECT * FROM Clientes where id_cliente='$idc'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
$id=$row['id_cliente'];
$event=$row['id_evento'];
$nom=utf8_encode($row['nombre']);
$ap=utf8_encode($row['ap']);
$am=utf8_encode($row['am']);
$fn=$row['fn'];
$edad=$row['edad'];
$gen=$row['gen'];
$calle=$row['calle'];
$numero=$row['numero'];
$col=$row['col'];
$mun=$row['mun'];
$cp=$row['cp'];
$estado=$row['estado'];
$cel=$row['cel'];
$tel=$row['tel'];
$email=$row['email'];
}
mysql_free_result($result);
mysql_close($link); 
/////
       
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
			<div class="content-page" id="div3">
				<!-- Start content -->
					<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Perfil</h4>
								<ol class="breadcrumb">
									<li>
										<a href="clientes.php">Regresar</a>
									</li>
                                    <li>
                                       <input type="button" value="Print this page" onclick="printPage()" />
                                    </li>
									
								</ol>
							</div>
						</div>

                         <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Datos del Cliente</b></h4>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nombre</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $nom; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">A. Paterno</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $ap; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">A. Materno</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $am; ?>">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Fecha de Nacimiento</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $fn; ?>">
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Edad</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $edad; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Genero</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $gen; ?>">
                                                    </div>
                                                </div>
                                               <div class="form-group">
                                                    <label class="col-md-2 control-label" for="example-email">Teléfono</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="example-email" class="form-control" readonly="" value="<?php echo $tel; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Celular</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $cel; ?>">
                                                    </div>
                                                </div>
                                                                         
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Email</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $email; ?>">
                                                    </div>
                                                </div>                                                                        
                                                <!--<div class="form-group">
                                                    <label class="col-md-2 control-label">Text area</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>-->
                                                
                                                
                               
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-6">

                                            <form class="form-horizontal" role="form">                                    
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Calle</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $calle; ?>">
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Numero</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $numero; ?>">
                                                    </div>
                                                </div>   
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Colonia</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $col; ?>">
                                                    </div>
                                                </div>                                     
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Municipio</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" disabled="" value="<?php echo $mun; ?>">
                                                    </div>
                                                </div>                                    
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Estado</label>
                                                    <div class="col-sm-10">
                                                       <input type="text" class="form-control" disabled="" value="<?php echo $estado; ?>">
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Codigo Postal</label>
                                                    <div class="col-sm-10">
                                                       <input type="text" class="form-control" disabled="" value="<?php echo $cp; ?>">
                                                    </div>
                                                </div>  
    
                                                                               
                                            </form>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                         <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Datos de Paquete Contratado y Pagos</b></h4>
                                    <?php 
//$id=$_GET['id'];
//$event=$_GET['event'];
include('connect.php');
$query="SELECT evento.desde as base,paquete.id_paquete as paq,evento.nombre as nombre,coordinador.nombre as coord,habitacion.costo as a,habitacion.descr as a2,barra.costo as b,barra.descr as b2 ,opcionespaquete.costo as c,opcionespaquete.descripcion as c2, extrapaq.descr as e2,extrapaq.costo as e FROM paquete inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion inner join coordinador on paquete.id_coord=coordinador.id_coord inner join evento on paquete.id_evento=evento.id_evento inner join extrapaq on paquete.id_extra=extrapaq.id_extra where paquete.id_evento='$event' and paquete.id_cliente='$id' ";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
    $evento=$row['nombre'];
    $base=$row['base'];
    $coord=$row['coord'];
    $paq=$row['paq'];
    $descpaq=$row['c2'];
    $hab=$row['a'];
    $habdesc=$row['a2'];
    $barra=$row['b'];
    $barradesc=$row['b2'];
    $opciones=$row['c'];
    //$congreso=($row['d']==0)? 'No aplica' : '0';
    $extradesc=$row['e2'];
    $extra=$row['e'];

}
mysql_free_result($result);
mysql_close($link);                                                 
  ?>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Evento</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo utf8_encode($evento);?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nombre de Coordinador</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo utf8_encode($coord); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Opciones de viaje:</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo utf8_encode($descpaq)." $".$opciones ; ?>">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Tipo de habitación:</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo utf8_encode($habdesc)." $".$hab;?>">
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Barra Libre</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $barradesc." $".$barra;?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Extras</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $extradesc." $".$extra;?>">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Total de paquete</label>
                                                     <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo  money_format('%i',$total=$hab+$barra+$opciones+$extra+$base);?>">
                                                    </div>
                                                </div>
                                                                              
                                            </form>
                                        </div>
                                        
                                       <div class="col-md-6">
                                            <div class="p-20">
                                                <table class="table table-striped m-0">
                                                    <thead>
                                                        <tr>
                                                    <th>Concepto</th>
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
                                            echo " <td>".$tpago."</td>";
                                            echo " <td>".$row['folio']."</td>";
                                            echo " <td>".$row['fecha']."</td>";
                                            echo " <td><a href=../mastravel/comprobante/".$row['archivo']." target=\"_blank\">boucher</></td>";
                                            if($row['status']==0){
                                                echo " <td><a href=authpago.php?idc=".$idc."&&id=".$row['id_pago'].">Autorizo</></td>";
                                           
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
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Datos Médicos y de emergencia</b></h4>
                                    <?php
                                    include('connect.php');
$query="SELECT * FROM datos_medicos where id_cliente='$idc'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
$ts=$row['t_sangre'];
$alergico=$row['alergico'];
$enf=$row['enfermedad'];
$h=($row['hospital']==0)?"No":"Si";
$pemb=($row['posibleemb']==3)?"N/A":$row['posibleemb'];
$emb=($row['emb']==3)?"N/A":$row['emb'];
$med=$row['medicamentos'];
}
mysql_free_result($result);
mysql_close($link);  
?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" role="form">                                    
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Tipo de Sangre</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $ts; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Alergico a algo</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $alergico; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Enfermedad que padece</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $enf; ?>">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Ha sido hospotalizado</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $h; ?>">
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Posibililidad de Embarazo</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $pemb; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Esta embarazada</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $emb; ?>">
                                                    </div>
                                                </div>
                                               <div class="form-group">
                                                    <label class="col-md-2 control-label" for="example-email">Medicamentos</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="example-email" class="form-control" readonly="" value="<?php echo $med; ?>">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <?php
                                    include('connect.php');
$query="SELECT * FROM datos_emergencia where id_cliente='$idc'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
$cname=$row['contactname'];
$cap=$row['contactap'];
$cam=$row['contactam'];
$ctel=$row['contacttel'];
$ccel=$row['contactcel'];
$cmail=$row['contactmail'];
}
mysql_free_result($result);
mysql_close($link);  
?>

                                            <form class="form-horizontal" role="form">                                    
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nombre de contacto</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $cname; ?>">
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">A paterno</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $cap; ?>">
                                                    </div>
                                                </div>   
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">A materno</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" readonly="" value="<?php echo $cam; ?>">
                                                    </div>
                                                </div>                                     
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Teléfono</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" disabled="" value="<?php echo $ctel; ?>">
                                                    </div>
                                                </div>                                    
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Num. Celular</label>
                                                    <div class="col-sm-10">
                                                       <input type="text" class="form-control" disabled="" value="<?php echo $ccel; ?>">
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                       <input type="text" class="form-control" disabled="" value="<?php echo $cmail; ?>">
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
function printPage() {
    $("#div3").addClass("printable");
    window.print();
}
</script>
    
        <script>
            var resizefunc = [];
        </script>

       <?php include('js.php'); ?>
	</body>
</html>