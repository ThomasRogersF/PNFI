 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	</head>
    <body>
    <form action="">
        <label for="Cargo">Profesor: </label>
        <select name="" id="">
        <option value="">- Selecciona uno -- </option>

        </select><br><br>

        <label for="Cargo">Materia: </label>
        <select id="list" name="cargo" required>
            <option value="">- Selecciona uno -- </option>
            <option value="CIENCIAS-NATURALES-1">CIENCIAS NATURALES 1</option>
            <option value="CIENCIAS-NATURALES-2">CIENCIAS NATURALES 2</option>
            <option value="BIOLOGIA-1">BIOLOGIA 1</option>
            <option value="BIOLOGIA-2">BIOLOGIA 2</option>
            <option value="BIOLOGIA-3">BIOLOGIA 3</option>
            <option value="QUIMICA-1">QUIMICA 1</option>
            <option value="QUIMICA-2">QUIMICA 2</option>
            <option value="QUIMICA-3">QUIMICA 3</option>
            <option value="FISICA">FISICA-1</option>
            <option value="FISICA">FISICA-2</option>
            <option value="FISICA">FISICA-3</option>
            <option value="EDUCACION-FISICA-1">EDUCACIÓN FISICA 1</option>
            <option value="EDUCACION-FISICA-2">EDUCACIÓN FISICA 2</option>
            <option value="EDUCACION-FISICA-3">EDUCACIÓN FISICA 3</option>
            <option value="EDUCACION-FISICA-4">EDUCACIÓN FISICA 4</option>
            <option value="EDUCACION-FISICA-5">EDUCACIÓN FISICA 5</option>
            <option value="CASTELLANO-1">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-2">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-3">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-4">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-5">CASTELLANO Y LITERATURA</option>
            <option value="INGLES-1">INGLES Y OTRAS LENGUAS EXTRANJERAS 1</option>
            <option value="INGLES-2">INGLES Y OTRAS LENGUAS EXTRANJERAS 2</option>
            <option value="INGLES-3">INGLES Y OTRAS LENGUAS EXTRANJERAS 3</option>
            <option value="INGLES-4">INGLES Y OTRAS LENGUAS EXTRANJERAS 4</option>
            <option value="INGLES-5">INGLES Y OTRAS LENGUAS EXTRANJERAS 5</option>
         
        </select><br><br>
        

        <table class="table table-bordered" id="dynamic_field">
        <tr>
        <td><select id="grado" name="name[]" id="name" ><option value="">-- Selecciona uno -- </option>
               <option value="">- Selecciona uno -- </option>
            <option value="CIENCIAS-NATURALES-1">CIENCIAS NATURALES 1</option>
            <option value="CIENCIAS-NATURALES-2">CIENCIAS NATURALES 2</option>
            <option value="BIOLOGIA-1">BIOLOGIA 1</option>
            <option value="BIOLOGIA-2">BIOLOGIA 2</option>
            <option value="BIOLOGIA-3">BIOLOGIA 3</option>
            <option value="QUIMICA-1">QUIMICA 1</option>
            <option value="QUIMICA-2">QUIMICA 2</option>
            <option value="QUIMICA-3">QUIMICA 3</option>
            <option value="FISICA">FISICA-1</option>
            <option value="FISICA">FISICA-2</option>
            <option value="FISICA">FISICA-3</option>
            <option value="EDUCACION-FISICA-1">EDUCACIÓN FISICA 1</option>
            <option value="EDUCACION-FISICA-2">EDUCACIÓN FISICA 2</option>
            <option value="EDUCACION-FISICA-3">EDUCACIÓN FISICA 3</option>
            <option value="EDUCACION-FISICA-4">EDUCACIÓN FISICA 4</option>
            <option value="EDUCACION-FISICA-5">EDUCACIÓN FISICA 5</option>
            <option value="CASTELLANO-1">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-2">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-3">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-4">CASTELLANO Y LITERATURA</option>
            <option value="CASTELLANO-5">CASTELLANO Y LITERATURA</option>
            <option value="INGLES-1">INGLES Y OTRAS LENGUAS EXTRANJERAS 1</option>
            <option value="INGLES-2">INGLES Y OTRAS LENGUAS EXTRANJERAS 2</option>
            <option value="INGLES-3">INGLES Y OTRAS LENGUAS EXTRANJERAS 3</option>
            <option value="INGLES-4">INGLES Y OTRAS LENGUAS EXTRANJERAS 4</option>
            <option value="INGLES-5">INGLES Y OTRAS LENGUAS EXTRANJERAS 5</option>
            </select></td>
        <td><button name="add" id="add">Agregar</button></td>
        </tr>
        </table>
        


    </form>
    <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><select id="grado" name="name[]" ><option value="">-- Selecciona uno -- </option><option value="">- Selecciona uno -- </option><option value="CIENCIAS-NATURALES-1">CIENCIAS NATURALES 1</option><option value="CIENCIAS-NATURALES-2">CIENCIAS NATURALES 2</option><option value="BIOLOGIA-1">BIOLOGIA 1</option><option value="BIOLOGIA-2">BIOLOGIA 2</option><option value="BIOLOGIA-3">BIOLOGIA 3</option><option value="QUIMICA-1">QUIMICA 1</option><option value="QUIMICA-2">QUIMICA 2</option><option value="QUIMICA-3">QUIMICA 3</option><option value="FISICA">FISICA-1</option><option value="FISICA">FISICA-2</option><option value="FISICA">FISICA-3</option><option value="EDUCACION-FISICA-1">EDUCACIÓN FISICA 1</option><option value="EDUCACION-FISICA-2">EDUCACIÓN FISICA 2</option><option value="EDUCACION-FISICA-3">EDUCACIÓN FISICA 3</option><option value="EDUCACION-FISICA-4">EDUCACIÓN FISICA 4</option><option value="EDUCACION-FISICA-5">EDUCACIÓN FISICA 5</option><option value="CASTELLANO-1">CASTELLANO Y LITERATURA</option><option value="CASTELLANO-2">CASTELLANO Y LITERATURA</option><option value="CASTELLANO-3">CASTELLANO Y LITERATURA</option><option value="CASTELLANO-4">CASTELLANO Y LITERATURA</option><option value="CASTELLANO-5">CASTELLANO Y LITERATURA</option><option value="INGLES-1">INGLES Y OTRAS LENGUAS EXTRANJERAS 1</option><option value="INGLES-2">INGLES Y OTRAS LENGUAS EXTRANJERAS 2</option><option value="INGLES-3">INGLES Y OTRAS LENGUAS EXTRANJERAS 3</option><option value="INGLES-4">INGLES Y OTRAS LENGUAS EXTRANJERAS 4</option><option value="INGLES-5">INGLES Y OTRAS LENGUAS EXTRANJERAS 5</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

    <script src='./js-functions/cambio-de-opciones.js'></script>

</body>
</html>