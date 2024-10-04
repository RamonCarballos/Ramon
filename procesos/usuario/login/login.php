<?php
    session_start();
    require_once "../../../clases/Usuario.php";

    $cedula = $_POST['login'];
    $password = sha1($_POST['password']);

    $cedulaObj = new Cedula();
    
    echo $cedulaObj->login($cedula, $password);


?>