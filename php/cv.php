<?php

include 'config.php';

session_start();
$user_session = $_SESSION["loggedUser"];
$view_data = "select * from alumni where username ='$user_session'";
$result = mysqli_query($connection,$view_data);
if(!$result){
    echo " حدث خطأ";
}

$row = mysqli_fetch_array($result);
$id_session = $row["NationalID"];


$fir_name = $_POST['fir_name'];
$fat_name = $_POST['fat_name'];
$gfat_name= $_POST['gfat_name'];
$L_name= $_POST['L_name'];
$sex = $_POST['sex'];
$date_birth = $_POST['date_birth'];
$place_birth = $_POST['place_birth'];
$nationality = $_POST['nationality'];
$id = $_POST['id'];
$num_phone = $_POST['num_phone'];
$email = $_POST['email'];
$social_status = $_POST['social_status'];
$are_emp = $_POST['are_emp'];
$languages = $_POST['languages'];
$qualification = $_POST['qualification'];
$major = $_POST['major'];
$graduation_year = $_POST['graduation_year'];
$gpa = $_POST['gpa'];
$experience = $_POST['experience'];
$skills = $_POST['skills'];
$courses = $_POST['courses'];








$stmt = $connection->prepare("insert into cv values('$fir_name','$fat_name','$gfat_name','$L_name',
'$sex','$date_birth','$place_birth','$nationality','$id','$num_phone','$email','$social_status','$are_emp',
'$languages','$qualification','$major','$graduation_year','$gpa','$experience','$skills','$courses','$id_session');");


$stmt->execute();


header('Location: ../Alumni_Portal/Home/index.php');



?>