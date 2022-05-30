<?php

session_start();
if(!isset($_SESSION["loggedAdmin"])){
    header('Location: ../login/login.php');
}

?>




<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> إدارة الوحدة </title>
    
</head>

<body>



    <div id="header">
        <img id="test1"src="../imge/2.jpg" width="100%" height="180" > 
        
        <div id="logo">
            <img src="../imge/logo.png" width="300" height="300"  alt="logo"/>
            
            

            
        </div>
        <nav>
            <ul>
                <li><a  id="home" href="../../Alumni unit/index.html" target="_blank">الرئيسية</a></li>
                <li><a href="../../Alumni_Portal/Home/index.php" target="_blank">بوابة الخريجين</a></li>
                <li><a href="../../Employers_Portal/Home/index.php" target="_blank">بوابة جهات التوظيف</a></li>
                <li><a id="co_us" href="#">تواصل معانا</a></li>
                <li><a id="logout" href="../../php/logout_admin.php">تسجيل الخروج</a></li>
                
            </ul>
        </nav> 

        </div>
    

    <h1 id="admin_text">إدارة الوحدة </h1>




    <div class="main">



        <div id="main_box">


            <div class="search_alumni" id="search_alumni">
                <h1> إدارة الخريجين </h1>

                <table class="table-data" id="table_alumni">

                    <br>
                    <br>
                    
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

                        include '../../php/config.php';

                        $sql = "select * from alumni";
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


            </div>



            <div class="employers" id="employers">
                <h1> إدارة جهات التوظيف </h1>


                <table class="table-data" id="table_employers">

                    <br>
                    <br>
                    
                    <thead>
                        <tr>
                            <th>اسم الشركة </th>
                            <th> عنوان الشركة </th>
                            <th> مجال الشركة </th>
                            <th> رقم التواصل </th>
                            <th> الايميل</th>

                        </tr> 
                    </thead>

                    <tbody>

                        <?php

                        include '../../php/config.php';

                        $sql = "select * from company";
                        $result = $connection->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo"<tr>
                            <td>" . $row["companyName"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["companyField"] . "</td>
                            <td>" . $row["contactNo"] . "</td>
                            <td>" . $row["email"] . "</td>
                            </tr>";

                        }
                        
                        ?>
                    </tbody>
                </table>



            </div>



            <div class="job_opportunity" id="job_opportunity">

                <h1> إدارة الفرص الوظيفية  </h1>


                <?php

                include '../../php/config.php';
                $sql = "SELECT * FROM jobopportunity";
                $result = $connection->query($sql);
                while($row = $result->fetch_assoc()){
                    echo"<div id='job'>
                    <p> <span> تاريخ نشر الوظيفة : </span> " . $row["dateannounced"] . "</p>
                    <p> <span> رقم الوظيفة : </span> " . $row["jobnumber"] . "</p>
                    <p> <span> اسم الوظيفة : </span> " . $row["jobname"] . "</p>
                    <p> <span> المسمى الوظيفي  : </span> " . $row["jobdescription"] . "</p>
                    <p> <span> متطلبات الوظيفة : </span> " . $row["jobrequirements"] . "</p>
                    <p> <span> المهارات المطلوبة  : </span> " . $row["jobskillsrequirements"] . "</p>
                    <p> <span> رقم التواصل  : </span> " . $row["contactnumber"] . "</p>
                    <p> <span> الايميل  : </span> " . $row["email"] . "</p>
                    <p> <span> المستندات المطلوبة  : </span> " . $row["requireddocuments"] . "</p>
                    <p> <span> نهاية التقديم  : </span> " . $row["deadlinedate"] . "</p>
                    </div>";

                }





                ?>






            </div>


            <div class="surveys" id="surveys">

                <button id="btn1" class="btn"> استبانات بوابة الخريجين </button>
                <button id="btn2" class="btn">  استبانات بوابة جهات التوظيف   </button> 

                


                <div id="survey_reality_programs" >


                </div>


                <div id="survey_emp_graduate" >


                </div>




            </div>

            <div id="survey_graduates">
                    <ol>
                        <li> تم اطلاع الطالب /الطالبات على رسالة الجامعة والكلية التي تسير بشكل جيد مع طبيعة أنشطتها </li>

                        <li>.تم اطلاع الطالب /الطالبات على رؤية وأهداف الجامعة والكلية </li>

                        <li> .يدرك الطالب /الطالبة سياسات الجامعة والكلية </li>
                                
                        <li>تقدم الجامعة والكلية معلومات حول البرامج والمقررات الدراسية والخدمات للطلاب قبل التسجيل </li>
                                            
                        <li>تقدم الجامعة والكلية االرشاد اأكاديمي قبل التسجيل </li>
                                        
                        <li>تأخذ الجامعة والكلية ملاحظات الخريجين بشأن الخطط المستقبلية للجامعة </li>
                                            
                        <li>برامج التدريب الميداني (التعاوني) للطالب /الطالبات أو التدريب الداخلي متوافقة مع التخصص الرئيسي للطالب /الطالبة </li>
                                
                        <li>أكدت الجامعة والكلية على أهمية التعلم المستمر مدى الحياة </li>
                                            
                        <li>ساعدتني الجامعة والكلية في تطوير المعرفة والمهارات الالزمة لمهنتي </li>
                                            
                        <li>أعدتني الجامعة والكلية أخالقيا لسوق العمل </li>
                                            
                        <li>زودت الجامعة والكلية جميع الطالب /الطالبات بدليل يحتوي على جميع قواعد السلوك التي تحدد حقوق الطالب /الطالبات وواجباتهم </li>
                                        
                        <li>لا يخضع الطالب /الطالبات المشتكون للعقاب أو الظلم أو التمييز ضدهم بسبب شكواهم </li>
                                            
                        <li>يتم تقييم الطالب /الطالبة من قبل الكادر الأكاديمي بانصاف </li>
                                            
                        <li>تم تقييم الطالب /الطالبة من قبل أعضاء هيئة التدريس بانصاف </li>
                                            
                        <li>يسمح أعضاء هيئة التدريس للطالب /الطالبات لمناقشة أداء اختبارهم </li>
                                            
                        <li>كانت الأرشادات متوفرة لي (اذا لزم الأمر) </li>
                                            
                        <li>يبدي أعضاء هيئة التدريس حماسهم واهتمامهم بما يقومون بتدريسه </li>
                                            
                        <li>الموظفون من الإدارات المختلفة متعاونون وقادرون على تقديم الخدمات المتعلقة بالطالب /الطالبات </li>
                                            
                        <li>يتمتع حرم الجامعة والكلية بيئة صحية ونظيفة وامنه </li>
                                    
                        <li>التسهيلات المناسبة كانت متوفرة للألنشطة اللاصفية (الثقافية و الاجتماعية والرياضية) </li>

                        <li>معامل الحاسب حديثة ومناسبة للطالب /الطالبات </li>
                                
                        <li>القاعات الدراسية كانت مناسبة للتعلم </li>
                                    
                        <li>الخدمات الصحية المتاحة تلبي احتياجاتي </li>
                                
                        <li>المطاعم المناسبة متوفرة </li>
                                    
                        <li>التسهيلات لذوي الاحتياجات الخاصة متوفرة </li>
                                
                        <li>قمت بمشاركة الكلية في أنشطتها البحثية </li>
                                    
                        <li>الجامعة والكلية قدمتا الموارد اللزمة للبحث </li>
                                    
                        <li>تقيم الجامعة والكلية علاقات إيجابية مع قطاع الأعمال والمؤسسات التعليمية الأخرى </li>
                                    
                        <li>يوجد بالمؤسسة مجلس استشاري يضم أعضاء من الصناعة لتقديم التغذية الراجعة لبرامج الجامعة وخدماتها </li>
                                    
                        <li>الخدمات المجتمعية التي تقدمها الجامعة والكلية مرضية </li>
                                
                        <li>بشكل عام , ماهو تقييمك العام للجامعة والكلية  </li>
                    </ol>

                    <br>
                    <br>
                    <br>
                    <br>

                    <table class="table-data" id="table_employers">

                        <br>
                        <br>
                        
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th> q1  </th>
                                <th> q2  </th>
                                <th> q3  </th>
                                <th> q4  </th>
                                <th> q5  </th>
                                <th> q6  </th>
                                <th> q7  </th>
                                <th> q8  </th>
                                <th> q9  </th>
                                <th> q10  </th>
                                <th> q11  </th>
                                <th> q12  </th>
                                <th> q13  </th>
                                <th> q14  </th>
                                <th> q15  </th>
                                <th> q16  </th>
                                <th> q17  </th>
                                <th> q18  </th>
                                <th> q19  </th>
                                <th> q20 </th>
                                <th> q21  </th>
                                <th> q22  </th>
                                <th> q23  </th>
                                <th> q24  </th>
                                <th> q25  </th>
                                <th> q26  </th>
                                <th> q27  </th>
                                <th> q28  </th>
                                <th> q29  </th>
                                <th> q30  </th>
                                <th> q31  </th>
                                

                            </tr> 
                        </thead>

                        <tbody>

                            <?php

                            include '../../php/config.php';

                            $sql = "select * from survey_graduates";
                            $result = $connection->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo"<tr>
                                
                                <td>" . $row["NationalID"] . "</td>
                                <td>" . $row["q1"] . "</td>
                                <td>" . $row["q2"] . "</td>
                                <td>" . $row["q3"] . "</td>
                                <td>" . $row["q4"] . "</td>
                                <td>" . $row["q5"] . "</td>
                                <td>" . $row["q6"] . "</td>
                                <td>" . $row["q7"] . "</td>
                                <td>" . $row["q8"] . "</td>
                                <td>" . $row["q9"] . "</td>
                                <td>" . $row["q10"] . "</td>
                                <td>" . $row["q11"] . "</td>
                                <td>" . $row["q12"] . "</td>
                                <td>" . $row["q13"] . "</td>
                                <td>" . $row["q14"] . "</td>
                                <td>" . $row["q15"] . "</td>
                                <td>" . $row["q16"] . "</td>
                                <td>" . $row["q17"] . "</td>
                                <td>" . $row["q18"] . "</td>
                                <td>" . $row["q19"] . "</td>
                                <td>" . $row["q20"] . "</td>
                                <td>" . $row["q21"] . "</td>
                                <td>" . $row["q22"] . "</td>
                                <td>" . $row["q23"] . "</td>
                                <td>" . $row["q24"] . "</td>
                                <td>" . $row["q25"] . "</td>
                                <td>" . $row["q26"] . "</td>
                                <td>" . $row["q27"] . "</td>
                                <td>" . $row["q28"] . "</td>
                                <td>" . $row["q29"] . "</td>
                                <td>" . $row["q30"] . "</td>
                                <td>" . $row["q31"] . "</td>
                                </tr>";

                            }

                            
                            ?>

                        </tbody>
                    </table>

            </div>


            <div id="survey_employers">
                
                <h2>  إستبانة تقييم الخريجين </h2>
                <ol>
                    <li> لديهم المعرفة والمهارات الكافية للقيام بالعمل المطلوب </li>

            
                    <li> لديهم القدرة على تطبيق المعارف والعلوم </li>
                                        

                    <li>لديهم القدرة على التحليل المنطقي للنتائج وتقويمه </li>
                                    
                    <li> لديهم القدرة على العمل بفاعلية ضمن فريق العمل </li>
                                    
                    <li>يمتلكون القدرة على بحث وتحليل البيانات ذات العلاقة بالعمل </li>
                                

                    <li> مهاراتهم في التحدث والكتابة باللغة الإنجليزية مناسبة لطبيعة عملهم </li>
                                    
                                        
                    <li> لديهم القدرة على تحديد المشكلات واقتراح الحلول المناسبة </li>

                    <li> لديهم القدرة على العمل باستقلالية </li>


                    <li> يمتلكون القدرة على التنظيم وتحديد الأولويات </li>
                    
                    <li> لديهم ثقة بالنفس والاعتماد على الذات </li>

                    <li> لديهم مهارات قيادية </li>
                    
                    <li> لديهم القدرة على التكيف بسرعة مع بيئة العمل </li>

                    <li> ينجزون أعمالهم في الوقت المحدد </li>

                    <li> يمتلكون مهارات التعامل مع الاخرين </li>

                    <li> لديهم أفكار إبداعية لتطوير العمل </li>

                    <li> يتقبلون النقد البناء بطريقة إيجابية </li>

                    <li> يحرصون على االلتزام بأخالقيات المهنة </li>

                    <li> لديهم الرغبة في تنمية معارفهم ومهاراتهم  </li>
                    
                    <li> يظهرون اهتماما بالمستجدات الثقافية </li>
                    
                    <li> أحرص على استقطاب خريجي جامعة حائل  </li>
                    
                    <li> جهة عملي مستعدة لتقديم فرص تدريب لطالب جامعة حائل أثناء دراستهم الجامعية </li>
                </ol> 

                <table class="table-data" id="survey_emp_graduate">

                        <br>
                        <br>
                        
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th> q1  </th>
                                <th> q2  </th>
                                <th> q3  </th>
                                <th> q4  </th>
                                <th> q5  </th>
                                <th> q6  </th>
                                <th> q7  </th>
                                <th> q8  </th>
                                <th> q9  </th>
                                <th> q10  </th>
                                <th> q11  </th>
                                <th> q12  </th>
                                <th> q13  </th>
                                <th> q14  </th>
                                <th> q15  </th>
                                <th> q16  </th>
                                <th> q17  </th>
                                <th> q18  </th>
                                <th> q19  </th>
                                <th> q20 </th>
                                <th> q21  </th>
                                

                            </tr> 
                        </thead>

                        <tbody>

                            <?php

                            include '../../php/config.php';

                            $sql = "select * from survey_emp_graduate";
                            $result = $connection->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo"<tr>
                                
                                <td>" . $row["companyName"] . "</td>
                                <td>" . $row["q1"] . "</td>
                                <td>" . $row["q2"] . "</td>
                                <td>" . $row["q3"] . "</td>
                                <td>" . $row["q4"] . "</td>
                                <td>" . $row["q5"] . "</td>
                                <td>" . $row["q6"] . "</td>
                                <td>" . $row["q7"] . "</td>
                                <td>" . $row["q8"] . "</td>
                                <td>" . $row["q9"] . "</td>
                                <td>" . $row["q10"] . "</td>
                                <td>" . $row["q11"] . "</td>
                                <td>" . $row["q12"] . "</td>
                                <td>" . $row["q13"] . "</td>
                                <td>" . $row["q14"] . "</td>
                                <td>" . $row["q15"] . "</td>
                                <td>" . $row["q16"] . "</td>
                                <td>" . $row["q17"] . "</td>
                                <td>" . $row["q18"] . "</td>
                                <td>" . $row["q19"] . "</td>
                                <td>" . $row["q20"] . "</td>
                                <td>" . $row["q21"] . "</td>
                                
                                </tr>";

                            }

                            
                            ?>

                        </tbody>
                </table>



                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <h2>  إستبانة تقييم عن واقع البرامج </h2>
                <ol>
                        
                    <li> مستوى رضاك عن خريجي الجامعة </li>
                    
                    <li> تتعامل القيادات الجامعية بشفافية ومرونة معكم عند طلب أي استشارات أو معلومات أو خدمات  </li>
                        
                    <li>تتوافق طبيعة البرامج التي تقدمها الجامعة مع احتياجاتكم المهنية والوظيفية </li>
                    
                    <li>  .تتناسب المهارات العملية التي يكتسبها خريجي البرامج المختلفة مع متطلباتكم المهنية والوظيفية الحالية 
                                        والمستقبلية   
                    </li>                   
                        
                    <li>تتفق المعارف التي اكتسبها الخريج من البرامج مع متطلبات التوظيف لديكم  </li>
                        
                    <li>تشارك في التدريب الميداني لبعض طلبة وخريجي البرامج التي تطرحها الجامعة </li>
                        
                    <li> تتيح الجامعة الفرصة لكم لتعديل واقتراح بعض البرامج الأكاديمية في ضوء متطلبات سوق العمل
                                        الحالية والمستقبلية التي ترونها
                    </li>
                                
                    <li> تستطلع الجامعة رأيكم في المستوى المعرفي والمهاري لخريجي برامج الجامعة المنتسبين لديكم </li>
                    
                    <li> توجد شراكة بينكم وبين الجامعة في بعض المجالات المرتبطة بتقديم البرامج الأكاديمية ذات الصلة
                                            بمجالكم المهني 
                    </li>
                            
                    <li> تستفيد الجامعة من أرائكم وخبراتكم في تطوير خططها وبرامجها الأكاديمية ذات الصلة بكم </li>
                    
                    <li> يتم تعيين خريجي البرامج الأكاديمية التي تطرحها الجامعة بناءا على امتالكه المهارات الكاملة لأداء
                                            العمل لديكم بطريقة مرضية
                    </li>

                    <li> يمتلك خريجي البرامج الأكاديمية التي تطرحها الجامعة بقواعد الأمن والسلامة في العمل </li>
                        
                    <li> تتوافق رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم مع المعتقدات والقيم الإسلامية </li>
                    
                    <li>تتوافق رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم مع المتطلبات الثقافية والاقتصادية
                                            للمملكة العربية السعودية
                    </li>
                        
                    <li> تحدد رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم اتجاهات تطوير البرامج التي
                                            تتناسب وطبيعة متطلبات سوق العمل السعودي الحالية والمستقبلية
                    </li>
                        
                    <li> تتميز صياغة رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم بوضوح </li>
                        
                        <li> تم استطالع أرائكم حول مدى مناسبة رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم </li>
                    
                        <li> يتم تعريفكم بأي تغييرات تطرأ على رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم أولا
                                            بأول  </li>
                        
                        <li> تتيح الجامعة الفرصة لكم للمشاركة في الفرق الاستشارية للبرامج الأكاديمية ذات الصلة بطبيعة عملكم  </li>

                        <li> يأخذ القائمين على البرامج الأكاديمية للجامعة أرائكم ومقترحاتكم بشأن تطوير خططها وبرامجها
                                            الأكاديمية ذات الصلة بكم في موضع التقييم والمشاورة
                    </li>
                
                        <li> تتيح الجامعة الفرصة لكم لمراجعة وتقييم البرامج الأكاديمية ذات الصلة بطبيعة عملكم في ضوء ما
                                            ترونه مناسبا
                    </li>
                        
                                        

                </ol>


                <table class="table-data" id="survey_emp_graduate">

                        <br>
                        <br>
                        
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th> q1  </th>
                                <th> q2  </th>
                                <th> q3  </th>
                                <th> q4  </th>
                                <th> q5  </th>
                                <th> q6  </th>
                                <th> q7  </th>
                                <th> q8  </th>
                                <th> q9  </th>
                                <th> q10  </th>
                                <th> q11  </th>
                                <th> q12  </th>
                                <th> q13  </th>
                                <th> q14  </th>
                                <th> q15  </th>
                                <th> q16  </th>
                                <th> q17  </th>
                                <th> q18  </th>
                                <th> q19  </th>
                                <th> q20 </th>
                                <th> q21  </th>
                                

                            </tr> 
                        </thead>

                        <tbody>

                            <?php

                            include '../../php/config.php';

                            $sql = "select * from survey_reality_programs";
                            $result = $connection->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo"<tr>
                                
                                <td>" . $row["companyName"] . "</td>
                                <td>" . $row["q1"] . "</td>
                                <td>" . $row["q2"] . "</td>
                                <td>" . $row["q3"] . "</td>
                                <td>" . $row["q4"] . "</td>
                                <td>" . $row["q5"] . "</td>
                                <td>" . $row["q6"] . "</td>
                                <td>" . $row["q7"] . "</td>
                                <td>" . $row["q8"] . "</td>
                                <td>" . $row["q9"] . "</td>
                                <td>" . $row["q10"] . "</td>
                                <td>" . $row["q11"] . "</td>
                                <td>" . $row["q12"] . "</td>
                                <td>" . $row["q13"] . "</td>
                                <td>" . $row["q14"] . "</td>
                                <td>" . $row["q15"] . "</td>
                                <td>" . $row["q16"] . "</td>
                                <td>" . $row["q17"] . "</td>
                                <td>" . $row["q18"] . "</td>
                                <td>" . $row["q19"] . "</td>
                                <td>" . $row["q20"] . "</td>
                                <td>" . $row["q21"] . "</td>
                                
                                </tr>";

                            }

                            
                            ?>

                        </tbody>
                </table>










            </div>






            <div id="connect_us">
                <p>وحدة الخريجين – مكتب رقم S238<br>
                    مبنى كلية علوم وهندسة الحاسب<br>
                    جامعة حائل<br>
                    حائل، المملكة العربية السعودية<br>
                    <br>
                    معلومات التواصل
                    <br>
                    <br>
                    د. أمجد فيصل قطيش – مدير الوحدة ومنسق شطر الطلاب<br>
                    الهاتف: 0165358200       التحويلة: 1140<br>
                    البريد الالكتروني: am.qtaish@uoh.edu.sa<br> 
                    واتس اب: 00962791097383<br>
                    التويتر: <br>
                    <br>
                    أ‌.	حلا الخصاونة – منسقة شطر الطالبات<br>
                    الهاتف: 0165358200       التحويلة: 9249<br>
                    البريد الإلكتروني:    h.alkhasoneh@uoh.edu.sa<br>
                    </p>
            </div>




        


        </div>


        <div>
    
            <ul id="right_bar">
    
                <li><a id="rb1" class="w1" href="#" onclick="return false"> إدارة الخريجين </a> </li>
                <li><a id="rb2" class="w1" href="#" onclick="return false"> إدارة جهات التوظيف </a> </li>
                <li><a id="rb3" class="w1" href="#" onclick="return false"> إدارة الفرص الوظيفية </a> </li>
                <li><a id="rb4" class="w1" href="#" onclick="return false"> إدارة الإستبيانات </a> </li>
                
                
                
    
            </ul>
    
    
    
        </div>




    
    
    </div>
    
        <div class="footer" >
    
            <div class="container">
                <div id="right_box">
                    <h2> عن الوحدة </h2>
                    <div class="content">
                        <p>تسعى الوحدة إلى "خدمة الخريجين والتفاعل مع سوق العمل" من خلال دعم التواصل الدائم والفعال مع خريجي الكلية وأرباب العمل واستحداث اليات لتطوير القدرات التنافسية لدى الخريجين وتطوير الشراكة مع سوق العمل (جهات التوظيف) لتوفير فرص العمل المناسبة لهم وتقديم الدراسات اللازمة والخاصة بخريجي الكلية.</p>
                    </div>
                </div>
    
                <div id="center_box">
                    <h2> روابط مهمة </h2>
                    <div class="content">
                        <ul>
                            <li><a class="footer_link" href="../../Alumni unit/index.html" target="_blank"> وحدة الخريجين</a></li>
                            <li><a class="footer_link" href="../../Alumni_Portal/Home/index.php" target="_blank"> بوابة الخريجين  </a></li>
                            <li><a class="footer_link" href="https://www.taqat.sa/" target="_blank"> منصة طاقات </a></li>
                            <li><a class="footer_link" href="https://doroob.sa/"target="_blank"> منصة دروب</a></li>
                            
    
    
                        </ul>
                    </div>
    
                </div>
    
                <div id="left_box">
                    <h2> تواصل معنا </h2>
                    <div class="content">
                        <form action="#">
                            
                            <div class="name">
                                <div class="text">الاسم : </div>
                                <input type="text" required>
                            </div>
    
                            <div class="email">
                                <div class="text">الايميل : </div>
                                <input type="email" required>
    
                            </div>
    
                            <div class="message">
                                <div class="text">الرسالة : </div>
                                <textarea rows="5" cols="30" required></textarea>
                                <div class="btn">
                                    <button  type="submit"> ارسال </button>
                                </div>
    
                            </div>    
                        </form>
                    </div>
                </div>
    
            </div>        
    
        </div>
        


<script src="Home.js"></script>     
</body>
</html>