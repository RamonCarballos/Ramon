<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="libreria/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css3.css">
    <link rel="icon" type="image/png" href="img/bu.jpg">

    <title>Registro</title> 
</head>
<body>     
    <div class="wrapper fadeInDown">
    <div id="formContent">           
    <div class="fadeIn first"> 
      <h1 style="color:#000">Registro</h1>
    </div>


                <form action="" id="Isert" method="POST" onsubmit="return agregarCedulaNuevo()">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control"><br>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="form-control"><br>
                    <input type="number" id="cedula" name="cedula" placeholder="Cedula" class="form-control"><br>
                    <input type="email" id="email" name="email" placeholder="Correo" class="form-control"><br>
                    <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control"><br>
                
                    <div id="formFooter">    
                        <center>
                            <button class="btn btn-primary glyphicon glyphicon-upload"> Registrar</button>
                            <a href="index.php"  class="btn btn-success glyphicon glyphicon-log-in"> Inicio</a>
                        </div>
                        </center>
                        </div>
                    </div> 
                </form> 
            </div>
        </div>
    </div>
    <!-- Librerias --> 
    <script src="libreria/sweetalert.min.js"></script>
    <script src="libreria/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        
        function agregarCedulaNuevo(){
            $.ajax({
                method: "POST",
                data: $('#Isert').serialize(),
                url: "procesos/usuario/registro/agregarUsuario.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                    
                    if(respuesta == 1){
                        $('#Isert')[0].reset();
                        swal("Bien", "¡Registrado!", "success");

                    }else if(respuesta == 2) {
                        swal("Que mal", "¡Cedula exitente!", "info");
                    }else{
                        swal("Failed", "¡Error!", "error");
                    }
                }
            }); 
            return false;
        }
    </script>
</body>
</html>