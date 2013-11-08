<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>IAT System</title>
<link rel="stylesheet" type="text/css" href="iat.css">

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
        	<td><p align="left">請繼續填寫下列題目：</p></td>
           </tr>
    </table>
    <form name="frmAfteriat_survey" id="frmAfteriat_survey" method="post" action="save_survey.php" onsubmit="return FormCheck();">
    <table border="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#666666" width="92%" align="center" id="main_table_Outborder">
	<tr>
		<td>
			<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" style="border-collapse: collapse">
          		<tr bordercolor="#666666" bgcolor="#666666"> 
    				<th> 
      				<p><font color="#FFFFFF">題號</font></p></th>
    			    <th><p><font color="#FFFFFF">題目</font></p></th>
          		    <th><p><font color="#FFFFFF">非常不<br />願意</font></p></th>
          		    <th colspan="3"><p><font color="#FFFFFF">&lt;-----------&gt;</font></p></th>
          		    <th><p><font color="#FFFFFF">非常願意</font></p></th>
          		</tr>
				<tr bordercolor="#666666" bgcolor="#FFFFFF"> 
    				<td colspan="2" style="border-bottom:1px dotted #d1d1d1"><p align="left"><strong>你願不願意為了拯救地球免於溫室效應的危害實行節能減碳的生活</strong></p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"></td>
				    <td style="border-bottom:1px dotted #d1d1d1"></td>
				    <td style="border-bottom:1px dotted #d1d1d1"></td>
				    <td style="border-bottom:1px dotted #d1d1d1"></td>
				    <td style="border-bottom:1px dotted #d1d1d1"></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1" width="5%"><p align="right">1.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1" width="70%"><p align="left">少吹冷氣</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center" width="5%"><input type="radio" name="A1" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center" width="5%"><input type="radio" name="A1" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center" width="5%"><input type="radio" name="A1" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center" width="5%"><input type="radio" name="A1" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center" width="5%"><input type="radio" name="A1" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">2.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">少吃肉類食品</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A2" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A2" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A2" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A2" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A2" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">3.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">減少乘坐汽車</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A3" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A3" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A3" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A3" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A3" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">4.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">減少乘坐電梯</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A4" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A4" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A4" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A4" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A4" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">5.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">對政府破壞環境的重大工程案投下反對票</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A5" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A5" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A5" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A5" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="A5" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#666666"> 
    				<th width="5%"> 
      				<p><font color="#FFFFFF">題號</font></p></th>
    			    <th width="70%"><p><font color="#FFFFFF">題目</font></p></th>
          		    <th width="5%"><p><font color="#FFFFFF">非常不<br />贊同</font></p></th>
          		    <th width="5%"><p><font color="#FFFFFF">稍微不<br />贊同</font></p></th>
          		    <th width="5%"><p><font color="#FFFFFF">沒意見</font></p></th>
          		    <th width="5%"><p><font color="#FFFFFF">稍微贊同</font></p></th>
          		    <th width="5%"><p><font color="#FFFFFF">非常贊同</font></p></th>
          		</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">1.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">我們正趨近地球能承受人類數量的極限</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B1" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B1" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B1" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B1" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B1" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">2.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">人類有權改變自然環境以符合他們的需求</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B2" value="5" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B2" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B2" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B2" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B2" value="1" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">3.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">當人類干擾大自然時，經常導致災難性的後果</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B3" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B3" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B3" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B3" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B3" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">4.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">人類的智慧將確保我們不會把地球變得不能居住</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B4" value="5" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B4" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B4" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B4" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B4" value="1" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">5.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">人類正嚴重地虐待環境</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B5" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B5" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B5" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B5" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B5" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">6.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">只要我們能學會如何開發，地球其實有許多的自然資源</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B6" value="5" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B6" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B6" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B6" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B6" value="1" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">7.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">植物和動物都有與人類同樣的生存權利</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B7" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B7" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B7" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B7" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B7" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">8.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">大自然的平衡強到足以應付現代工業國家的影響</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B8" value="5" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B8" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B8" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B8" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B8" value="1" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">9.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">儘管我們人類有特殊的能力，但仍受到大自然法則的影響</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B9" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B9" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B9" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B9" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B9" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">10.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">人類目前面對的所謂「生態危機」已被過度誇大</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B10" value="5" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B10" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B10" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B10" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B10" value="1" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">11.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">地球就像艘具有限空間和資源的太空船</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B11" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B11" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B11" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B11" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B11" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">12.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">人類本應統治整個自然界</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B12" value="5" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B12" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B12" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B12" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B12" value="1" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">13.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">大自然的平衡非常精巧且容易傾覆</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B13" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B13" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B13" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B13" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B13" value="5" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">14.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">人類最終將充分了解大自然如何運作並能夠掌控它</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B14" value="5" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B14" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B14" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B14" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B14" value="1" /></td>
				</tr>
                <tr bordercolor="#666666" bgcolor="#FFFFFF" onMouseOver ="this.style.backgroundColor='#FFE8E8'" onMouseOut ="this.style.backgroundColor='#FFFFFF'"> 
    				<td style="border-bottom:1px dotted #d1d1d1"><p align="right">15.</p></td>
    			    <td style="border-bottom:1px dotted #d1d1d1"><p align="left">假使一切都依現況繼續發展下去，我們不久將經歷一場大的生態浩劫</p></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B15" value="1" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B15" value="2" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B15" value="3" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B15" value="4" /></td>
				    <td style="border-bottom:1px dotted #d1d1d1" align="center"><input type="radio" name="B15" value="5" /></td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
    <p>&nbsp;</p>
    <p align="center"><input type="submit" value="填好送出" />&nbsp;<input type="reset" value="清除重填" /></p>
    </form>
	<p></p>
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
<script language="JavaScript" type="text/javascript">
function FormCheck() 
{
  if(!ARadioCheck()) return false;
  return BRadioCheck();
}
function ARadioCheck(){
  for(var i=1; i<=5; i++){
    eval("var obj = document.frmAfteriat_survey.A" + i);
    var count_a = 0;
    for(var j=0; j<obj.length;j++){
      if(obj[j].checked){
	count_a++;
      }
    }
    
    if(count_a == 0){
      alert('第一題組，第 '+ i + ' 題，尚有選項未選擇！');
      obj[2].focus();
      return false;
      break;
    }
  }
  return true;
}
function BRadioCheck(){
  for(var i=1; i<=15; i++){
    eval("var obj = document.frmAfteriat_survey.B" + i);
    var count_b = 0;
    for(var j=0; j<obj.length;j++){
      if(obj[j].checked){
	count_b++;
      }
    }
    
    if(count_b == 0){
      alert('第二題組，第 '+ i + ' 題，尚有選項未選擇！');
      obj[2].focus();
      return false;
    }
  }
}
</script>
</html>