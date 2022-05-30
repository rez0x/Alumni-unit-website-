<?php


include 'config.php';



$jobnumber = $_POST['jobnumber'];
$jobname= $_POST['jobname'];
$jobdescription = $_POST['jobdescription'];
$jobrequirements = $_POST['jobrequirements'];
$jobskillsrequirements = $_POST['jobskillsrequirements'];
$contactnumber = $_POST['contactnumber'];
$email = $_POST['email'];
$requireddocuments = $_POST['requireddocuments'];
$deadlinedate = $_POST['deadlinedate'];




if(isset($_POST['submit-jobopportunity'])){



    $query = "INSERT INTO jobopportunity (jobnumber,jobname,jobdescription,jobrequirements,jobskillsrequirements,contactnumber,email,requireddocuments,deadlinedate) VALUES ('$jobnumber','$jobname','$jobdescription','$jobrequirements','$jobskillsrequirements','$contactnumber','$email','$requireddocuments','$deadlinedate')";


    $result = mysqli_query($connection,$query);




}
header('Location: ../Employers_Portal/Home');
?>