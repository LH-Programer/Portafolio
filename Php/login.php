<?php

include 'conexion.php';

$usuario = $mysqli->real_escape_string($_POST['usuario']);
$contraseña = $mysqli->real_escape_string($_POST['contraseña']);

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE  Usuario = '".$usuario."' and Contraseña = '".$contraseña."'");
$nr = mysqli_num_rows ($query);

if ($nr == 1)

{
    while($nr = mysqli_fetch_array($query)){
 
        $_SESSION['usuario'] = $nr['Usuario'];
      }
  #
      echo '<script type="text/javascript">
      alert("Login successful");
      window.location.href="crud.php";
           </script>';
}

else if ($nr == 0)
{
    echo '<script type="text/javascript">
    alert("User or Password Incorrect");
    window.location.href="/Portafolio/login.html";
         </script>';
}



?>