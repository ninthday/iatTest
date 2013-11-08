<?php
session_start();
include_once('iat_ConnDB.php');

$sqlUptWarmup	= "UPDATE `StudentProfile` SET `WarmUp`=1 WHERE `StuID`=".$_SESSION['StuID'];
$rsUptWarmup	= mysql_query($sqlUptWarmup,$iat_link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IAT System</title>
</head>
<?php 
if($rsUptWarmup){
?>
<script type="text/javascript">
	window.opener.location.reload();
	self.close();
</script>
<?php }?>
<body>
</body>
</html>
<?php mysql_close($iat_link);?>