 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	</head>
    <body>
    <form action="">
        <label for="Cargo">Materia: </label>
        
        <select id="list" name="cargo" required>
            <option value="">- Selecciona uno -- </option>
            <option value="CIENCIAS-NATURALES">CIENCIAS NATURALES</option>
            <option value="BIOLOGIA">BIOLOGIA</option>
            <option value="QUIMICA">QUIMICA</option>
            <option value="FISICA">FISICA</option>
            <option value="EDUCACION-FISICA">EDUCACIÓN FISICA</option>
            <option value="CASTELLANO">CASTELLANO Y LITERATURA</option>
            <option value="INGLES">INGLES Y OTRAS LENGUAS EXTRANJERAS 1</option>
        </select><br><br>

        <label for="Año">Años: </label>      
        <select id="grado">
         <option value="">-- Selecciona uno -- </option>
        </select>

    </form>

    <script src='./js-functions/cambio-de-opciones.js'></script>

</body>
</html>