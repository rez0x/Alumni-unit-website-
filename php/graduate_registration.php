<?php

include 'config.php';

$username = $_POST['user'];
$password = $_POST['password'];
$college = $_POST['college'];
$year_graduated = $_POST['year_graduated'];
$graduation_semester = $_POST['graduation_semester'];
$un_id = $_POST['un_id'];
$id = $_POST['id'];
$student_name = $_POST['student_name'];
$nationality = $_POST['nationality'];
$gpa = $_POST['gpa'];
$grade = $_POST['grade'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$major = $_POST['major'];
$honours = $_POST['honours'];
$se_emp = $_POST['se_emp'];
$date_employment = $_POST['date_employment'];
$employer = $_POST['employer'];
$department = $_POST['department'];
$emp_address = $_POST['emp_address'];
$emp_phone = $_POST['emp_phone'];
$emp_email = $_POST['emp_email'];
$supervisor_name = $_POST['supervisor_name'];
$other = $_POST['other'];
$se_work = $_POST['se_work'];
$so_media = $_POST['so_media'];
$fa_phone = $_POST['fa_phone'];





$stmt = $connection->prepare("insert into alumni values('$username','$password','$college','$year_graduated','$graduation_semester','$un_id','$id','$student_name','$nationality',
'$gpa','$grade','$email','$phone_number','$major','$honours','$se_emp','$date_employment','$employer','$department',
'$emp_address','$emp_phone','$emp_email','$supervisor_name','$other','$se_work','$so_media','$fa_phone');");
// $stmt->bind_param("sss",$username,$email,$password);

$stmt->execute();


header('Location: ../Alumni_Portal/login/login.php');


?>