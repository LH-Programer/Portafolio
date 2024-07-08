<?php
if (!empty($_POST["btninsert"])) {
    if (!empty($_POST["Nombre"]) && !empty($_POST["Apellido"]) && !empty($_POST["Edad"])
     && !empty($_POST["Mail"]) && !empty($_POST["Pais"]) && !empty($_POST["Ciudad"])){
        
        $Nombre=$_POST["Nombre"];
        $Apellido=$_POST["Apellido"];
        $Edad=$_POST["Edad"];
        $Mail=$_POST["Mail"];
        $Pais=$_POST["Pais"];
        $Ciudad=$_POST["Ciudad"];
        
        $sql=$conn->query("INSERT INTO personas (Nombre,Apellido,Edad,Mail,Pais,Ciudad) VALUES ('$Nombre','$Apellido','$Edad','$Mail','$Pais','$Ciudad')");
        if ($sql==1) {
            echo'<div class="alert alert-success">Insert has been successfully</div>';
            header("location:crud.php");
        } else {
            echo'<div class="alert alert-danger">Error with the insert</div>';
        }
        


    } else {
        echo'<div class="alert alert-warning">Some fields are empty</div>';
    }
}
?>