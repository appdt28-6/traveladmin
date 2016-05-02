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
                                <h4 class="page-title">Listado de Clientes</h4>
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
                                 <br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                   <th>Nombre</th>
                                                    <th>Apellido Paterno</th>
                                                    <th>Apellido Materno</th>
                                                   <th> Email</th>
                                                    <th>Coordinador</th>
                                                   <th> Telefono de Casa</th>
                                                   <th> Celular <th>
                                                   <th> Genero</th>
                                                   <th> Fecha de Nacimiento</th>
                                                   <th> Edad</th>
                                                    <th>Tipo de Sangre</th>
                                                    <th>¿Eres alergico a algo?</th>
                                                    <th>¿Tienes alguna enfermedad/fractura/cirugía?</th>
                                                   <th> ¿Haz estado hospitalizado?</th>
                                                   <th> Menciona medicamentos utilizados regularmente</th>
                                                   <th> Nombre de Contacto:</th>
                                                   <th> Apellido Paterno contacto:</th>
                                                   <th> Apellido Materno contacto:</th>
                                                   <th> Teléfono de contacto:</th>
                                                   <th> Celular de contacto:</th>
                                                   <th> Email contacto:</th>
                                                   <th> Calle</th>
                                                   <th> Número</th>
                                                    <th>Colonia</th>
                                                   <th> Municipio</th>
                                                   <th> Codigo Postal</th>
                                                   <th> Estado</th>
                                                   <th> Contrato</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include('connect.php');
                                            $query="SELECT Clientes.nombre as nombre,Clientes.ap as ap,Clientes.am as am ,Clientes.email as email,Clientes.tel as tel,Clientes.cel as cel,Clientes.gen as gen,Clientes.fn as fn,Clientes.edad as edad,Clientes.calle as calle,Clientes.numero as numero,Clientes.col as col,Clientes.mun as mun,Clientes.cp as cp,Clientes.estado as estado,datos_medicos.t_sangre as t_sangre,datos_medicos.alergico as alergico,datos_medicos.enfermedad as enfermedad,datos_medicos.enfermedad as enfermedad,datos_medicos.hospital as hospital,datos_medicos.medicamentos as medicamentos,datos_emergencia.contactname as contactname,datos_emergencia.contactap as contactap,datos_emergencia.contactam as contactam,datos_emergencia.contacttel as contacttel,datos_emergencia.contactcel as contactcel,datos_emergencia.contactmail as contactmail,coordinador.nombre as coord FROM Clientes inner join datos_medicos on Clientes.id_cliente=datos_medicos.id_cliente inner join datos_emergencia on Clientes.id_cliente=datos_emergencia.id_cliente inner join coordinador on Clientes.id_coord=coordinador.id_coord
";
                                            $link=mysql_connect($server,$dbuser,$dbpass);
                                            $result=mysql_db_query($database,$query,$link);
                                            while($row = mysql_fetch_array($result))
                                            {
                                                //if 1 Queretaro sino pachuca
                                            echo " <tr>";
                                            echo " <td>".$row['id_cliente']."</td>";
                                            echo " <td>".utf8_encode($row['nombre'])."</td>";
                                            echo " <td>".utf8_encode($row['ap'])."</td>";
                                            echo " <td>".utf8_encode($row['am'])."</td>";
                                             echo " <td>".$row['email']."</td>";
                                             //coord
                                              echo " <td>".$row['coord']."</td>";
                                             echo " <td>".$row['tel']."</td>";
                                            echo " <td>".$row['cel']."</td>";
                                            echo " <td>".$row['gen']."</td>";
                                            echo " <td>".$row['fn']."</td>";
                                           echo " <td>".$row['edad']."</td>";
                                           //tipo de sangre
                                            echo " <td>".$row['t_sangre']."</td>";
                                            echo " <td>".$row['alergico']."</td>";
                                            echo " <td>".$row['enfermedad']."</td>";
                                            echo " <td>".$row['hospital']."</td>";
                                            echo " <td>".$row['medicamentos']."</td>";
                                            //Contacto
                                            echo " <td>".$row['contactname']."</td>";
                                            echo " <td>".$row['contactap']."</td>";
                                            echo " <td>".$row['contactam']."</td>";
                                            echo " <td>".$row['contacttel']."</td>";
                                            echo " <td>".$row['contactcel']."</td>";
                                            echo " <td>".$row['contactmail']."</td>";
                                            //Direccion
                                            echo " <td>".$row['calle']."</td>";
                                            echo " <td>".$row['numero']."</td>";
                                            echo " <td>".$row['col']."</td>";
                                            echo " <td>".$row['mun']."</td>";
                                            echo " <td>".$row['cp']."</td>";
                                            echo " <td>".$row['estado']."</td>";
                                            echo " <td><a href=profile.php?idcliente=".$row['id_cliente'].">Ver Perfil</></td>";
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
SELECT Clientes.nombre as nombre,Clientes.ap as ap,Clientes.am as am ,Clientes.email as email,Clientes.tel as tel,Clientes.cel as cel,Clientes.gen as gen,Clientes.fn as fn,Clientes.edad as edad,Clientes.calle as calle,Clientes.numero as numero,Clientes.col as col,Clientes.mun as mun,Clientes.cp as cp,Clientes.estado as estado,datos_medicos.t_sangre as t_sangre,datos_medicos.alergico as alergico,datos_medicos.enfermedad as enfermedad,datos_medicos.enfermedad as enfermedad,datos_medicos.hospital as hospital,datos_medicos.medicamentos as medicamentos,datos_emergencia.contactname as contactname,datos_emergencia.contactap as contactap,datos_emergencia.contactam as contactam,datos_emergencia.contacttel as contacttel,datos_emergencia.contactcel as contactcel,datos_emergencia.contactmail as contactmail,coordinador.nombre as coord FROM Clientes inner join datos_medicos on Clientes.id_cliente=datos_medicos.id_cliente inner join datos_emergencia on Clientes.id_cliente=datos_emergencia.id_cliente inner join coordinador on Clientes.id_coord=coordinador.id_coord
