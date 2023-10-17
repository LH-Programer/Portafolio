<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portafolio";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn)
{
    die ("No hay conexion:".mysqli_connect_error());
}

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($mysqli->connect_error) {
  exit('Error connecting to database');
}


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