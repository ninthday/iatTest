<?php
$StuID	= $_GET['sid'];

include_once('iat_ConnDB.php');

$sqlStudentDetail = "SELECT * FROM `StudentProfile` WHERE `StuID`=".$StuID;
$rsStudentDetail = mysql_query($sqlStudentDetail,$iat_link);
$dataStudentDetail = mysql_fetch_row($rsStudentDetail);

$sqlSelResponse = "SELECT * FROM `ResponseData` WHERE `SubjectsID`=".$StuID;
$rsSelResponse = mysql_query($sqlSelResponse,$iat_link);

$sqlCorrect = "SELECT `BlockArea`, `Correct`, COUNT(`RD_ID`) FROM `ResponseData`
WHERE `SubjectsID`=".$StuID."
GROUP BY `BlockArea`,`Correct`
HAVING `Correct`=1
ORDER BY `BlockArea`";
$rsCorrect = mysql_query($sqlCorrect,$iat_link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>IAT System User Detail</title>
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
        	<td><p align="left">&nbsp;</p></td>
           </tr>
    </table>
    <table border="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#C8E3FF" width="92%" align="center" id="main_table_Outborder">
	<tr>
		<td>
			<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse: collapse">
          		<tr bordercolor="#C8E3FF" bgcolor="#C8E3FF"> 
    				<th colspan="2"><p>學生基本資料</p></th>
    			</tr>
				<tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>班級：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[0] ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>學號姓名：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[2].'（'.$dataStudentDetail[1].'）'; ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>家庭收入：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[3] ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>父母職業：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p><font color="#009900">父親</font>：<?php echo $dataStudentDetail[4] ?>&nbsp;&nbsp;<font color="#FF3366">母親</font>：<?php echo $dataStudentDetail[5] ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>居住地址：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[6] ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>喜好學科：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[7] ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>年齡：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[8] ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>登入時間：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[18] ?></p></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p>慣用手別：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p>&nbsp;<?php echo $dataStudentDetail[19] ?></p></td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
    <p>&nbsp;</p>
    <table border="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#FFCCCC" width="92%" align="center" id="main_table_Outborder">
	<tr>
		<td>
			<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse: collapse">
          		<tr bordercolor="#FFCCCC" bgcolor="#FFCCCC"> 
    				<th colspan="2"><p>學生填答正確率</p></th>
    			</tr>
                <?php
                $Total['Block1']	= 20;
				$Total['Block2']	= 20;
				$Total['Block3']	= 15;
				$Total['Block4']	= 45;
				$Total['Block5']	= 40;
				$Total['Block6']	= 15;
				$Total['Block7']	= 45;
				
				while($dataCorrect = mysql_fetch_row($rsCorrect)){?>
				<tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td width="30%" style="border-bottom:1px dotted #d1d1d1" align="right"><p><?php echo $dataCorrect[0] ?>：</p></td>
    			    <td width="70%" style="border-bottom:1px dotted #d1d1d1" align="left"><p><?php echo round(($dataCorrect[2]/$Total[$dataCorrect[0]])*100)  ?>%&nbsp;<font color="#999999">（Calculate:&nbsp;<?php echo $dataCorrect[2].'/'.$Total[$dataCorrect[0]]  ?>）</font></p></td>
				</tr>
                <?php }?>
			</table>
		</td>
	</tr>
	</table>
    <p>&nbsp;</p>
    <table border="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#666666" width="92%" align="center" id="main_table_Outborder">
	<tr>
		<td>
			<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse: collapse">
          		<tr bordercolor="#666666" bgcolor="#666666"> 
    				<th colspan="8"> 
      				<p align="left"><font color="#FFFFFF">IAT回答結果</font></p>      				</th>
    			</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFCC"> 
    				<td style="border-bottom:1px dotted #d1d1d1" width="10%" align="center"><p>No.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="10%" align="center"><p>Subject ID</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="10%" align="center"><p>Block Area</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="15%" align="center"><p>Trial Number</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="15%" align="center"><p>Response (ms)</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="10%" align="center"><p>Correct</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="15%" align="center"><p>Stimulus</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="15%" align="center"><p>Trial Code</p></td>
				</tr>
                <?php
                $Count_i = 1;
				while($dataSelResponse = mysql_fetch_row($rsSelResponse)){
					$tr_bgColor	= ($Count_i%2)?"#FFFFFF":"#EEEBE8";		//列的背景顏色
				?>
				<tr bordercolor="#666666" bgcolor="<?php echo $tr_bgColor; ?>"> 
    				<td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $Count_i ?></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelResponse[1] ?></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelResponse[2] ?></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelResponse[3] ?></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelResponse[4] ?></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelResponse[5] ?></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelResponse[6] ?></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" align="center"><p><?php echo $dataSelResponse[7] ?></p></td>
				</tr>
                <?php
                $Count_i++;
				}
				?>
			</table>
		</td>
	</tr>
	</table>
	<p>	</p>
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
