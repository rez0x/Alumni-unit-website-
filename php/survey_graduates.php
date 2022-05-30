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
$id = $row["NationalID"];


$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$q16 = $_POST['q16'];
$q17 = $_POST['q17'];
$q18 = $_POST['q18'];
$q19 = $_POST['q19'];
$q20 = $_POST['q20'];
$q21 = $_POST['q21'];
$q22 = $_POST['q22'];
$q23 = $_POST['q23'];
$q24 = $_POST['q24'];
$q25 = $_POST['q25'];
$q26 = $_POST['q26'];
$q27 = $_POST['q27'];
$q28 = $_POST['q28'];
$q29 = $_POST['q29'];
$q30 = $_POST['q30'];
$q31 = $_POST['q31'];

$average = ($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12+$q13+$q14+$q15+$q16+$q17+$q18+$q19+$q20+$q21+$q22+$q23+$q24+$q25+$q26+$q27+$q28+$q29+$q30+$q31)/31;







$stmt = $connection->prepare("insert into survey_graduates (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25,q26,q27,q28,q29,q30,q31,average,NationalID) values('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10',
'$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26',
'$q27','$q28','$q29','$q30','$q31','$average','$id');");


$stmt->execute();


header('Location: ../Alumni_Portal/Home/index.php');





?>