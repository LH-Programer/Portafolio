<?php

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


$Id=$_GET["id"];

$sql=$conn->query("SELECT * FROM personas WHERE IdPersona = $Id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

    .container{
    width: 80%;
    max-width: 1400px;
    margin: auto;
    overflow: hidden;
    }

    .col-4 {
        width: 90%;
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

  .btn-cancel{
    margin-left: 10%;
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
    background-color: #650404;
    margin-top: 10px;
  }

  .btn-cancel:hover{
    background-color: #950404;

  }

  @media (min-width:768px) {
    .col-4 {
        width: 30%;
    }
}


</style>

</head>
<body>
<form class="col-4 p-5 m-auto" method="POST">
        <h3 class="text-center">Update People</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
            include "updating.php";
            while($datos=$sql->fetch_object()){?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="Nombre" value="<?= $datos->Nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last name</label>
                <input type="text" class="form-control" name="Apellido" value="<?= $datos->Apellido?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Due Date</label>
                <input type="date" class="form-control" name="Edad" value="<?= $datos->Edad?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-Mail</label>
                <input type="email" class="form-control" name="Mail" value="<?= $datos->Mail?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Country</label>
                <input type="text" class="form-control" name="Pais" value="<?= $datos->Pais?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <input type="text" class="form-control" name="Ciudad" value="<?= $datos->Ciudad?>">
            </div>
            <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnupdate" value="ok">Update</button>
        <button onclick="window.location.href = 'crud.php';" type="submit" class="btn btn-cancel" name="btnupdate" value="ok">Cancel</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>