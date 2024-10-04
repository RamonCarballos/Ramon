<?php
    require_once "../../../clases/Usuario.php";

    $password = sha1($_POST['password']);
    $datos= array("nombre" => $_POST['nombre'], "apellido" => $_POST['apellido'], "cedula" => $_POST['cedula'], "email" => $_POST['email'], "password" => $password );
    
    $cedula = new Cedula(); 
    echo $cedula->agregarCedula($datos);

    ?>