<?php


include 'config.php';

session_start();
$user_session = $_SESSION["loggedUser"];
$view_data = "select * from alumni where username ='$user_session'";
$result = mysqli_query($connection,$view_data);
if(!$result){
    echo " حدث خطأ";
}



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




if(isset($_POST['submit'])){



    $query = "update alumni set username='$username' , password='$password' , college='$college' , graduationYear='$year_graduated' , graduationSemester='$graduation_semester' , UniversityID='$un_id' , NationalID='$id' , Name='$student_name' ,
    Nationality='$nationality' , GPA='$gpa' , Grade='$grade' , Email='$email' , MobileNo='$phone_number' , Major='$major' , HonorGrade='$honours' ,
    WorkSector='$se_emp' , EmploymentDate='$date_employment' , Employer='$employer' , Department='$department' , 
    EmployerAddress='$emp_address' , CompanyContactNo='$emp_phone' , EmployerEmail='$emp_email' , SupervisorName='$supervisor_name' , OtherWorks='$other' , isLookingForAJob='$se_work' , SocialMedia='$so_media' , FamilyContactNo='$fa_phone'
    where username ='$user_session'";

    // $query = "update alumni set username='$username' , password='$password' , UniversityID='$un_id' where username='$user_session'";

    $result = mysqli_query($connection,$query);



}

header('Location: ../Alumni_Portal/Home/index.php');


?>