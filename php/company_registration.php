<?php

include 'config.php';


$username = $_POST['username'];
$password = $_POST['password'];
$company_name= $_POST['company_name'];
$address = $_POST['address'];
$company_field = $_POST['company_field'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];







$stmt = $connection->prepare("insert into company values('$username','$password','$company_name','$address',
'$company_field','$contact_no','$email');");


$stmt->execute();


header('Location: ../Employers_Portal/login/login.php');



?>