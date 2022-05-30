<?php

include 'config.php';

$username = $_POST['user'];
$password = $_POST['password'];
$college = $_POST['college'];
$exp_year_graduation = $_POST['exp_year_graduation'];
$exp_semester_graduation = $_POST['exp_semester_graduation'];
$un_id = $_POST['un_id'];
$id = $_POST['id'];
$student_name = $_POST['student_name'];
$nationality = $_POST['nationality'];
$major = $_POST['major'];
$gpa = $_POST['gpa'];
$grade = $_POST['grade'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$registered_hours = $_POST['registered_hours'];
$registered_courses = $_POST['registered_courses'];
$remaining_hours = $_POST['remaining_hours'];
$remaining_courses = $_POST['remaining_courses'];
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






$stmt = $connection->prepare("insert into expectedgraduate values('$username','$password','$college','$exp_year_graduation','$exp_semester_graduation','$un_id','$id','$student_name','$nationality',
'$major','$gpa','$grade','$phone_number','$email','$registered_hours','$registered_courses','$remaining_hours','$remaining_courses','$honours','$se_emp','$date_employment','$employer','$department',
'$emp_address','$emp_phone','$emp_email','$supervisor_name','$other','$se_work','$so_media','$fa_phone');");
// $stmt->bind_param("sss",$username,$email,$password);

$stmt->execute();

header('Location: ../Alumni_Portal/login/login.php');


?>