


<?php

include '../../php/config.php';


if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from admin where username='$username' and password='$password'";
    $result = mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);
    if($count == 1 ){
        session_start();
        $_SESSION["loggedAdmin"] = $username;
        header('Location: ../Home/index.php');
        
    }
    else{
        $error_message= "اسم المستخدم او كلمة المرور غير صحيحه";
    }


}






?>





<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title> تسجيل دخول إدارة الوحدة  </title>
    
</head>
<body>



    <div class="login" id="login">

        <h1>  إدارة الوحدة <br> تسجيل الدخول  </h1>
        <form method="post">

        <div class="text-fil">
            <input type="text" name="username" required>
            <span></span>
            <label > اسم المستخدم </label>
        </div>

        <div class="text-fil">
            <input type="password" name="password" required>
            <span></span>
            <label > كلمة المرور  </label>
        </div>

        <input id="submit" type="submit" name="login" value="تسجيل الدخول">

        <br>
        <p id="error-message"> <?php if(isset($_POST['login'])) echo $error_message ?></p>


        </form>

    </div>


</body>