<?php

include 'config.php';


$name = $_POST['name-contact'];
$email = $_POST['email-contact'];
$message = $_POST['message-contact'];








$stmt = $connection->prepare("insert into contact values('$name','$email','$message');");


$stmt->execute();


echo " <h1> تم ارسال الرد ... </h1>"


?>