<?php
session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	
	
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    

 

	</head>
	
	<style>
    
.form-group {
  text-align:justify;
    background-color:deepskyblue;
    opacity: .9;
    width:50%;
    padding:10px;
    margin-top:10px;
    margin-left:auto;
    margin-right: auto;
    border-radius:20px;
}

        .box {
            height:40px;
            border-radius:15px;
            margin-top:7px;
            padding-left:10px;
        }    
        
        #list{
            height:30px;
            border-radius:10px;
            margin:5px;
            border-bottom-color: blueviolet;
        }
        
        
    </style>
	<body>
<header>
    <a href="menu.php" class="formabutton"><h3>Atras</h3></a>
						
			
		</header>
		
		<?php 	if ($_SESSION['Admin']){ ?>
		
		
		
		<div class="bienvenido">

                
            <h1>REGISTRAR USUARIO</h1> 
                 
		
	
	
		</div><!--Bienvenido-->
	<div class="form-group">
		<h2>Ingrese los datos</h2>
	
		 <form class="signup-form" method="POST" onsubmit="return validar();" action="includes/signup.inc.php" >
            <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="box" placeholder="Nombre"  maxlength="15" required> <br><br>
            
            
            
            <label for="apellido">Apellido:</label> 
        <input type="text" name="apellido" class="box" placeholder="Apellido"  maxlength="15" required><br><br>



            <label for="cedula">Cedula:</label>
        <input type="number" name="cedula" class="box" placeholder="Cedula" min="1000000" max="40000000" required> <br><br>
        
        

            <label for="nombre">Horas:</label>
            <input type="text" name="horas" class="box" placeholder=""  maxlength="15" required><br><br>

            <label for="nombre">Guia:</label>
            <input type="text" name="guia" class="box" placeholder=""  maxlength="15" required><br><br>
                            
        
                     <button type="submit" id="list" name="submit">Registrar</button>
<br>

<?php }
             else {
                 
               ?> <script> alert("Tiene Que Iniciar Sesion"); window.location.href="log_admin.php"; </script> <?php exit();
             
             }
             
             ?>



</form>
	</div>



    <script src='./js-functions/cambio-de-opciones.js'></script>

</body>
</html>