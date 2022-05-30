<?php

session_start();
if(!isset($_SESSION["loggedUserCompany"])){
    header('Location: ../login/login.php');
}

?>




<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>بوابة جهات التوظيف </title>
    
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
                <li><a id="co_us" href="#">تواصل معانا</a></li>
                <li><a id="logout" href="../../php/logout_company.php">تسجيل الخروج</a></li>
                <li><a id="admin-page" href="../../admin_page/Home/index.php" target="_blank">إدارة الوحدة </a></li>
                
            </ul>
        </nav> 

        </div>
    

    <h1 id="alumni_portal">بوابة جهات التوظيف</h1>




    <div class="main">

        <div class="news_ticker" hidden>

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
                هيئة التدريس بالكلية وحضر من شطر الطلاب عدد  50 طالب  ومن شطر الطالبات عدد 50 طالبة.</p>
            
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



        <div class="profile" id="profile">

            <h1>  الملف الشخصي   </h1>

            <form   form id="profile-form" action="../../php/update_company.php" method="POST">   


            <?php

                include '../../php/config.php';

                $companyUser_session = $_SESSION["loggedUserCompany"];
                $view_data = "select * from company where username ='$companyUser_session'";
                $result = mysqli_query($connection,$view_data);

                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){

                            ?>

                                <ul>



                                    <li> <label for="username"> اسم المستخدم : </label>
                                        <input class="form_input" id="username" type="text" name="username"   value="<?php echo $companyUser_session ?>" required>
                                    </li>

                                    <li> <label class="form_label" > كلمة المرور : </label> 
                                        <input class="form_input" id="password" type="password" name="password"  required value="<?php echo $row['password']; ?>">
                                    </li>

                                    <li> <label class="form_label" > اسم الشركة : </label>
                                        <input class="form_input" id="company_name" type="text" name="company_name"  required value="<?php echo $row['companyName']; ?>">
                                    </li>

                                    <li> <label class="form_label" > عنوان الشركة  : </label>
                                        <input class="form_input" id="address" type="text" name="address"  required value="<?php echo $row['address']; ?>">
                                    </li>

                                    <li> <label class="form_label" > مجال العمل  : </label>
                                        <input class="form_input" id="company_field" type="text" name="company_field"  required value="<?php echo $row['companyField']; ?>" >
                                    </li>

                                    <li> <label class="form_label" > رقم الجوال   : </label>
                                        <input class="form_input" id="contact_no" type="text" name="contact_no"  required value="<?php echo $row['contactNo']; ?>" >
                                    </li>
        
                                    <li><label class="form_label" > البريد الالكتروني : </label> 
                                        <input class="form_input" id="email" type="email" name="email"  required value="<?php echo $row['email']; ?>" >
                                    </li> 




                                </ul>



                            <?php
                            
                        }
                    }
                }



            ?> 

            
            <input id="submit-profile" type="submit" name="submit-profile" value="حفظ ">
            

            </form>






        </div>


        


            <div id="survey_1" class="survey_box" hidden>

                <form  class="survey" action="../../php/survey_reality_programs.php" method="POST">

                    <h2> تعبئة إستبانة تقييم عن واقع البرامج </h2>
                    <br>
                    <br>
                    <br>

                    <h3> ملاحظة : <br><span><br> 1 - غير موافق بشدة <br> 2 - غير موافق <br> 3- موافق <br> 4 - موافق لحد ما <br> 5- موافق بشدة</span></h3>
                    <br>
                    <br>
                    <br>

        
                    <ol>
                        
                    <li> مستوى رضاك عن خريجي الجامعة
                        <select name="q1">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li> تتعامل القيادات الجامعية بشفافية ومرونة معكم عند طلب أي استشارات أو معلومات أو خدمات 
                        <select name="q2">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>تتوافق طبيعة البرامج التي تقدمها الجامعة مع احتياجاتكم المهنية والوظيفية
                        <select name="q3">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>  .تتناسب المهارات العملية التي يكتسبها خريجي البرامج المختلفة مع متطلباتكم المهنية والوظيفية الحالية
                        والمستقبلية                      
                        <select name="q4">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>تتفق المعارف التي اكتسبها الخريج من البرامج مع متطلبات التوظيف لديكم 
                        <select name="q5">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>تشارك في التدريب الميداني لبعض طلبة وخريجي البرامج التي تطرحها الجامعة
                        <select name="q6">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li> تتيح الجامعة الفرصة لكم لتعديل واقتراح بعض البرامج الأكاديمية في ضوء متطلبات سوق العمل
                        الحالية والمستقبلية التي ترونها
                        <select name="q7">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    
                
                        <li> تستطلع الجامعة رأيكم في المستوى المعرفي والمهاري لخريجي برامج الجامعة المنتسبين لديكم
                            <select name="q8">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> توجد شراكة بينكم وبين الجامعة في بعض المجالات المرتبطة بتقديم البرامج الأكاديمية ذات الصلة
                            بمجالكم المهني 
                            <select name="q9">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> تستفيد الجامعة من أرائكم وخبراتكم في تطوير خططها وبرامجها الأكاديمية ذات الصلة بكم
                            <select name="q10">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يتم تعيين خريجي البرامج الأكاديمية التي تطرحها الجامعة بناءا على امتالكه المهارات الكاملة لأداء
                            العمل لديكم بطريقة مرضية
                        <select name="q11">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                        </select>
                        </li>
                        <li> يمتلك خريجي البرامج الأكاديمية التي تطرحها الجامعة بقواعد الأمن والسلامة في العمل
                            <select name="q12">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> تتوافق رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم مع المعتقدات والقيم الإسلامية
                            <select name="q13">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li>تتوافق رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم مع المتطلبات الثقافية والاقتصادية
                            للمملكة العربية السعودية
                            <select name="q14">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> تحدد رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم اتجاهات تطوير البرامج التي
                            تتناسب وطبيعة متطلبات سوق العمل السعودي الحالية والمستقبلية
                            <select name="q15">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> تتميز صياغة رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم بوضوح
                            <select name="q16">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> تم استطالع أرائكم حول مدى مناسبة رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم
                            <select name="q17">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يتم تعريفكم بأي تغييرات تطرأ على رسائل البرامج الأكاديمية للجامعة ذات الصلة بطبيعة عملكم أولا
                            بأول 
                            <select name="q18">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> تتيح الجامعة الفرصة لكم للمشاركة في الفرق الاستشارية للبرامج الأكاديمية ذات الصلة بطبيعة عملكم 
                            <select name="q19">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يأخذ القائمين على البرامج الأكاديمية للجامعة أرائكم ومقترحاتكم بشأن تطوير خططها وبرامجها
                            الأكاديمية ذات الصلة بكم في موضع التقييم والمشاورة
                            <select name="q20">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> تتيح الجامعة الفرصة لكم لمراجعة وتقييم البرامج الأكاديمية ذات الصلة بطبيعة عملكم في ضوء ما
                            ترونه مناسبا
                            <select name="q21">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        
                        

                    </ol>


                
                <input id="submit-survey" type="submit" name="submit" value="ارسال">
                </form>

        
            </div>

            <div id="survey_2" class="survey_box" hidden>

                <form  class="survey" action="../../php/survey_emp_graduate.php" method="POST">

                    <h2> تعبئةإستبانة تقييم الخريجين </h2>
                    <br>
                    <br>
                    <br>

                    <h3> ملاحظة : <br><span><br> 1 - غير موافق بشدة <br> 2 - غير موافق <br> 3- موافق <br> 4 - موافق لحد ما <br> 5- موافق بشدة</span></h3>
                    <br>
                    <br>
                    <br>

    
                    <ol>
                        
                    <li> لديهم المعرفة والمهارات الكافية للقيام بالعمل المطلوب 
                        <select name="q1">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li> يستخدمون التكنولوجيا بكفاءة 
                        <select name="q2">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li> لديهم القدرة على تطبيق المعارف والعلوم
                        <select name="q3">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>لديهم القدرة على التحليل المنطقي للنتائج وتقويمه
                        <select name="q4">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li> لديهم القدرة على العمل بفاعلية ضمن فريق العمل
                        <select name="q5">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li>يمتلكون القدرة على بحث وتحليل البيانات ذات العلاقة بالعمل
                        <select name="q6">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    <li> مهاراتهم في التحدث والكتابة باللغة الإنجليزية مناسبة لطبيعة عملهم
                        <select name="q7">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                    </li>
                    
                
                        <li> لديهم القدرة على تحديد المشكلات واقتراح الحلول المناسبة
                            <select name="q8">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> لديهم القدرة على العمل باستقلالية
                            <select name="q9">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يمتلكون القدرة على التنظيم وتحديد الأولويات
                            <select name="q10">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> لديهم ثقة بالنفس والاعتماد على الذات
                            <select name="q11">
                            <option hidden selected></option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            </select>
                        </li>
                        <li> لديهم مهارات قيادية
                            <select name="q12">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> لديهم القدرة على التكيف بسرعة مع بيئة العمل
                            <select name="q13">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> ينجزون أعمالهم في الوقت المحدد
                            <select name="q14">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يمتلكون مهارات التعامل مع الاخرين
                            <select name="q15">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> لديهم أفكار إبداعية لتطوير العمل
                            <select name="q16">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يتقبلون النقد البناء بطريقة إيجابية
                            <select name="q17">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يحرصون على االلتزام بأخالقيات المهنة
                            <select name="q18">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> لديهم الرغبة في تنمية معارفهم ومهاراتهم 
                            <select name="q19">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> يظهرون اهتماما بالمستجدات الثقافية
                            <select name="q20">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> أحرص على استقطاب خريجي جامعة حائل 
                            <select name="q21">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        <li> جهة عملي مستعدة لتقديم فرص تدريب لطالب جامعة حائل أثناء دراستهم الجامعية
                            <select name="q22">
                                <option hidden selected></option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                                </select>
                        </li>
                        
                        

                    </ol>


            
                    <input id="submit-survey" type="submit" name="submit" value="ارسال">
                </form>
            </div>
            
            

            <div class="search_alumni" id="search_alumni">


                <button id="btn1" class="btn">حسب عام التخرج </button>
                <button id="btn2" class="btn">حسب التخصص   </button> 

            </div>

            <div id="search_year_graduated">


                <form  action="../../php/aa.php" method="POST" id="form_select_year_graduated">
                    <label for="select_year_graduated">  عام التخرج :</label>
                    <select  class="select_year_graduated" name="s" >

                    <option value="1439"> 1439</option>
                    <option value="1440"> 1440</option>
                    <option value="1441"> 1441</option>
                    <option value="1442"> 1442</option>
                    <option value="1443"> 1443</option>
                    <option value="1444"> 1444</option>

                    </select>
                    
                    <br>
                    <br>
                    <br>
                    <input type="hidden" name="selected_text" id="selected_text" value="" />
                    <input id="submit_select_year_graduated" type="submit" name="submit_select_year_graduated" value=" عرض " >
                
                </form>
        

                <!-- <table class="table_year_graduated" id="table_year_graduated" hidden>
                
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
                        
                        $sql = "select * from alumni where graduationYear ='1439'";
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
                </table> -->



                

            </div>

            <div id="search_major_graduated">


                <form  action="../../php/searchMajorGr.php" method="POST" id="form_select_major_graduated">
                    <label for="major">  التخصص :</label>
                    <select id="major" name="select_major_graduated" >
                        <option hidden selected></option>
        
                        <option value="علوم الحاسب"> علوم الحاسب</option>
                        <option value="هندسة الحاسب"> هندسة الحاسب  </option>
                        <option value="هندسة البرمجيات"> هندسة البرمجيات </option>
                        
        
                    </select>

                    <br>
                    <br>
                    <br>

                    <input id="submit_select_major_graduated" type="submit" name="submit_select_major_graduated" value=" عرض " >
                
                </form>


                <!-- <table class="table_major_graduated" id="table_major_graduated">
                
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

                        $sql = "select * from alumni where graduationYear ='1439'";
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
                </table> -->



                

            </div>


        



            <div class="job_opportunity" id="job_opportunity">
                    
                <h1>الاعلان عن وظيفة</h1>
                <form id="job_opportunityform" action="../../php/jobopportunity.php" method="post"> 
                    <ul>
                        <!-- <li> <label for="dateannounced"> تاريخ الاعلان عن الوظيفة : </label>
                        <input class="form_input" id="dateannounced" type="date" name="dateannonced"  required value="<?php echo $companydateannounced ?>"> -->
                        <li> <label class="form_label" > رقم الوظيفة : </label> 
                            <input class="form_input" id="jobnumber" type="text" name="jobnumber"  required>
                        </li>

                        <br>
                        <br>

                        <li> <label class="form_label" > مسمى الوظيفة : </label> 
                            <input class="form_input" id="jobname" type="text" name="jobname"  required>
                        </li>

                        <br>
                        <br>

                        <li> <label class="form_label" > وصف الوظيفة : </label>  
                            <textarea id="jobdescription" name="jobdescription"  cols="30" rows="10" required></textarea>
                        </li>

                        <br>
                        <br>

                        <li> <label class="form_label" > متطلبات الوظيفة : </label> 
                            <textarea id="jobrequirements" name="jobrequirements"  cols="30" rows="10" required></textarea>
                        </li>

                        <br>
                        <br>

                        <li> <label class="form_label" > المهارات الاضافية الوظيفة : </label> 
                            <textarea id="jobskillsrequirements" name="jobskillsrequirements"  cols="30" rows="10" required></textarea>
                        </li>

                        <br>
                        <br>

                        <li> <label class="form_label" > رقم التواصل : </label> 
                            <input class="form_input" id="contactnumber" type="text" name="contactnumber"  required>
                        </li>

                        <li> <label class="form_label" > البريد الالكتروني : </label> 
                            <input class="form_input" id="email" type="text" name="email"  required>
                        </li>

                        <br>
                        <br>

                        <li> <label class="form_label" > الاوراق المطلوبة : </label> 
                            <textarea id="requireddocuments" name="requireddocuments"  cols="30" rows="10" required></textarea>
                        </li>

                        <br>
                        <br>

                        <li> <label class="form_label" >تاريخ نهاية التقديم : </label> 
                            <input class="form_input" id="deadlinedate" type="date" name="deadlinedate"  required>
                        </li>

                        
                    </ul>
                    <input id="submit-jobopportunity" type="submit" name="submit-jobopportunity" value="نشر الوظيفة ">
                </form>
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
    
                <li><a id="rb1" class="w1" href="#" onclick="return false"> الملف الشخصي  </a> </li>
                <li><a id="rb3" class="w1" href="#" onclick="return false">إستبانة تقييم عن واقع البرامج</a> </li>
                <li><a id="rb4" class="w1" href="#" onclick="return false">إستبانة تقييم الخريجين</a> </li>
                <li><a id="rb5" class="w1" href="#" onclick="return false">البحث عن خريجين</a> </li>
                <li><a id="rb6" class="w1" href="#" onclick="return false"> الاعلان عن وظيفة  </a> </li>
                
                
                
    
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