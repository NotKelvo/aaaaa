		<?php
			$host = "localhost";
			$basededatos = "id6291728_sandamiani";
			$usuariodb = "id6291728_sandam";
			$clavedb = "sdami123";
			$tabla_db1 = "user";
			error_reporting(0);
			$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
			if ($conexion->connect_error) {
		    die("Connection failed: " . $conexion->connect_error);
		    }
		?>
