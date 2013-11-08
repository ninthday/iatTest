<?php 
session_start();	//啟動Session

include_once('iat_ConnDB.php');		//引入資料連結檔

$StuClass	= $_POST['Classroom'];
$StuID		= $_POST['StudentID'];
$StuName	= $_POST['StudentName'];
$StuSalary	= $_POST['Salary'];
$StuFCareer	= $_POST['FCareer'];
$StuMCareer	= $_POST['MCareer'];
$StuAddress	= $_POST['Address'];
$StuCourse	= $_POST['Course'];
$StuAge		= $_POST['StudentAge'];
$LogINTime	= date("Y-m-d H:i:s");
$UsefulHand	= $_POST['UsefulHand'];

$sqlInsertStuProfile	= "INSERT INTO `StudentProfile`(`StuClass`, `StuID`, `StuName`, `Salary`,`StuFCareer`, `StuMCareer`, `Address`, `Course`, `StuAge`, `LoginTime`, `UsefulHand`) VALUES('".$StuClass."',".$StuID.",'".$StuName."','".$StuSalary."','".$StuFCareer."','".$StuMCareer."','".$StuAddress."','".$StuCourse."',".$StuAge.",'".$LogINTime."','".$UsefulHand."')";
$rsInsertStuProfile		= mysql_query($sqlInsertStuProfile,$iat_link) or die('無法存入資料庫'.$sqlInsertStuProfile);

$_SESSION['StuID'] = $StuID;

header('Location: startpage.php');
?>