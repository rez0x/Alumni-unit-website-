-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2022 at 11:54 AM
-- Server version: 8.0.28
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumniunit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `graduationYear` varchar(255) DEFAULT NULL,
  `graduationSemester` varchar(255) DEFAULT NULL,
  `UniversityID` varchar(255) DEFAULT NULL,
  `NationalID` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `GPA` varchar(255) DEFAULT NULL,
  `Grade` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(255) DEFAULT NULL,
  `Major` varchar(255) DEFAULT NULL,
  `HonorGrade` varchar(255) DEFAULT NULL,
  `WorkSector` varchar(255) DEFAULT NULL,
  `EmploymentDate` varchar(255) DEFAULT NULL,
  `Employer` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `EmployerAddress` varchar(255) DEFAULT NULL,
  `CompanyContactNo` varchar(255) DEFAULT NULL,
  `EmployerEmail` varchar(255) DEFAULT NULL,
  `SupervisorName` varchar(255) DEFAULT NULL,
  `OtherWorks` varchar(255) DEFAULT NULL,
  `isLookingForAJob` varchar(255) DEFAULT NULL,
  `SocialMedia` varchar(255) DEFAULT NULL,
  `FamilyContactNo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`username`, `password`, `college`, `graduationYear`, `graduationSemester`, `UniversityID`, `NationalID`, `Name`, `Nationality`, `GPA`, `Grade`, `Email`, `MobileNo`, `Major`, `HonorGrade`, `WorkSector`, `EmploymentDate`, `Employer`, `Department`, `EmployerAddress`, `CompanyContactNo`, `EmployerEmail`, `SupervisorName`, `OtherWorks`, `isLookingForAJob`, `SocialMedia`, `FamilyContactNo`) VALUES
('xx', '123', 'كلية علـوم وهندسـة الحاسب الألي', '1444', 'الفصل الاول', '20170330', '111', 'انس اسماعيل ', 'سعودي', '3.8', 'ممتاز مرتفع', 'z@gmail.com', '0552938533', 'هندسة البرمجيات', 'مرتبة الشرف الأولى', 'العام', '2022-05-18', 'stc', 'network dep ', 'hail', '055305839', 'stc@hotmail.com', 'امجد', 'لايوجد', 'لايوجد', 'hh@', '0552985935'),
('nawaf', '123', 'كلية علـوم وهندسـة الحاسب اآللي', '1441', 'الفصل الاول', 's201705111', '1122233', 'نواف خميس الشمري', 'سعودي', '3.7', 'ممتاز مرتفع', 'a@gmail.com', '0553051520', 'علوم الحاسب', 'مرتبة الشرف الأولى', 'العام', '2022-05-19', 'زين', 'لايوجد', 'لايوجد', '0553051522', 'yyy@gm.com', 'fahad', 'لايوجد', 'نعم', 'm688@', 'لايوجد'),
('zzz', '1234', 'كلية علـوم وهندسـة الحاسب الألي', '1439', 'الفصل الاول', '202828', '12334566', 'ملحان البصيص', 'سعودي', '3.9', 'ممتاز', 'dd@d.com', '055646654', 'علوم الحاسب', 'مرتبة الشرف الأولى', 'العام', '2022-05-18', 'stc', 'لايوجد', 'لايوجد', '052287854', 'dd@d.com', 'nawaf', 'لايوجد', 'نعم', 'ccc@', 'لايوجد');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `companyName` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `companyField` varchar(255) DEFAULT NULL,
  `contactNo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`username`, `password`, `companyName`, `address`, `companyField`, `contactNo`, `email`) VALUES
