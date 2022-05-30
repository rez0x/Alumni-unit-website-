<?php

    session_start();
    unset($_SESSION["loggedAdmin"]);
    header('Location: ../admin_page/login/login.php');

?>