<?php

session_start();
if(!isset($_SESSION["loggedUser"])){
    header('Location: ../login/login.php');
}

?>




<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>بوابة الخريجين</title>
    
</head>

<body>


    <div id="header">
        <img id="test1"src="../imge/2.jpg" width="100%" height="180" > 
        
        <div id="logo">
            <img src="../imge/logo.png" width="300" height="300"  alt="logo"/>
            
            

            
        </div>
        <nav>
            <ul>
                <li><a  id="home" href="../../Alumni unit//index.html" target="_blank">الرئيسية</a></li>
                <li><a href="../../Employers_Portal/Home/index.php" target="_blank">بوابة جهات التوظيف</a></li>
                <li><a id="co_us" href="#">تواصل معانا</a></li>
                <li><a id="logout" href="../../php/logout_user.php" >تسجيل الخروج</a></li>

                <li><a id="admin-page" href="../../admin_page/Home/index.php" target="_blank">إدارة الوحدة </a></li>
                
            </ul>
        </nav> 

        </div>
    

    <h1 id="alumni_portal">بوابة الخريجين</h1>




    <div class="main">

    <div class="news_ticker"  id="news_ticker" hidden>

        <div class="class">

            <img src="../imge/msg172700796-523.jpg" width="150" height="150">
            <p> <span>خبر : </span> تم عقد حفل للمتفوقين 2020-2021</p>
            <br>
            <a href="#" id="link_high_achievers" onclick="return false"> اقرأ المزيد</a>

        </div>

        <div class="class">

            <img src="../imge/لقاء_للخريجين.png" width="150" height="150">
            <p> <span>خبر : </span> عقد لقاء ورشة ارشادية لخريجي الكلية </p>
            <br>
            <a href="#" id="link_workshop" onclick="return false"> اقرأ المزيد</a>

        </div>

        <div class="class">

            <img src="../imge/ملتقى_ذا_لاين.png" width="150" height="150">
            <p> <span>خبر : </span> عقد ملتقي ذا لاين للخريجين والخريجات<br> الأوائل دفعة (1441-1442هــ) </p>
            <br>
            <a href="#" id="link_the_line" onclick="return false"> اقرأ المزيد</a>
            
        </div>




    </div>

        <div id="main_box">


        <div id="high_achievers">

            <p> تم بحمد الله تعالى عقد حفل تكريم المتفوقين والمتفوقات 2020-2021
            <br>
            
            وتم في مسرح كلية الحاسب، والذي حضرة وكيل الجامعة الدكتور سعود النايف وعميد الكلية ووكلية الكلية د. شعيع العتيبي واعضاء من 
            هيئة التدريس بالكلية وحضر من شطر الطلاب عدد  50 طالب  ومن شطر الطالبات عدد 50 طالبة.
            </p>

        </div>



        <div id="workshop">

            <p>
                تم بحمد الله تعالى عقد ورشة ارشادية لخريجي الكلية

                <br>
                <br>

                بحضور سعادة عميد الكلية الدكتور جلوي الشدوخي, والمشرف العام على توظيف الخريجين الدكتور عبدالله البكر, 
                ووكيل الكلية للشؤون الأكاديمية الدكتور عبدالعزيز العيباء,ووكيلة الكلية الدكتورة شعيع العتيبي ورؤساء الأقسام وعدد 
                من أعضاء الهيئة التدريسية والطلبة الخريجين والمتوقع تخرجهم أقامت كلية علوم وهندسة الحاسب متمثلة بوحدة الخريجين لقاء وورشة ارشادية لخريجي الكلية

                <br>
                <br>

                افتتح اللقاء سعادة عميد كلية علوم وهندسة الحاسب الالي الدكتور جلوي الشدوخي بكلمة عبر فيها مدى اهتمام الكلية بالخريجين حيث 
                أوصى الخريجين بضرورة التواصل الفعال مع وحدة الخريجين والسعي على تطوير المهارات الشخصية والتأهيلية والوظيفية لديهم. 
                كما خاطب سعادة مدير وحدة الخريجين الدكتور أمجد قطيش الخريجين بكلمة قدم فيها نظرة شاملة على وحدة الخريجين في الكلية وتشمل
                التعريف بالوحدة, الرؤية, الرسالة, الأهداف, المهام, أهم الانجازات التي تم تحقيقيها في الوحدة, وأهم الأنشطة المتوقع تنفيذها خلال العام الأكاديمي الحالي, وطرق التواصل مع الوحدة.

                <br>
                <br>

                كما قدم سعادة وكيل الكلية للدراسات العليا والبحث العلمي الدكتور ياسر الحربي ورشة عمل للخريجين بعنوان "التوجهات الحديثة في مجال المعلوماتية والدراسات العليا" 
                حيث تطرق الى التعريف بأهم المجالات التقنية السائدة في العالم والتي يحتاجها سوق العمل وأبرز الشهادات الاحترافية وكيفية الحصول عليها لتطوير السيرة الذانية وزيادة فرص العمل,
                كما تم التطرق الى برامج الدراسات العليا المقدمة في الكلية وكيفية الالتحاق بها وشروطها.

                <br>
                <br>

                ولمساعدة الخريجين في كيفية الحصول على الوظيفة المناسبة, القت منسقة وحدة الخريجين في شطر الطالبات الأستاذة حلى الخصاونة ورشة عمل بعنوان 
                "الاستعداد الجيد للحصول على الوظيفة المناسبة" حيث تطرقت الى كيفية اعداد سيرة ذاتية احترافية مع ذكر اهم المواقع التي تساعد الخريج على اعداد سيرته الذاتية 
                احترافية وارشاد الخريجين على طرق البحث عن الوظائف من خلال مواقع التواصل الاجتماعي مثل اللينكدلن والتويتر وبيت.كوم, كما تطرقت الى كيفية اجتياز المقابلة الشخصية. 

            </p>


        </div>


        <div id="the_line">

            <p>
                تم بحمد الله تعالى عقد ملتقي ذا لاين للخريجين والخريجات الأوائل دفعة (1441-1442هــ)

                <br>
                <br>

                ملتقي ذا لاين للخريجين والخريجات الأوائل دفعة (1441-1442هــ) والمتفوقين والمتفوقات الأوائل للفصل الدراسي الثاني1441-1442هــ
                <br>
                تحت شعار ملتقي ذا لاين، أقامت كلية علوم وهندسة الحاسب الآلي صباح اليو الاربعاء الموافق 16فبراير حفل تكريم للخريجين والخريجات 
                الأوائل  دفعة (1441-1442هــ) والمتفوقين والمتفوقات الأوائل للفصل الدراسي الثاني1441-1442هــ، في مسرح الكلية الحاسب، 
                والذي حضرة وكيل الجامعة الدكتور سعود النايف وعميد الكلية ووكلية الكلية د. شعيع العتيبي واعضاء من هيئة التدريس بالكلية.

            </p>


        </div>

        



        <div  id="graduate" class="graduate_registration"  >

            <h1> الملف الشخصي  </h1>

    
            <form id="registration" action="../../php/update.php" method="POST"> 
                
            

            <?php

                include '../../php/config.php';

                $user_session = $_SESSION["loggedUser"];
                $view_data = "select * from alumni where username ='$user_session'";
                $result = mysqli_query($connection,$view_data);

                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){

                        ?>

                            <ul class="ul_reg">
                                    
                                    
                                    <!-- disabled  -->
                                
                                    <li> <label> اسم المستخدم : </label>
                                        <input id="user" type="text" name="user" value="<?php echo $user_session ?>" > 
                                    </li>

                                    <li> <label for="college"> الكلية :</label>
                                    <select  class="select_first" name="college">
                                        <option  selected  ><?php echo $row['college']; ?></option>
                                        <option value="كلية علـوم وهندسـة الحاسب اآللي"> كلية علـوم وهندسـة الحاسب اآللي</option>
                                    
                                    </select>
                                
                                    </li>

                                    <li> <label for="year_graduated">  عام التخرج :</label>
                                    <select class="select_first" name="year_graduated">
                                        <option  selected><?php echo $row['graduationYear']; ?></option>

                                        <option value="1439"> 1439</option>
                                        <option value="1440"> 1440</option>
                                        <option value="1441"> 1441</option>
                                        <option value="1442"> 1442</option>
                                        <option value="1443"> 1443</option>
                                        <option value="1444"> 1444</option>
                                        <option value="1445"> 1445</option>
                                        <option value="1446"> 1446</option>
                                        <option value="1447"> 1447</option>
                                        
                                    </select>
                                    </li>
                                    
                                    <li>   <label for="graduation_semester">  فصل التخرج :</label>
                                    <select class="select_first" name="graduation_semester" >
                                        <option  selected><?php echo $row['graduationSemester']; ?></option>

                                        <option value="الفصل الاول">  الفصل الاول</option>
                                        <option value="الفصل الثاني">  الفصل الثاني</option>
                                        <option value="الفصل الثالث">  الفصل الثالث</option>

                                    </select>
                                
                                    </li>

                                    <li><label for="supervisor">مشرف/<br>مشرفة الوحدة :</label>
                                    <input id="supervisor" type="text" name="supervisor" placeholder=" ادخل اسم مشرف / مشرفة الوحدة" required>

                                    </li>

                                    <li><label for="un_id">الرقم الجامعي :</label>
                                    <input id="un_id" type="text" name="un_id" value="<?php echo $row['UniversityID']; ?>" required>
                                    </li>

                                    <li><label for="id">السجل المدني :</label>
                                    <input id="id" type="number" name="id" value="<?php echo $row['NationalID']; ?>" required >
                                    </li>

                                    <li><label for="student_name">اسم الطالب :</label>
                                    <input id="student_name" type="text" name="student_name" value="<?php echo $row['Name']; ?>" required>
                                    </li>

                                    <li><label for="nationality">الجنسية :</label>
                                    <input id="nationality" type="text" name="nationality" value="<?php echo $row['Nationality']; ?>">
                                    </li>
                                
                                
                                    <li> <label for="gpa">المعدل : </label> 
                                    <input id="gpa" type="text" name="gpa"value="<?php echo $row['GPA']; ?>" required>
                                    </li>


                                    <li><label for="supervisor_name">اسم المدير/ة :</label>
                                        <input id="supervisor_name" type="text" name="supervisor_name"value="<?php echo $row['SupervisorName']; ?>" required>
                                    </li>

                                    <li><label for="so_media">التواصل الاجتماعي :</label>
                                        <input id="so_media" type="text" name="so_media" value="<?php echo $row['SocialMedia']; ?>" required>
                                    </li>

                                    <li><label for="se_work">لا يعمل ويبحث<br> عن عمل :</label>
                                        <input id="se_work" type="text" name="se_work" value="<?php echo $row['isLookingForAJob']; ?>" required>
                                    </li>

                                    <li><label for="other">أعمل أخرى :</label>
                                        <input id="other" type="text" name="other" value="<?php echo $row['OtherWorks']; ?>" required>
                                    </li>

                                    <li><label for="fa_phone">أرقام تواصل<br> قريب/صديق :</label>
                                        <input id="fa_phone" type="text" name="fa_phone" value="<?php echo $row['FamilyContactNo']; ?>" required>
                                    </li>

                                    




                                </ul>



                                <ul class="ul_reg_2">

                                    <li><label> كلمة المرور : </label> 
                                    <input id="password" type="text" name="password" value="<?php echo $row['password']; ?>" required>
                                    </li>

                                    
                                

                                    <li> 
                                        <label for="grade">  التقدير :</label>
                                        <select id="grade" name="grade" >

                                            <option selected><?php echo $row['Grade']; ?></option>

                                            <option value="ممتاز مرتفع"> ممتاز مرتفع</option>
                                            <option value="ممتاز"> ممتاز </option>
                                            <option value="جيد جدا مرتفع"> جيد جدا مرتفع</option>
                                            <option value="جيد جدا"> جيد جدا </option>
                                            <option value="جيد مرتفع"> جيد مرتفع</option>
                                            <option value="جيد"> جيد </option>
                                            <option value="مقبول مرتفع"> مقبول مرتفع</option>
                                            <option value="مقبول"> مقبول </option> 

                                        </select>
                                    
                                    </li>

                                    <li><label for="email">البريد الالكتروني :</label>
                                        <input id="email" type="email" name="email" value="<?php echo $row['Email']; ?>" required>
                                    </li> 

                                    <li><label for="phone_number">رقم الجوال :</label>
                                        <input id="phone_number" type="text" name="phone_number" value="<?php echo $row['MobileNo']; ?>" required>
                                    </li> 


                                    <li> 
                                        <label for="major">  التخصص :</label>
                                        <select id="major" name="major" >
                                            <option selected><?php echo $row['Major']; ?></option>

                                            <option value="علوم الحاسب"> علوم الحاسب</option>
                                            <option value="هندسة الحاسب"> هندسة الحاسب  </option>
                                            <option value="هندسة البرمجيات"> هندسة البرمجيات </option>
                                            

                                        </select>
                                    
                                    </li>

                                    <li> 
                                        <label for="honours">  مرتبة الشرف (ان وجد) :</label>
                                        <select id="honours" name="honours" >
                                            <option  selected><?php echo $row['HonorGrade']; ?></option>

                                            <option value="مرتبة الشرف الأولى"> مرتبة الشرف الأولى</option>
                                            <option value="مرتبة الشرف الثانية"> مرتبة الشرف الثانية  </option>
                                            <option value="مرتبة الشرف الثالثة"> مرتبة الشرف الثالثة </option>

                                        </select>
                                    
                                    </li>

                                    <li><label for="employer">جهة التوظيف :</label>
                                        <input id="employer" type="text" name="employer" value="<?php echo $row['Employer']; ?>" required>
                                        </li>
                                            

                                        <li><label for="emp_phone">جوال جهة التوظيف :</label>
                                            <input id="emp_phone" type="text" name="emp_phone" value="<?php echo $row['CompanyContactNo']; ?>" required>
                                        </li>

                                        <li> <label  for="emp_email">البريد الالكتروني <br>لجهة التوظيف </label>
                                            <input id="emp_email" type="text" name="emp_email" value="<?php echo $row['EmployerEmail']; ?>" required>
                                        </li>


                                    <li> 
                                        <label for="se_emp">  موظف في القطاع :</label>
                                        <select id="se_emp" name="se_emp" >
                                            <option  selected><?php echo $row['WorkSector']; ?></option>

                                            <option value="العام"> العام</option>
                                            <option value="الخاص"> الخاص  </option>
                                            
                                            
                                            

                                        </select>
                                    
                                    </li>


                                    <li><label for="date_employment">تاريخ التوظيف :</label>
                                        <input type="date" id="date_employment" name="date_employment" value="<?php echo $row['EmploymentDate']; ?>">
                                    </li>   
                                    
                                    
                                    <li><label for="department">الإدارة / القسم :</label>
                                        <input id="department" type="text" name="department" value="<?php echo $row['Department']; ?>" required>
                                    </li>


                                    <li><label for="emp_address">عنوان جهة التوظيف :</label>
                                        <input id="emp_address" type="text" name="emp_address" value="<?php echo $row['EmployerAddress']; ?>" required>
                                    </li>

                                    

                                

                                </ul>

                                <input id="submit" type="submit"  name="submit" value="حفظ المعلومات ">

                        <?php
                            
                        }
                    }
                }



            ?> 
    
        
    
            </form>

    
    
    
    
    
    
        </div>



            <div id="slider" >

                <div id="slides">
                <a href="https://www.taqat.sa/" target="_blank"> <img src="../imge/taqat.png"> </a>
                <a href="https://doroob.sa/" target="_blank"> <img src="../imge/doroob.png"> </a>
                </div>


            </div>



            <div id="survey_box" class="survey_box" hidden>

                <form class="survey" action="../../php/survey_graduates.php" method="POST">

                    <h2>تعبئة استبانة الخريجين و المتوقع تخرجهم عن الجامعة والكلية </h2>
                    <br>
                    <br>
                    <br>

                    <h3> ملاحظة : <br><span><br> 1 - غير موافق بشدة <br> 2 - غير موافق <br> 3- موافق <br> 4 - موافق لحد ما <br> 5- موافق بشدة</span></h3>
                    <br>
                    <br>
                    <br>

                    <ol>
                        
                    <li>  تم اطلاع الطالب /الطالبات على رسالة الجامعة والكلية التي تسير بشكل جيد مع طبيعة أنشطتها
                        <select name="q1">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>.تم اطلاع الطالب /الطالبات على رؤية وأهداف الجامعة والكلية 
                        <select name="q2">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li> .يدرك الطالب /الطالبة سياسات الجامعة والكلية
                        <select name="q3">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>تقدم الجامعة والكلية معلومات حول البرامج والمقررات الدراسية والخدمات للطلاب قبل التسجيل 
                        <select name="q4">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>تقدم الجامعة والكلية االرشاد اأكاديمي قبل التسجيل
                        <select name="q5">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>تأخذ الجامعة والكلية ملاحظات الخريجين بشأن الخطط المستقبلية للجامعة
                        <select name="q6">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>برامج التدريب الميداني (التعاوني) للطالب /الطالبات أو التدريب الداخلي متوافقة مع التخصص
                        الرئيسي للطالب /الطالبة
                        <select name="q7">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    
                
                        <li>أكدت الجامعة والكلية على أهمية التعلم المستمر مدى الحياة
                            <select name="q8">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>ساعدتني الجامعة والكلية في تطوير المعرفة والمهارات الالزمة لمهنتي
                            <select name="q9">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>أعدتني الجامعة والكلية أخالقيا لسوق العمل
                            <select name="q10">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>زودت الجامعة والكلية جميع الطالب /الطالبات بدليل يحتوي على جميع قواعد السلوك التي تحدد حقوق
                        الطالب /الطالبات وواجباتهم
                        <select name="q11">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                        </li>
                        <li>لا يخضع الطالب /الطالبات المشتكون للعقاب أو الظلم أو التمييز ضدهم بسبب شكواهم
                            <select name="q12">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>يتم تقييم الطالب /الطالبة من قبل الكادر الأكاديمي بانصاف
                            <select name="q13">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>تم تقييم الطالب /الطالبة من قبل أعضاء هيئة التدريس بانصاف
                            <select name="q14">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>يسمح أعضاء هيئة التدريس للطالب /الطالبات لمناقشة أداء اختبارهم
                            <select name="q15">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>كانت الأرشادات متوفرة لي (اذا لزم الأمر)
                            <select name="q16">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>يبدي أعضاء هيئة التدريس حماسهم واهتمامهم بما يقومون بتدريسه
                            <select name="q17">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>الموظفون من الإدارات المختلفة متعاونون وقادرون على تقديم الخدمات المتعلقة بالطالب /الطالبات
                            <select name="q18">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>يتمتع حرم الجامعة والكلية بيئة صحية ونظيفة وامنه
                            <select name="q19">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>التسهيلات المناسبة كانت متوفرة للألنشطة اللاصفية (الثقافية و الاجتماعية والرياضية)
                            <select name="q20">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>معامل الحاسب حديثة ومناسبة للطالب /الطالبات
                            <select name="q21">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>القاعات الدراسية كانت مناسبة للتعلم
                            <select name="q22">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>الخدمات الصحية المتاحة تلبي احتياجاتي
                            <select name="q23">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>المطاعم المناسبة متوفرة
                            <select name="q24">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>التسهيلات لذوي الاحتياجات الخاصة متوفرة
                            <select name="q25">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>قمت بمشاركة الكلية في أنشطتها البحثية
                            <select name="q26">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>الجامعة والكلية قدمتا الموارد اللزمة للبحث
                            <select name="q27">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>تقيم الجامعة والكلية علاقات إيجابية مع قطاع الأعمال والمؤسسات التعليمية الأخرى
                            <select name="q28">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>يوجد بالمؤسسة مجلس استشاري يضم أعضاء من الصناعة لتقديم التغذية الراجعة لبرامج الجامعة
                        وخدماتها
                        <select name="q29">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select></li>
                        <li>الخدمات المجتمعية التي تقدمها الجامعة والكلية مرضية
                            <select name="q30">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>بشكل عام , ماهو تقييمك العام للجامعة والكلية 
                            <select name="q31">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        

                    </ol>

                    <br>
                    <br>
                    <br>
                    
                    <input id="submit-survey" type="submit" name="submit" value="ارسال">
    
                </form>
        
            </div>



        <div class="cv" id="cv">

            <h1> تعبئة السيرة الذاتية    </h1>
            

            <form id="cv-form" action="../../php/cv.php" method="post">   

                <ul >

                    <br>
                    <br>

                    <h2> المعلومات الشخصية  </h2>

                    <br>
                    <br>

                    <li> <label > الاسم الأول : </label>
                        <input  id="" type="text" name="fir_name"  required >
                    </li>

                    <li> <label  >  اسم الأب   : </label> 
                        <input  id="" type="text" name="fat_name"  required>
                    </li>

                    <li> <label  > اسم الجد : </label>
                        <input id="" type="text" name="gfat_name" >
                    </li>

                    <li> <label  > اسم العائلة : </label>
                        <input id="" type="text" name="L_name" >
                    </li>

                    <li> <label  > الجنس : </label>
                        <select id="sex" name="sex" >
                        <option hidden selected></option>
        
                        <option value="العام"> ذكر</option>
                        <option value="الخاص"> أنثى  </option>
                        
                        
                        </select>
                    </li>

                    <li> <label  > تاريخ الولادة : </label>
                        <input id="" type="date" name="date_birth" >
                    </li>

                    <li> <label  > مكان الولادة : </label>
                        <input id="" type="text" name="place_birth" >
                    </li>

                    <li> <label  > الجنسية  : </label>
                        <input id="" type="text" name="nationality" >
                    </li>

                    <li> <label  > رقم الهوية  : </label>
                        <input id="" type="text" name="id" >
                    </li>

                    <li> <label  > رقم الجوال   : </label>
                        <input id="" type="text" name="num_phone" >
                    </li>

                    <li> <label  > البريد الالكتروني    : </label>
                        <input id="" type="email" name="email" >
                    </li>

                    <li> <label  > الحالة الاجتماعية   : </label>
                        <select id="social_status" name="social_status" >
                            <option hidden selected></option>
            
                            <option value="أعزب / عزباء"> أعزب / عزباء</option>
                            <option value="متزوج / متزوجة"> متزوج / متزوجة  </option>

                        </select>
                    </li>

                    <li> <label  > هل انت موظف ؟   : </label>
                        <select id="are_emp" name="are_emp"  >
                        
                            <option hidden selected></option>
            
                            <option value="نعم"> نعم</option>
                            <option value="لا"> لا  </option>
                            
                            
                        </select>
                    </li>

                    <li> <label  > اللغات   : </label>

                        <select id="languages" name="languages"  multiple>

                            <optgroup>

                                <option hidden selected></option>
            
                                <option value="العربية"> العربية </option>
                                <option value="الانجليزية"> الانجليزية  </option>

                            </optgroup>
                            
                            
                        </select>



                    </li>


                    <br>
                    <br>

                    <h2> المؤهل العلمي   </h2>
                    
                    <br>
                    <br>
                    
                    <li> <label  > المؤهل   : </label>
                        <select id="qualification" name="qualification"  >
                        
                            <option hidden selected></option>
            
                            <option value="بكالوريوس"> بكالوريوس</option>
                                                
                        </select>

                    </li>

                    <li> <label  > التخصص   : </label>
                        <select id="major" name="major"  >
                        
                            <option hidden selected></option>
            
                            <option value="علوم الحاسب"> علوم الحاسب</option>
                            <option value="هندسة البرمجيات"> هندسة البرمجيات </option>
                            <option value="هندسة الحاسب"> هندسة الحاسب</option>
                                                
                        </select>

                    </li>


                    <li> <label  > سنة التخرج   : </label>
                        <select id="graduation_year" name="graduation_year"  >
                        
                            <option hidden selected></option>
            
                            <option value="2019 "> 2019 </option>
                            <option value="2020 "> 2020 </option>
                            <option value="2021 "> 2021 </option>
                            <option value="2022 "> 2022 </option>
                            <option value="2023 "> 2023 </option>
                            <option value="2024 "> 2024 </option>
                            <option value="2025 "> 2025 </option>
                            <option value="2026 "> 2026 </option>
                            
                                                
                        </select>

                    </li>


                    <li> <label  >  المعدل الأكاديمي   : </label>
                        <input id="gpa" type="text" name="gpa" >
                    </li>

                    <br>
                    <br>

                    <h2> الخبرات : </h2>

                    <br>
                    <br>

                    <li> 
                        <textarea id="experience" name="experience"  cols="40" rows="10"></textarea>
                    </li>


                    <br>
                    <br>

                    <h2> المهارات : </h2>

                    <br>
                    <br>

                    <li> 
                        <textarea id="skills" name="skills"  cols="40" rows="10"></textarea>
                    </li>

                    <br>
                    <br>

                    <h2> الدورات التدربية : </h2>

                    <br>
                    <br>

                    <li> 
                        <textarea id="courses" name="courses"  cols="40" rows="10"></textarea>
                    </li>
            

                


                </ul>

                <input id="submit-cv" type="submit" name="submit-cv" value="حفظ ">

            </form>


        </div>


        
        <div id="div_search_job" >
            <h1 id="available_jobs"> الوظائف المتاحة </h1>

            <?php

            include '../../php/config.php';
            $sql = "SELECT * FROM jobopportunity where 	deadlinedate >= now()";
            $result = $connection->query($sql);
            while($row = $result->fetch_assoc()){
                echo"<div id='search_job'>
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
        


    </div>


        <div>
    
            <ul id="right_bar">
    
                <li><a id="rb1" class="w1" href="#" onclick="return false"> الملف الشخصي </a> </li>
                <li><a id="rb2" class="w1" href="#" onclick="return false">  الاخبار و الإعلانات  </a> </li>
                <li><a id="rb4" class="w1" href="#" onclick="return false"> استبانة الخريجين عن <br>الجامعة والكلية </a> </li>
                <li><a id="rb5" class="w1" href="#" onclick="return false"> السيرة الذاتية  </a> </li>
                <li><a id="rb6" class="w1" href="#" onclick="return false"> البحث عن وظيفة </a> </li>
                
                
    
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
                            <li><a class="footer_link" href="../../Employers_Portal/Home/index.php" target="_blank"> بوابة جهات التوظيف </a></li>
                            <li><a class="footer_link" href="https://www.taqat.sa/" target="_blank"> منصة طاقات </a></li>
                            <li><a class="footer_link" href="https://doroob.sa/"target="_blank"> منصة دروب</a></li>
                            
    
    
                        </ul>
                    </div>
    
                </div>
    
                <div id="left_box">
                    <h2> تواصل معنا </h2>
                    <div class="content">
                        <form action="../../php/contact.php" method="POST">
                            
                            <div class="name">
                                <div class="text">الاسم : </div>
                                <input type="text" required name="name-contact">
                            </div>
    
                            <div class="email">
                                <div class="text">الايميل : </div>
                                <input type="email" required name="email-contact">
    
                            </div>
    
                            <div class="message">
                                <div class="text">الرسالة : </div>
                                <textarea rows="5" cols="30" required name="message-contact"></textarea>
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