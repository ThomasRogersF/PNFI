


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
   
  </head>
  <body>
    <header>
    
    </header>
    <div class="bienvenido">
      <h1>Bienvenido Administrador</h1>
    </div><!--Bienvenido-->
    <div class="login">
      <div class="formulario">
        <div id="login">
        
        <form action="includes/log_adm.php" method="POST">
                
          <p><i class="icon-user"></i><input type="text"  name="uid" placeholder="Cedula" onBlur="if(this.value == '') this.value = 'Usuario'" onFocus="if(this.value == 'Usuario') this.value = ''" required></p>
          <p><i class="icon-lock"></i><input type="password" name="pwd" placeholder="Contraseña" class  onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required maxlength="14" minlength="6" ></p>
          <p><input type="submit" name="submit2" value="Iniciar Sesión"></p>
          

        </form>
        
        <center><a href="index.php"> <i class="icon-arrow-left"></i><b>   Regresar</b></a></center>

    </div> <!-- end login -->
      </div>
    </div>

  </body>

</html>
