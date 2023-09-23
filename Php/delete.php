<?php  

    if (!empty($_GET["id"])) {
        $id=$_GET["id"];
        $sql=$conn->query("DELETE FROM personas where IdPersona=$id");
        if ($sql==1) {
            echo '<div class="alert alert-success">Delete has been successfully</div>';
        } else {
            echo '<div class="alert alert-danger>Error with the delete</div>';
        }
        
    }


?>