<!DOCTYPE HTML>
<html>
	<head>
		<title>MásTravel-Tu mejor opción</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
        <img src="images/logo.png" width="350" height="200" />
			<header id="header">
				<!--<h1>Bienvenidos.</h1>-->
				<!--<p>Estamos preparando para ti, la mejor página web. ¡Esperalo!</p>-->
			<!--<b><a href="mastravel/registro.php?event=2">Regístrate</a>-->
			</header>
				<br>
		<!-- Signup Form -->
        <table width="500px">
        <tr>
			<form method="post" action="mastravel/check.php">
				<td width="40%"><input name="user" id="user" placeholder="Email" type="email" style="width:200px;"></td>
				<td width="40%"><input name="password" id="password" placeholder="Contraseña" type="password" style="width:200px;"></td>
				<td width="20%"><input value="Entrar" type="submit"></td>
			</form>
            </tr>
           <!--<tr>
			<td>Tel: 01 442 299 3461</td>
			<td>WhatsApp: 771 294 1281</td>
			<td>ID Nextel: 32*15*25388</td>
            </tr>-->
            </table>
            <br>
             <br>
            Selecciona tu grupo.
   			<p>
	   			<select id="event" name="event" style="width:250px; ">
	   			<?php
		   		include('connect.php');
				$query="SELECT * FROM evento";
				$link=mysql_connect($server,$dbuser,$dbpass);
				$result=mysql_db_query($database,$query,$link);
					while($row = mysql_fetch_array($result))
					{
						echo "<option value=".$row['id_evento'].">".utf8_encode($row['nombre'])."</option>";
																				
					}
					mysql_free_result($result);
					mysql_close($link);			
		   			
		   		?>
	   			</select>
	   			<!--<select id="event" name="event" style="width:250px; "><option value="2">VERANO MásTravel</option><option value="3">UAEH ICEA Admon.</option><option value="4">CEUMH Vallarta Diciembre</option><option value="5">ITQ Vallarta Diciembre</option></select>-->
	   			<a href="javascript:pasarvariable();"><b style="size:25px;">Regístrate</b></a></p>
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
                	<li><a href="http://www.facebook.com/MasTravelMexico" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://twitter.com/mastravelmx" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="http://sharetagram.com/user/2088544254/mastravelmx" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; MásTravel.</li><li>By: <a href="appdt.info">AppDT</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script type="text/javascript">
				var valor="";
				
				    function capturar()
				
				    {
				        // Obtenemos el valor por el id
				        valor=document.getElementById("seleccion").value;
				        alert(valor);
				    }

  								
				function pasarvariable()
					{
					valor=document.getElementById("event").value;
					location.href="mastravel/registro.php?event="+valor+"";
					}
					</script>

	</body>
</html>