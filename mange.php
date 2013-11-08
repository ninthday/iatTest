<?php
include_once('iat_ConnDB.php');

if(empty($_GET['clasid'])){
	$ClassID = 999;
}else{
	$ClassID = $_GET['clasid'];
}

if($ClassID == 999){
	$sqlSelStuStatus	= "SELECT * FROM `StudentProfile` ORDER BY `StuID`";
}else{
	$sqlSelStuStatus	= "SELECT * FROM `StudentProfile` WHERE `StuClass`='".$ClassID."' ORDER BY `StuID`";
}
$rsSelStuStatus	= mysql_query($sqlSelStuStatus,$iat_link);


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
        	<td><p align="left">
            <select name="clasid" size="1" onchange="javascript:window.location.href=(this.options[this.selectedIndex].value)">
            	<option value="mange.php">= 請選擇 ====</option>
                <option value="mange.php?clasid=102" <?php if($ClassID == 102) echo 'selected="selected"';?>>班級102</option>
                <option value="mange.php?clasid=113" <?php if($ClassID == 113) echo 'selected="selected"';?>>班級113</option>
            </select> 
            </p></td>
           </tr>
    </table>
    <table border="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#C8E3FF" width="92%" align="center" id="main_table_Outborder">
	<tr>
		<td>
			<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse: collapse">
          		<tr bordercolor="#C8E3FF" bgcolor="#C8E3FF"> 
    				<th width="8%" ><p>序號</p></th>
                    <th width="10%" ><p>學號</p></th>
    			    <th width="10%"><p>姓名</p></th>
    			    <th width="8%"><p>暖身</p></th>
    			    <th width="8%"><p>Block 1</p></th>
    			    <th width="8%"><p>Block 2</p></th>
    			    <th width="8%"><p>Block 3</p></th>
    			    <th width="8%"><p>Block 4</p></th>
    			    <th width="8%"><p>Block 5</p></th>
    			    <th width="8%"><p>Block 6</p></th>
                    <th width="8%"><p>Block 7</p></th>
                    <th width="8%"><p>問卷</p></th>
          		</tr>
                <?php
				$Count_i = 1;
                while($dataSelStuStatus = mysql_fetch_row($rsSelStuStatus)){
					$tr_bgColor	= ($Count_i%2)?"#FFFFFF":"#EEEBE8";		//列的背景顏色
				?>
				<tr bordercolor="#C8E3FF" bgcolor="<?php echo $tr_bgColor; ?>"> 
                	<td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $Count_i ?>.</p></td>
    				<td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelStuStatus[1] ?></p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><a href="userDetail.php?sid=<?php echo $dataSelStuStatus[1] ?>"><?php echo $dataSelStuStatus[2] ?></a></p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[9]) echo '<img src="images/ok.gif" />' ?></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[10]) echo '<img src="images/ok.gif" />' ?></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[11]) echo '<img src="images/ok.gif" />' ?></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[12]) echo '<img src="images/ok.gif" />' ?></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[13]) echo '<img src="images/ok.gif" />' ?></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[14]) echo '<img src="images/ok.gif" />' ?></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[15]) echo '<img src="images/ok.gif" />' ?></td>
                    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[16]) echo '<img src="images/ok.gif" />' ?></td>
                    <td style="border-bottom:1px dotted #d1d1d1" align="center"><?php if($dataSelStuStatus[17]) echo '<img src="images/ok.gif" />' ?></td>
				</tr>
                <?php
                	$Count_i++;
				}?>
			</table>
		</td>
	</tr>
	</table>
	<p>
	</p>
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
<?php mysql_close($iat_link);?>