('stc', '123', 'stc', 'hail', 'programming', '0559939333', 'stc@gmail.com'),
('zain', '123', 'zain', 'hail', 'Networking', '052222333', 'jobs@zain.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('', '', ''),
('نواف الشمري', 'a@gmail.com', ' السلام عليكم ........'),
('انس اسماعيل', 'anas@hotmail.com', 'مشكلة في التحديث .... يرجى الحل'),
('ملحان البصيص', 'mal@yahoo.com', 'تعديل معلومات الوظيفه رقم 2');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `fir_name` varchar(255) DEFAULT NULL,
  `fat_name` varchar(255) DEFAULT NULL,
  `gfat_name` varchar(255) DEFAULT NULL,
  `L_name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `place_birth` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `id` varchar(255) DEFAULT NULL,
  `num_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `social_status` varchar(255) DEFAULT NULL,
  `are_emp` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `graduation_year` varchar(255) DEFAULT NULL,
  `gpa` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `NationalID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`fir_name`, `fat_name`, `gfat_name`, `L_name`, `sex`, `date_birth`, `place_birth`, `nationality`, `id`, `num_phone`, `email`, `social_status`, `are_emp`, `languages`, `qualification`, `major`, `graduation_year`, `gpa`, `experience`, `skills`, `courses`, `NationalID`) VALUES
('nawaf', 'khmais', 'khmais', 'alshammari', 'العام', '2022-05-18', 'hail', 'سعودي', '123434', '055345768', 'a@gmail.com', 'أعزب / عزباء', 'لا', 'الانجليزية', 'بكالوريوس', 'علوم الحاسب', '2023 ', '3,9', 'jfjfkfkfkfkfkfkf\r\nhgfhgfhfgjhgfj\r\nhjhgjhgjghjghj\r\nghj\r\ngfhj\r\nghj', 'programming\r\nnetworking\r\n', 'bb4r\r\nfdfd5 \r\ngfg55\r\nff555\r\n', '12334566');

-- --------------------------------------------------------

--
-- Table structure for table `expectedgraduate`
--

CREATE TABLE `expectedgraduate` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `yearExpectedGraduate` varchar(255) DEFAULT NULL,
  `semesterExpectedGraduate` varchar(255) DEFAULT NULL,
  `UniversityID` varchar(255) DEFAULT NULL,
  `NationalID` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `Major` varchar(255) DEFAULT NULL,
  `GPA` varchar(255) DEFAULT NULL,
  `Grade` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `RegisteredHours` varchar(255) DEFAULT NULL,
  `RegisteredCourses` varchar(255) DEFAULT NULL,
  `RemainingHours` varchar(255) DEFAULT NULL,
  `RemainingCourses` varchar(255) DEFAULT NULL,
  `HonorGrade` varchar(255) DEFAULT NULL,
  `WorkSector` varchar(255) DEFAULT NULL,
  `EmploymentDate` varchar(255) DEFAULT NULL,
  `Employer` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `EmployerAddress` varchar(255) DEFAULT NULL,
  `CompanyContactNo` varchar(255) DEFAULT NULL,
  `EmployerEmail` varchar(255) DEFAULT NULL,
  `SupervisorName` varchar(255) DEFAULT NULL,
  `OtherWorks` varchar(255) DEFAULT NULL,
  `isLookingForAJob` varchar(255) DEFAULT NULL,
  `SocialMedia` varchar(255) DEFAULT NULL,
  `FamilyContactNo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `expectedgraduate`
--

INSERT INTO `expectedgraduate` (`username`, `password`, `college`, `yearExpectedGraduate`, `semesterExpectedGraduate`, `UniversityID`, `NationalID`, `Name`, `Nationality`, `Major`, `GPA`, `Grade`, `MobileNo`, `Email`, `RegisteredHours`, `RegisteredCourses`, `RemainingHours`, `RemainingCourses`, `HonorGrade`, `WorkSector`, `EmploymentDate`, `Employer`, `Department`, `EmployerAddress`, `CompanyContactNo`, `EmployerEmail`, `SupervisorName`, `OtherWorks`, `isLookingForAJob`, `SocialMedia`, `FamilyContactNo`) VALUES
('v1', '123', 'كلية علـوم وهندسـة الحاسب الألي', '1441', 'الفصل الثاني', 'fdd', '4324', '5445', 'rt', 'علوم الحاسب', 'rt', 'جيد جدا مرتفع', 'fdfd', 'a@gmail.com', 'tre', 'trter', 'tr', 't', 'مرتبة الشرف الأولى', 'الخاص', '2022-05-03', 'gf', 'gf', 'fd', 'gf', 'y@gm.com', 'g', 'gf', 'g', 'g', 'fd');

-- --------------------------------------------------------

--
-- Table structure for table `jobopportunity`
--

CREATE TABLE `jobopportunity` (
  `dateannounced` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `jobnumber` varchar(255) DEFAULT NULL,
  `jobname` varchar(255) DEFAULT NULL,
  `jobdescription` varchar(255) DEFAULT NULL,
  `jobrequirements` varchar(255) DEFAULT NULL,
  `jobskillsrequirements` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `requireddocuments` varchar(255) DEFAULT NULL,
  `deadlinedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jobopportunity`
--

INSERT INTO `jobopportunity` (`dateannounced`, `jobnumber`, `jobname`, `jobdescription`, `jobrequirements`, `jobskillsrequirements`, `contactnumber`, `email`, `requireddocuments`, `deadlinedate`) VALUES
('2022-05-25 00:26:04', '1', 'مطور ويب', 'مطور المواقع أن يكون لديه خبرة كبيرة في التعامل مع لغات البرمجة المخصصة لتطوير المواقع والواجهات ومن أشهرها HTML 5 و PHP  و ASP.Net و Java.Script', 'خبرة في مجال تطوير الويب من 3 سنين الى 5\r\n\r\nاللغات المطلوبة :\r\nhtml \r\ncss\r\njs\r\nphp\r\nASP.Net', '1- إعداد وتجهيز خطط وخرائط البرمجة.\r\n2- كتابة الأكواد البرمجية اللازمة لتشغيل الموقع بالشكل المطلوب.\r\n', '0551233222', 'a@gmail.com', '1-صورة من الهوية الوطنية \r\n2- وثيقة التخرج\r\n3- السيرة الذاتية', '2022-09-02'),
('2022-05-25 01:56:31', '2', 'مطور اندرويد', 'تصميم وبناء تطبيقات متقدمة لمنصة أندرويد وتطوير نظام العمل.\r\n\r\n', 'الالمام ببرامج التطوير وتصميم واجهات المستخدم.\r\n\r\nالالمام باللغات البرمجية و اجادة التعامل مع الاتي: ( /C++/Android java /Github (SQL databases\r\n\r\nالقدرة على العمل مع فريق.\r\n', 'خبرة عملية لا تقل عن 3-5 سنوات في مجال البرمجة وتطوير الاندرويد', '055555522', 'mmm@gmail.com', '1-صورة من الهوية الوطنية 2- وثيقة التخرج 3- السيرة الذاتية', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `survey_emp_graduate`
--

CREATE TABLE `survey_emp_graduate` (
  `q1` int DEFAULT NULL,
  `q2` int DEFAULT NULL,
  `q3` int DEFAULT NULL,
  `q4` int DEFAULT NULL,
  `q5` int DEFAULT NULL,
  `q6` int DEFAULT NULL,
  `q7` int DEFAULT NULL,
  `q8` int DEFAULT NULL,
  `q9` int DEFAULT NULL,
  `q10` int DEFAULT NULL,
  `q11` int DEFAULT NULL,
  `q12` int DEFAULT NULL,
  `q13` int DEFAULT NULL,
  `q14` int DEFAULT NULL,
  `q15` int DEFAULT NULL,
  `q16` int DEFAULT NULL,
  `q17` int DEFAULT NULL,
  `q18` int DEFAULT NULL,
  `q19` int DEFAULT NULL,
  `q20` int DEFAULT NULL,
  `q21` int DEFAULT NULL,
  `q22` int DEFAULT NULL,
  `average` int DEFAULT NULL,
  `DateAndTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `companyName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `survey_emp_graduate`
--

INSERT INTO `survey_emp_graduate` (`q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `average`, `DateAndTime`, `companyName`) VALUES
(5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2, 2, 2, 2, 2, 2, 2, 2, 4, '2022-05-27 01:01:15', 'stc');

-- --------------------------------------------------------

--
-- Table structure for table `survey_graduates`
--

CREATE TABLE `survey_graduates` (
  `q1` int DEFAULT NULL,
  `q2` int DEFAULT NULL,
  `q3` int DEFAULT NULL,
  `q4` int DEFAULT NULL,
  `q5` int DEFAULT NULL,
  `q6` int DEFAULT NULL,
  `q7` int DEFAULT NULL,
  `q8` int DEFAULT NULL,
  `q9` int DEFAULT NULL,
  `q10` int DEFAULT NULL,
  `q11` int DEFAULT NULL,
  `q12` int DEFAULT NULL,
  `q13` int DEFAULT NULL,
  `q14` int DEFAULT NULL,
  `q15` int DEFAULT NULL,
  `q16` int DEFAULT NULL,
  `q17` int DEFAULT NULL,
  `q18` int DEFAULT NULL,
  `q19` int DEFAULT NULL,
  `q20` int DEFAULT NULL,
  `q21` int DEFAULT NULL,
  `q22` int DEFAULT NULL,
  `q23` int DEFAULT NULL,
  `q24` int DEFAULT NULL,
  `q25` int DEFAULT NULL,
  `q26` int DEFAULT NULL,
  `q27` int DEFAULT NULL,
  `q28` int DEFAULT NULL,
  `q29` int DEFAULT NULL,
  `q30` int DEFAULT NULL,
  `q31` int DEFAULT NULL,
  `average` int DEFAULT NULL,
  `DateAndTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `NationalID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `survey_graduates`
--

INSERT INTO `survey_graduates` (`q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `average`, `DateAndTime`, `NationalID`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-05-20 18:38:09', '111'),
(5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '2022-05-20 18:43:05', '111'),
(5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '2022-05-20 18:44:17', '111'),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2022-05-20 18:47:21', '1122233'),
(5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '2022-05-20 19:03:57', '111'),
(3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2022-05-20 19:05:35', '1122233');

-- --------------------------------------------------------

--
-- Table structure for table `survey_reality_programs`
--

CREATE TABLE `survey_reality_programs` (
  `q1` int DEFAULT NULL,
  `q2` int DEFAULT NULL,
  `q3` int DEFAULT NULL,
  `q4` int DEFAULT NULL,
  `q5` int DEFAULT NULL,
  `q6` int DEFAULT NULL,
  `q7` int DEFAULT NULL,
  `q8` int DEFAULT NULL,
  `q9` int DEFAULT NULL,
  `q10` int DEFAULT NULL,
  `q11` int DEFAULT NULL,
  `q12` int DEFAULT NULL,
  `q13` int DEFAULT NULL,
  `q14` int DEFAULT NULL,
  `q15` int DEFAULT NULL,
  `q16` int DEFAULT NULL,
  `q17` int DEFAULT NULL,
  `q18` int DEFAULT NULL,
  `q19` int DEFAULT NULL,
  `q20` int DEFAULT NULL,
  `q21` int DEFAULT NULL,
  `average` int DEFAULT NULL,
  `DateAndTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `companyName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `survey_reality_programs`
--

INSERT INTO `survey_reality_programs` (`q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `average`, `DateAndTime`, `companyName`) VALUES
(4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2022-05-27 00:39:59', 'stc'),
(3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, '2022-05-27 00:59:54', 'stc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`NationalID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyName`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD KEY `NationalID` (`NationalID`);

--
-- Indexes for table `expectedgraduate`
--
ALTER TABLE `expectedgraduate`
  ADD PRIMARY KEY (`NationalID`);

--
-- Indexes for table `survey_emp_graduate`
--
ALTER TABLE `survey_emp_graduate`
  ADD KEY `companyName` (`companyName`);

--
-- Indexes for table `survey_graduates`
--
ALTER TABLE `survey_graduates`
  ADD KEY `NationalID` (`NationalID`);

--
-- Indexes for table `survey_reality_programs`
--
ALTER TABLE `survey_reality_programs`
  ADD KEY `companyName` (`companyName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`NationalID`) REFERENCES `alumni` (`NationalID`);

--
-- Constraints for table `survey_emp_graduate`
--
ALTER TABLE `survey_emp_graduate`
  ADD CONSTRAINT `survey_emp_graduate_ibfk_1` FOREIGN KEY (`companyName`) REFERENCES `company` (`companyName`);

--
-- Constraints for table `survey_graduates`
--
ALTER TABLE `survey_graduates`
  ADD CONSTRAINT `survey_graduates_ibfk_1` FOREIGN KEY (`NationalID`) REFERENCES `alumni` (`NationalID`);

--
-- Constraints for table `survey_reality_programs`
--
ALTER TABLE `survey_reality_programs`
  ADD CONSTRAINT `survey_reality_programs_ibfk_1` FOREIGN KEY (`companyName`) REFERENCES `company` (`companyName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
