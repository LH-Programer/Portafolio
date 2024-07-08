<?php 

    session_start();
    
    session_destroy();
    echo '<script type="text/javascript">
    alert("The session has been successfully closed");
    window.location.href="/Portafolio/index.html";
    </script>';

?>