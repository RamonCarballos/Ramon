<?php 
session_start();

if(isset($_SESSION['cedula'])){
    include "header.php";  
?>
    <div div = "container">
        <div class ="row">
            <div class = "col-sm-12">
            </div>
        </div>
    </div>
<?php 
    include "footer.php";  
}else{
    header("location: ../index.php");
}

?>