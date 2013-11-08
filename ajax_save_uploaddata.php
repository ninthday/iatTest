<?php
session_start();
include_once('iat_ConnDB.php');

$StuID	= $_SESSION['StuID'];
$BlockArea	= $_POST['BlockArea'];
$StatusMark = 'Stu'.$BlockArea;

$strBlock	= explode(';',$_POST['strBlock']);

$Trialnum	= explode(',',$strBlock[0]);
$Response	= explode(',',$strBlock[1]);
$Correct	= explode(',',$strBlock[2]);
$Stimulus	= explode(',',$strBlock[3]);
$Trialcode	= explode(',',$strBlock[4]);

$countArray = count($Trialnum);
for ($i=0; $i<$countArray; $i++){
	if($i == 0){
		$strInsert = "(".$StuID.",'".$BlockArea."',".$Trialnum[$i].",".$Response[$i].",".$Correct[$i].",'".$Stimulus[$i]."','".$Trialcode[$i]."')";
	}else{
		$strInsert .= ", (".$StuID.",'".$BlockArea."',".$Trialnum[$i].",".$Response[$i].",".$Correct[$i].",'".$Stimulus[$i]."','".$Trialcode[$i]."')";
	}//End IF
}//End for	
//echo $strInsert.'<br>';

$sqlIATInsert = "INSERT INTO `iat`.`ResponseData` (
`SubjectsID` ,
`BlockArea` ,
`Trialnum` ,
`Response` ,
`Correct` ,
`Stimulus`,
`Trialcode`
) VALUES ".$strInsert;
$rsIATInsert = mysql_query($sqlIATInsert,$iat_link);

$sqlUptBlock	= "UPDATE `StudentProfile` SET `".$StatusMark."`=1 WHERE `StuID`=".$StuID;
$rsUptBlock	= mysql_query($sqlUptBlock,$iat_link);

if($rsIATInsert){
	return true;
}else{
	return false;
}

mysql_close($iat_link);
?>