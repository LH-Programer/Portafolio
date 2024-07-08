<?php 

session_start();

// Habilitar la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portafolio";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die ("No hay conexion:".mysqli_connect_error());
}

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($mysqli->connect_error) {
  exit('Error connecting to database');
}






?>