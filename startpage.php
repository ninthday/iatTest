<?php
session_start();	//啟動Session

include_once('iat_ConnDB.php');		//引入資料連結檔

if(!isset($_SESSION['StuID'])){
	header('Location: index.php');
}

$sqlChkWarmup = "SELECT `StuName`, `WarmUp` FROM `StudentProfile` WHERE `StuID`=".$_SESSION['StuID'];
$rsChkWarmup = mysql_query($sqlChkWarmup,$iat_link);
$dataChkWarmup = mysql_fetch_row($rsChkWarmup);

$StuName	= $dataChkWarmup[0];
$warmup		= $dataChkWarmup[1];

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
  	<td width="40%">&nbsp;</td>
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
      				<p align="left"><font color="#FFFFFF"><?php echo $StuName ?>（<?php echo $_SESSION['StuID'] ?>）</font>&nbsp;</p> 
      				</th>
    			</tr>
				<tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td style="border-bottom:1px dotted #d1d1d1">
                    <p align="left"><font color="#999999">說明：</font></p>
    				<p align="left"><font color="#999999">請先完成暖身測驗，再進行正式測驗～</font></p></td>
    			</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td>
                    <p align="center">&nbsp;</p>
                    <p align="center"><input type="button" name="warmup" value="暖身測驗" onclick="javascript:window.open('warmup_reminder.html','操作視窗','fullscreen=yes,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no')"  />&nbsp;</p>
                    <p align="center"><input type="button" name="iatTest" value="正式測驗" <?php if($warmup == 0) echo 'disabled="disabled"';?> onclick="javascript:window.open('iat_reminder.html','操作視窗','fullscreen=yes,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no')" />&nbsp;</p>
                    <p align="right">&nbsp;</p></td>
    			</tr>
			</table>
		</td>
	</tr>
	</table>
	<p><hr size="1" width="92%"></p>
	</td>
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