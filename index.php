<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css3.css">
    <link rel="stylesheet" type="text/css" href="libreria/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/bu.jpg">

    <title>Ingresar</title> 
</head>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
    <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <br>
      <h1 style="color:#FFF"></h1>
      <img src="img/bub.jpg" id="icon" wigth="20px" alt="User Icon"/><br><br>
      <p style="color:#000">Para Formar parte de nuestro TeamGAGU, por favor inicia sesión con tus datos.</p>
      <br>
    </div>

    <!-- Login Form -->
    <form method="POST" id="Isert" onsubmit="return logear()">
      <input type="number" id="login" class="fadeIn second" name="login" placeholder="Cedula" required="">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="contraseña" required="">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="registro.php">Registro de Usuario</a>
    </div>

    </div>
</div>
  <script src="libreria/sweetalert.min.js"></script>
  <script src="libreria/jquery-3.5.1.js"></script>
  
<script type="text/javascript">
    function logear(){
      
      $.ajax({  
        type: "POST",
        data: $('#Isert').serialize(),
        url: "procesos/usuario/login/login.php",
        success:function(respuesta){
            respuesta = respuesta.trim();

            if(respuesta == 1){
                window.location= "vistas/inicio.php";
            }else{
                swal("Que mal", "No se pudo ingresar!", "error");
            }
        }
      });
      return false;
    }

  </script>

</body>
</html>