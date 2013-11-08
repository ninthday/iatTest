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
  	<td width="40%"><p align="left"></p></td>
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
        	<td><p align="left"></p></td>
        </tr>
    </table>
    <p align="center">&nbsp;</p>
    <form name="frmLogin" method="post" action="save_profile.php">
    <table border="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#EEEBE8" width="500" align="center" id="main_table_Outborder">
	<tr>
		<td>
            <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse: collapse">
          		<tr bordercolor="#EEEBE8" bgcolor="#EEEBE8"> 
    				<th colspan="2"><p align="center">請完整輸入下面資料</p></th>
    			</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>班級：</p></td>
                    <td width="80%" align="left">
                    <input type="text" name="Classroom" size="20" />&nbsp;
                    <!--<select name="Classroom" size="1">
                    	<option value="">= 請選擇 =====</option>
                        <option value="102">102班</option>
                        <option value="113">113班</option>
                    </select>-->
                    </td>
				</tr>
				<tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>學號：</p></td>
                    <td width="80%" align="left"><input type="text" name="StudentID" size="20" />&nbsp;</td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>姓名：</p></td>
                    <td width="80%" align="left"><input type="text" name="StudentName" size="20" />&nbsp;</td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>家庭收入：</p></td>
                    <td width="80%" align="left">
                    <select name="Salary" size="1">
                    	<option value="">= 請選擇 ==========</option>
                    	<option value="35,000以下">35,000以下</option>
                        <option value="35,000～70,000">35,000～70,000</option>
                        <option value="70,000～105,000">70,000～105,000</option>
                        <option value="105,000以上">105,000以上</option>
                    </select>
                        &nbsp;</td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>父親職業：</p></td>
                    <td width="80%" align="left"><p><input type="text" name="FCareer" size="20" />&nbsp;</p></td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>母親職業：</p></td>
                    <td width="80%" align="left"><p><input type="text" name="MCareer" size="20" />&nbsp;</p></td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>居住地址：</p></td>
                    <td width="80%" align="left"><p><input type="text" name="Address" size="20" />&nbsp;（例如：宜蘭縣員山鄉）</p></td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>喜好學科：</p></td>
                    <td width="80%" align="left"><input type="text" name="Course" size="20" />&nbsp;</td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>年齡：</p></td>
                    <td width="80%" align="left"><input type="text" name="StudentAge" size="20" />&nbsp;</td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td width="20%" align="right"><p>慣用手別：</p></td>
                    <td width="80%" align="left"><p><label><input type="radio" name="UsefulHand" value="右手" />右手</label>&nbsp;<label><input type="radio" name="UsefulHand" value="左手" />左手</label></p></td>
				</tr>
                <tr bordercolor="#EEEBE8" bgcolor="#FFFFFF"> 
    				<td colspan="2" align="center"><input type="submit" value="送出儲存" /></td>
    			</tr>
			</table>
		</td>
	</tr>
	</table>
    </form>
    <p align="center">&nbsp;</p>
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