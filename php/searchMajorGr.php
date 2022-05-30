<?php

include 'config.php';             
        if(isset($_POST['submit_select_major_graduated'])){
            $value = $_POST['select_major_graduated']; // 

        }





?>


<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Employers_Portal/Home/style.css">
    <title>بوابة جهات التوظيف </title>
    
</head>

<body>


<table class="table_major_graduated" id="table_major_graduated">
                
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الرقم الجامعي </th>
                            <th>رقم الهوية </th>
                            <th>الكلية</th>
                            <th>التخصص</th>
                            <th>عام التخرج</th>
                            <th>فصل التخرج </th>
                            <th>المعدل</th>
                            <th>رقم الجوال </th>
                            <th>الايميل</th>
                            <th>الجنسية</th>
                        </tr> 
                    </thead>

                    <tbody>

                        <?php


                        $sql = "select * from alumni where Major ='$value'";
                        $result = $connection->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo"<tr>
                            <td>" . $row["Name"] . "</td>
                            <td>" . $row["UniversityID"] . "</td>
                            <td>" . $row["NationalID"] . "</td>
                            <td>" . $row["college"] . "</td>
                            <td>" . $row["Major"] . "</td>
                            <td>" . $row["graduationYear"] . "</td>
                            <td>" . $row["graduationSemester"] . "</td>
                            <td>" . $row["GPA"] . "</td>
                            <td>" . $row["MobileNo"] . "</td>
                            <td>" . $row["Email"] . "</td>
                            <td>" . $row["Nationality"] . "</td>
                            </tr>";

                        }
                        
                        ?>
                    </tbody>
                </table>
    
</body>



