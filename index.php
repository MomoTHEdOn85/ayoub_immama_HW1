<?php 
//None Class implemnentation file

echo '<h1 align="center">Student Database</h1>';

require_once("./Course.php");

require_once("./Program.php");

require_once("./Student.php");

require_once("./RegisteredStudent.php");

//Implementation 

$studentOne = new Student ('1','William', 'Smith', 'wsmith.jpg','1', '1', 'Male','2018-01-08', 'Null', 'No Classes' );
$studentTwo = new Student ('2','Gary', 'Lima', 'glima.jpg','1', '2', 'Male','2018-01-11', 'Null', 'No Classes' );
$studentThree = new Student ('3','Mike', 'Addison', 'maddison.jpg','2', '1', 'Male','2018-01-18', 'Null', 'No Classes' );
$studentFour = new Student ('4','David', 'Lynch', 'dlynch.jpg','2', '2', 'Male','2018-01-13', 'Null', 'No Classes' );

$studentRegOne = new RegisteredStudent ('1','William', 'Smith', 'wsmith.jpg','1', '1', 'Male','2018-01-08', 'Null', 'No Classes', 'Yes' );
$studentRegTwo = new RegisteredStudent ('2','Gary', 'Lima', 'glima.jpg','1', '2', 'Male','2018-01-11', 'Null', 'No Classes', 'Yes' );
$studentRegThree = new RegisteredStudent ('3','Mike', 'Addison', 'maddison.jpg','2', '1', 'Male','2018-01-18', 'Null', 'No Classes', 'Yes' );
$studentRegFour = new RegisteredStudent ('4','David', 'Lynch', 'dlynch.jpg','2', '2', 'Male','2018-01-13', 'Null', 'No Classes', 'Yes' );



$proOne = new Program ('1', 'IDP', 'Two Year Diploma Program in Interactivr Media.', '2 years');
$proTwo = new Program ('2', 'IMS', 'Third Year Specialization in Coding for Web.', '1 year');

$courseOne = new Course ('1', 'PHP', '6005', 'MVC PHP Frameworks.', '2018-01-17', 'NULL', 'Yes', 'Development');
$courseTwo = new Course ('2', 'MEAN Stack', '6000', 'Server Side JavaScript Course.', '2018-01-17', 'NULL', 'Yes', 'Development');
$courseThird = new Course ('3', 'JavaScript', '6001', 'Core Javascript Programming.', '2018-01-15', 'NULL', 'Yes', 'Development');
$courseFour = new Course ('4', 'UI Design', '6002', 'Desiging the UIs.', 'NULL', 'NULL', 'No', 'Design');



echo '<br><br>';
echo '<br><br>';

//Example One Sudent 
echo 'Name: '. $studentOne->getFname(). ' '.$studentOne->getLname(). '.';
echo '<br><br>';
echo 'Program: ' .$proOne->getName(). '('.$proOne->getDescrip().').';



 



 
 



?> 