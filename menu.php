<?php
session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		
	</head>
	<body>
		
		<header><?php
			if (isset($_SESSION['Admin'])) {
						echo '
                     
						<form class="forma" action="includes/logout.inc.php" method="POST">
							<button class="formabutton" type="submit" name="submit">Cerrar Sesion</button></form>
						
						';
					} else{
				
						?> <script> alert("Tiene Que Iniciar Sesion"); window.location.href="log_admin.php"; </script> <?php exit();
					} ?>
			
		</header>
		<div class="bienvenido">

		    	<?php

				
				
			if (isset($_SESSION['Admin'])) {
				echo "<h1>BIENVENIDO "; 
                 $nombre=$_SESSION['nombre'];
              // $show=$_SESSION['u_first'];
                $show = strtoupper($nombre);
            
                
                echo $show;
                echo '!</h1>';
			}
        
        date_default_timezone_set('America/Caracas');
        
        function showdate(){
            return date('d-m-Y');
        }
        
		?>	
		
		
	
	
		</div><!--Bienvenido-->
    <div id="contenedor">
     
            <a href="signup.php"><div class="menu">Registrar Usuario</div></a>
      
        
            <a href="seleccion_de_materias.php"><div class="menu">Registros</div></a>
            
            
            <a href="calendario.php"><div class="menu">Asistencias</div></a>
        
                
                
    </div><!--Salida-->
		
		<footer>
			<p>Todos los derechos reservados &copy;</p>
		</footer>

	</body>
</html> 