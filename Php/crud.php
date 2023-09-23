
<?php

session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
  echo '<script type="text/javascript">
  alert("You need to login");
  window.location.href="/Portafolio/login.html";
  </script>';
  die();

}

// Habilitar la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);


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

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../Img/ojos.png">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable= no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="../Css/crud.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0b6d2c7b29.js" crossorigin="anonymous"></script>

<style>
    *{
    box-sizing: border-box;
  }
  html {
    scroll-behavior: smooth;
  }
  body{
    font-family: 'Roboto', sans-serif;
    margin: 0%;
    background-color: #14151a;
    color: aliceblue;
}

.stars {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }
  
  .stars:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('../Img/ses.png');
    animation: animateStars 100s linear infinite;
    -webkit-animation: animateStars 100s linear infinite;
  }
  
  @keyframes animateStars {
    0% {
      background-position: 0 0;
    }
    100% {
      background-position: -5000px -5000px;
    }
  }

a {
    color: #8f8f8f;
    text-decoration: none;
}

a:hover{
  color: aliceblue;
}

.container{
    width: 80%;
    max-width: 1400px;
    margin: 10px;
    overflow: hidden;
  }

  .form-control{
    font-weight: bold;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    border: 1px solid aliceblue;
    box-shadow: 2px 2px 10px aliceblue;
    color: aliceblue;
    background-color: #14151a;
  }

  .btn-primary{
    font-size: 1.0em;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    border: 1px solid aliceblue;
    box-shadow: 2px 2px 10px aliceblue;
    color: aliceblue;
    background-color: #05389f;
    margin-top: 10px;
  }

  .btn-primary:hover{
    background-color: #1043a8;

  }

  @media (max-width:768px) {
    .col-4 {
        width: 100%;
    }

    .table{
      width: 100%;
      overflow-y: auto !important;
      overflow-x: auto !important;
    }
  }
</style>


</head>
<body>
<div class="stars"></div>

  <script>
    function eliminar(){
      var respuesta=confirm("¿Are you sure with delete this data?");
      return respuesta
    }
  </script>

    <div class="container">
      <a href="../index.html">Go back</a>
      <br>
      <a href="cerrarsesion.php">Sing off <i class="fa-sharp fa-solid fa-bomb fa-fade"></i></a>
    </div>
    <h1 class="text-center p-3">CRUD</h1>
    <?php
      include "delete.php";
    ?>
    
    <div class="container-fluid row">
    <form class="col-4 p-5" method="POST">
        <h3 class="text-center">People Insert</h3>
        <?php
          include "insert.php"
        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="Nombre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last name</label>
            <input type="text" class="form-control" name="Apellido">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Due Date</label>
            <input type="date" class="form-control" name="Edad">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-Mail</label>
            <input type="email" class="form-control" name="Mail">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Country</label>
            <input type="text" class="form-control" name="Pais">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">City</label>
            <input type="text" class="form-control" name="Ciudad">
        </div>
        <button type="submit" class="btn btn-primary" name="btninsert" value="ok">Insert</button>
    </form>
    <div class="col p-5">
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Due Date</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql=$conn->query("SELECT * FROM personas");
        while($datos=$sql->fetch_object()){?>
            <tr>
                <td><?= $datos->IdPersona?></td>
                <td><?= $datos->Nombre?></td>
                <td><?= $datos->Apellido?></td>
                <td><?= $datos->Edad?></td>
                <td><?= $datos->Mail?></td>
                <td><?= $datos->Pais?></td>
                <td><?= $datos->Ciudad?></td>
                <td>
                <a href="update.php?id=<?= $datos->IdPersona ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-fancy"></i></a>
                <a onclick="return eliminar()" href="crud.php?id=<?= $datos->IdPersona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
    <?php }
    ?>
  </tbody>
</table>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>