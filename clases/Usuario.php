<?php
require_once "Conexion.php";

class Cedula extends Conectar{

    public function agregarCedula($datos){
        $conexion = Conectar::conexion();
        
        if(self::BuscarCedulaRep($datos['cedula'])){
            return 2;
        }else{
            $sql = "INSERT INTO user( nombre, apellido, cedula, email, password) VALUES (?, ?, ?, ?, ?)";

            $query = $conexion->prepare($sql);
            $query->bind_param('sssss', $datos ['nombre'],
                                       $datos ['apellido'],
                                       $datos ['cedula'],
                                       $datos ['email'],
                                       $datos ['password']);
            $exito = $query->execute();
            $query->close();
            return $exito;
        }    
    }
    
    public function BuscarCedulaRep($cedula){
        $conexion = Conectar::conexion();

        $sql = "SELECT cedula FROM user WHERE cedula = '$cedula'";
        $result = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($result);

        if($datos['cedula'] != "" || $datos['cedula'] == $cedula){
            return 1;
        }else{
            return 0;
        }
    }
    public function login($cedula, $password){
        $conexion = Conectar::conexion();
        $sql = "SELECT count(*) as existeCedula FROM user WHERE cedula = '$cedula' AND password = '$password'";
        $result = mysqli_query($conexion, $sql);

        $respuesta = mysqli_fetch_array($result)['existeCedula'];

        if($respuesta > 0){
            
            $_SESSION['cedula'] = $cedula;
            
            $sql = "SELECT id_usuario FROM user WHERE cedula = '$cedula' AND password = '$password'";

            $result = mysqli_query($conexion, $sql);
            $idCedula = mysqli_fetch_row($result)[0];
            
            $_SESSION['idCedula'] = $idCedula;
            
            return 1;
        }else{
            return 0;
        }
    }   
}
?>