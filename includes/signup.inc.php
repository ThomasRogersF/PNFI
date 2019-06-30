<?php
#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$nombre = mysqli_real_escape_string( $conn , $_POST['nombre']);
    $apellido = mysqli_real_escape_string( $conn , $_POST['apellido']);
	$cedula = mysqli_real_escape_string( $conn , $_POST['cedula']);
	$horas = mysqli_real_escape_string( $conn , $_POST['horas']);
	$guia = mysqli_real_escape_string( $conn , $_POST['guia']);
	//Error handelers
	//Check for empty field
	#second if
	if (empty($nombre) || empty($apellido) || empty($cedula) ||  empty($horas)) {
		header("Location: ../signup.php?signup=empty");
   
	} /*second else*/ else{
		//Check if input character are valid
		# third if
		if (!preg_match("/^[a-zA-Z]*$/" , $nombre) || !preg_match("/^[a-zA-Z]*$/" , $apellido)  ) {
			
			?> <script> alert("Datos en nombre y apellido invalidos"); window.location.href="../signup.php"; </script> <?php exit(); 
            
		} /*third else*/
			// Check if password is valid
			#forth if
			 /*forth else*/else {
		
					//Inser the user into the database
					$sql = "INSERT INTO prof(nombre, apellido, cedula, horas_laborales, seccion_guia) VALUES ('$nombre','$apellido','$cedula','$horas','$guia');";
					mysqli_query($conn , $sql);
                    
                   if($sql){ ?> <script> alert("Registro exitoso");</script> <?php exit(); }
					
					
				}
			}
		}


 /*first else*/ else {
	header("Location: ../signup.php");
	exit();
}?>