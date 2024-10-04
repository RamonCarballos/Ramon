<?php

class Conectar{
    public function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $password ="";
        $bd="babu";    
        
        $conexion = mysqli_connect($servidor,
                                    $usuario, 
                                    $password, 
                                    $bd);
        $conexion->set_charset('uft8mb4');                            
        return $conexion;                    
    }
}                             
?>