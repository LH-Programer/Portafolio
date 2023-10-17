<?php
ini_set('display_errors', 'On');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portafolio";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn)
{
    die ("No hay conexion:".mysqli_connect_error());
}

$usuario = $_POST["usuario"];
$mail = $_POST["mail"];
$contraseña = $_POST["contraseña"];
$ccontraseña = $_POST["ccontraseña"];


        $sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
        $result = mysqli_query ($conn, $sql);

        $sql2="SELECT * FROM usuarios WHERE mail='$mail'";
        $result2 = mysqli_query ($conn, $sql2);

        if($contraseña == $ccontraseña and $result->num_rows == 0 and $result2->num_rows == 0){
            $sql3= "INSERT INTO usuarios (Usuario,Mail,Contraseña,Activo)
            VALUES ('$usuario','$mail','$contraseña',0)";
            $result3=mysqli_query($conn,$sql3);

            if($result3)
            {
                echo '<script type="text/javascript">
                alert("Usuario resgistrado con exito");
                window.location.href="/Portafolio/login.html";
                </script>';

            }
        }    
        else
        {
            if ($result->num_rows != 0)
            {
                echo '<script type="text/javascript">
                alert("User Used");
                window.location.href="/Portafolio/registro.html";
                </script>';
            }
            if($result2->num_rows != 0)
            {
                echo '<script type="text/javascript">
                alert("E-Mail Used");
                window.location.href="/Portafolio/registro.html";
                </script>';
            }
            if ($contraseña != $ccontraseña)
            {
                    echo '<script type="text/javascript">
                    alert("Passwords doesnt match");
                    window.location.href="/Portafolio/registro.html";
                    </script>';
            }
        }


?>