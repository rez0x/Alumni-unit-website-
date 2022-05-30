<?php


include 'config.php';


session_start();
$companyUser_session = $_SESSION["loggedUserCompany"];
$view_data = "select * from company where username ='$companyUser_session'";
$result = mysqli_query($connection,$view_data);
if(!$result){
    echo " حدث خطأ";
}


$username = $_POST['username'];
$password = $_POST['password'];
$company_name= $_POST['company_name'];
$address = $_POST['address'];
$company_field = $_POST['company_field'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];




if(isset($_POST['submit-profile'])){



    $query = "update company set username='$username' , password='$password' , companyName='$company_name' , 
    address='$address' , companyField='$company_field' , contactNo='$contact_no' , email='$email' where username ='$companyUser_session'";


    $result = mysqli_query($connection,$query);




}

header('Location: ../Employers_Portal/Home/index.php');

?>