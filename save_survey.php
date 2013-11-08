<?php
session_start();
include_once('iat_ConnDB.php');

$sqlUptSurvey	= "UPDATE `StudentProfile` SET `Survey`=1 WHERE `StuID`=".$_SESSION['StuID'];
$rsUptSurvey	= mysql_query($sqlUptSurvey,$iat_link);

for($count_a = 1; $count_a <= 5; $count_a++){
	$A[$count_a] = $_POST['A'.$count_a];
}

for($count_b = 1; $count_b <= 15; $count_b++){
	$B[$count_b] = $_POST['B'.$count_b];
}

$sqlInsertSurvey = "INSERT INTO `StudentSurvey` (`StuID`, `A1`, `A2`, `A3`, `A4`, `A5`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`)
VALUES(".$_SESSION['StuID'].",".$A[1].",".$A[2].",".$A[3].",".$A[4].",".$A[5].",".$B[1].",".$B[2].",".$B[3].",".$B[4].",".$B[5].",".$B[6].",".$B[7].",".$B[8].",".$B[9].",".$B[10].",".$B[11].",".$B[12].",".$B[13].",".$B[14].",".$B[15].")";
$rsInsertSurvey = mysql_query($sqlInsertSurvey,$iat_link);

mysql_close($iat_link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>IAT System</title>
<link rel="stylesheet" type="text/css" href="iat.css">
<!-- 偵測瀏覽器是否有支援Cookie -->
<SCRIPT language=JavaScript>
<!--
if(navigator.cookieEnabled == false)
{
alert("對不起 , 您的瀏覽器並不支援 Cookie 請開啟瀏覽器 Cookie 方能使用本服務 , 謝謝!!");
history.back();//這是返回上一頁
}
//-->
</SCRIPT>
<noscript>您的瀏覽器不支援 JavaScript</noscript>
</head>
<?php 
if($rsInsertSurvey){
?>
<script type="text/javascript">
	window.opener.location.reload();
	self.close();
</script>
<?php }?>
<body bgcolor="#DDDEE6" topmargin="0" leftmargin="0">
<div align="center">
<table width="900" border="1" style="border-collapse: collapse" bordercolor="#B4B4B4" id="tboutside">
<tr bgcolor="#FFFFFF">
	<td>
<table width="100%" cellpadding="0">
  <tr bgcolor="#333333">
  	<td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="54" colspan="2"><img src="images/banner.jpg" width="900" height="100"></td>
  </tr>
  <tr>
  	<td width="40%"><p align="left">&nbsp;</p></td>
    <td><p align="right">&nbsp;&nbsp;</p></td>
  </tr>
  <tr>
  	<td colspan="2"><hr size="1" color="#CCCCCC"></td>
  </tr>
</table>
<table width="100%" border="0">
<tr>
	<td valign="top">
    <table width="92%" border="0" align="center">
    	<tr>
        	<td><p align="left">&nbsp;</p></td>
           </tr>
    </table>
    <table border="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#666666" width="60%" align="center" id="main_table_Outborder">
	<tr>
		<td>
			<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse: collapse">
          		<tr bordercolor="#666666" bgcolor="#666666"> 
    				<th> 
      				<p align="left"><font color="#FFFFFF">Thank You!!</font></p> 
      				</th>
    			</tr>
				<tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td valign="middle" style="border-bottom:1px dotted #d1d1d1"><p>&nbsp;</p><p align="center"><font color="#FF0000">感謝您的填答！</font></p></td>
    			</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td valign="middle">
                    
                    <p align="right">&nbsp;</p></td>
    			</tr>
			</table>
		</td>
	</tr>
	</table>
	<p>	</p>	</td>
</tr>
</table>
<!-- 版權宣告區塊 -->
<table width="100%" border="0">
  <tr>
  	<td><hr size="1" color="#CCCCCC"></td>
  </tr>
  <tr>
  	<td background="images/foot_bg.gif" height="70">
<?php
require_once('foot_copyright.php');
?>
	</td>
  </tr>
  <tr bgcolor="#333333">
  	<td>&nbsp;</td>
  </tr>
</table>
	</td>
</tr>
</table>
</div>
</body>

</html>
