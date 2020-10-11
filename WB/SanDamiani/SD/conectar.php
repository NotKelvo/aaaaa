		<?php
			$host = "localhost";
			$basededatos = "sdami";
			$usuariodb = "root";
			$clavedb = "";
			$tabla_db1 = "user";
			error_reporting(0);
			$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
			if ($conexion->connect_error) {
		    die("Connection failed: " . $conexion->connect_error);
		    }
		?>
