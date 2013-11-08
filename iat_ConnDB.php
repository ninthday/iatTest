<?php
$iat_link = mysql_connect("localhost", "iatDB", "iAt2011") or die("連線不成功" . mysql_error());
mysql_query("SET NAMES 'utf8'") or die("連線不成功");		//設定連線編碼

if(!@mysql_select_db("iat")){
	die(header('Location: err.php?errno=101'));	
} //End if
?>