<?php

include 'conexion.php';

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion == ''){
  echo '<script type="text/javascript">
  alert("You need to login");
  window.location.href="/Portafolio/login.html";
  </script>';
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../Img/ojos.png">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="../Css/crud.css" type="text/css">
<script src="https://kit.fontawesome.com/0b6d2c7b29.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="stars"></div>

<script>
    function eliminar() {
        var respuesta = confirm("¿Are you sure with delete this data?");
        return respuesta;
    }
</script>

<div class="container">
  <div class="options">
    <a href="../index.html">Go back</a>
    <br>
    <a href="cerrarsesion.php">Sign off <i class="fa-sharp fa-solid fa-bomb fa-fade"></i></a>
  </div>

<h1 class="text-center p-3">CRUD</h1>

<?php include "delete.php"; ?>

<div class="container-fluid row centered-content">
    <form class="col-4 p-5" method="POST">
        <h3 class="text-center">People Insert</h3>
        <?php include "insert.php"; ?>
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

    <div class="col p-5 table-responsive">
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
                    $sql = $conn->query("SELECT * FROM personas");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->IdPersona ?></td>
                            <td><?= $datos->Nombre ?></td>
                            <td><?= $datos->Apellido ?></td>
                            <td><?= $datos->Edad ?></td>
                            <td><?= $datos->Mail ?></td>
                            <td><?= $datos->Pais ?></td>
                            <td><?= $datos->Ciudad ?></td>
                            <td>
                                <a href="update.php?id=<?= $datos->IdPersona ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-fancy"></i></a>
                                <a onclick="return eliminar()" href="crud.php?id=<?= $datos->IdPersona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
