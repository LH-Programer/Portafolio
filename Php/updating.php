<?php

if (!empty($_POST["btnupdate"])) {
    if (!empty($_POST["Nombre"]) && !empty($_POST["Apellido"]) && !empty($_POST["Edad"])
    && !empty($_POST["Mail"]) && !empty($_POST["Pais"]) && !empty($_POST["Ciudad"])) {

        $id=$_POST["id"];
        $Nombre=$_POST["Nombre"];
        $Apellido=$_POST["Apellido"];
        $Edad=$_POST["Edad"];
        $Mail=$_POST["Mail"];
        $Pais=$_POST["Pais"];
        $Ciudad=$_POST["Ciudad"];

        $sql=$conn->query("UPDATE personas SET Nombre='$Nombre', Apellido='$', Apellido='$Apellido',
         Edad='$Edad', Mail='$Mail', Pais='$Pais', Ciudad='$Ciudad' WHERE IdPersona=$id");
        if ($sql==1) {
            header("location:crud.php");
        } else {
            echo'<div class="alert alert-danger">Error with the Updating</div>';
        }
        
} else {
    echo'<div class="alert alert-warning">Some fields are empty</div>';
    }
}



?>