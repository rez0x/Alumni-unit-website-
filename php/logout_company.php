<?php

    session_start();
    unset($_SESSION["loggedUserCompany"]);
    header('Location: ../Employers_Portal/login/login.php');

?>
