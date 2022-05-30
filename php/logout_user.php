<?php
    
    
    session_start();
    unset($_SESSION["loggedUser"]);
    header('Location: ../Alumni_Portal/login/login.php');


?>
