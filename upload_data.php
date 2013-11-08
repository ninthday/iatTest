<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<script type="text/javascript" src="cookie.js"></script>
<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript">
function upload_all1(){
	document.frmUploadData01.strBlock.value = unescape(unescape(getCookies('block01')));
	//document.frmUploadData.Response.value = unescape(unescape(getCookies('b01Response')));
	//document.frmUploadData.Correct.value = unescape(unescape(getCookies('b01Correct')));
	//document.frmUploadData.Stimulus.value = unescape(unescape(getCookies('b01Stimulus')));
	
	new Ajax.Request("ajax_save_uploaddata.php",{method: "post",
			parameters:Form.serialize("frmUploadData01"),
			onComplete: displayUploadStatus }
			);
	
}
function upload_all2(){
	document.frmUploadData02.strBlock.value = unescape(unescape(getCookies('block02')));
	//document.frmUploadData.Trialnum.value = unescape(unescape(getCookies('b02Trialnum')));
	//document.frmUploadData.Response.value = unescape(unescape(getCookies('b02Response')));
	//document.frmUploadData.Correct.value = unescape(unescape(getCookies('b02Correct')));
	//document.frmUploadData.Stimulus.value = unescape(unescape(getCookies('b02Stimulus')));
	
	new Ajax.Request("ajax_save_uploaddata.php",{method: "post",
			parameters:Form.serialize("frmUploadData02"),
			onComplete: displayUploadStatus }
			);
	
}

function upload_all3(){
	document.frmUploadData03.strBlock.value = unescape(unescape(getCookies('block03')));
	//document.frmUploadData.Trialnum.value = unescape(unescape(getCookies('b03Trialnum')));
	//document.frmUploadData.Response.value = unescape(unescape(getCookies('b03Response')));
	//document.frmUploadData.Correct.value = unescape(unescape(getCookies('b03Correct')));
	//document.frmUploadData.Stimulus.value = unescape(unescape(getCookies('b03Stimulus')));
	
	new Ajax.Request("ajax_save_uploaddata.php",{method: "post",
			parameters:Form.serialize("frmUploadData03"),
			onComplete: displayUploadStatus }
			);
	
}

function upload_all4(){
	document.frmUploadData04.strBlock.value = unescape(unescape(getCookies('block04')));
	//document.frmUploadData.Trialnum.value = unescape(unescape(getCookies('b04Trialnum')));
	//document.frmUploadData.Response.value = unescape(unescape(getCookies('b04Response')));
	//document.frmUploadData.Correct.value = unescape(unescape(getCookies('b04Correct')));
	//document.frmUploadData.Stimulus.value = unescape(unescape(getCookies('b04Stimulus')));
	
	new Ajax.Request("ajax_save_uploaddata.php",{method: "post",
			parameters:Form.serialize("frmUploadData04"),
			onComplete: displayUploadStatus }
			);
	
}

function upload_all5(){
	document.frmUploadData05.strBlock.value = unescape(unescape(getCookies('block05')));
	//document.frmUploadData.Trialnum.value = unescape(unescape(getCookies('b05Trialnum')));
	//document.frmUploadData.Response.value = unescape(unescape(getCookies('b05Response')));
	//document.frmUploadData.Correct.value = unescape(unescape(getCookies('b05Correct')));
	//document.frmUploadData.Stimulus.value = unescape(unescape(getCookies('b05Stimulus')));
	
	new Ajax.Request("ajax_save_uploaddata.php",{method: "post",
			parameters:Form.serialize("frmUploadData05"),
			onComplete: displayUploadStatus }
			);
	
}

function upload_all6(){
	document.frmUploadData06.strBlock.value = unescape(unescape(getCookies('block06')));
	//document.frmUploadData.Trialnum.value = unescape(unescape(getCookies('b06Trialnum')));
	//document.frmUploadData.Response.value = unescape(unescape(getCookies('b06Response')));
	//document.frmUploadData.Correct.value = unescape(unescape(getCookies('b06Correct')));
	//document.frmUploadData.Stimulus.value = unescape(unescape(getCookies('b06Stimulus')));
	
	new Ajax.Request("ajax_save_uploaddata.php",{method: "post",
			parameters:Form.serialize("frmUploadData06"),
			onComplete: displayUploadStatus }
			);
	
}

function upload_all7(){
	document.frmUploadData07.strBlock.value = unescape(unescape(getCookies('block07')));
	//document.frmUploadData.Trialnum.value = unescape(unescape(getCookies('b07Trialnum')));
	//document.frmUploadData.Response.value = unescape(unescape(getCookies('b07Response')));
	//document.frmUploadData.Correct.value = unescape(unescape(getCookies('b07Correct')));
	//document.frmUploadData.Stimulus.value = unescape(unescape(getCookies('b07Stimulus')));
	
	new Ajax.Request("ajax_save_uploaddata.php",{method: "post",
			parameters:Form.serialize("frmUploadData07"),
			onComplete: displayUploadStatus }
			);
	
}

function displayUploadStatus(httpObj){
	$("result").innerHTML = httpObj.responseText;
}

function delAllcookies(){
	delCookies('b01Trialnum');
	delCookies('b01Response');
	delCookies('b01Correct');
	delCookies('b01Stimulus');
}
</script>
<body>
<form id="frmUploadData01" name="frmUploadData01" method="post" action="ajax_save_uploaddata.php">
    <input type="text" name="strBlock" value="" />
</form>
<form id="frmUploadData02" name="frmUploadData02" method="post" action="ajax_save_uploaddata.php">
    <input type="text" name="strBlock" value="" />
</form>
<form id="frmUploadData03" name="frmUploadData03" method="post" action="ajax_save_uploaddata.php">
    <input type="text" name="strBlock" value="" />
</form>
<form id="frmUploadData04" name="frmUploadData04" method="post" action="ajax_save_uploaddata.php">
    <input type="text" name="strBlock" value="" />
</form>
<form id="frmUploadData05" name="frmUploadData05" method="post" action="ajax_save_uploaddata.php">
    <input type="text" name="strBlock" value="" />
</form>
<form id="frmUploadData06" name="frmUploadData06" method="post" action="ajax_save_uploaddata.php">
    <input type="text" name="strBlock" value="" />
</form>
<form id="frmUploadData07" name="frmUploadData07" method="post" action="ajax_save_uploaddata.php">
    <input type="text" name="strBlock" value="" />
</form>
<input type="button" value="上傳資料B1" onclick="upload_all1()" />
<input type="button" value="上傳資料B2" onclick="upload_all2()" />
<input type="button" value="上傳資料B3" onclick="upload_all3()" />
<input type="button" value="上傳資料B4" onclick="upload_all4()" />
<input type="button" value="上傳資料B5" onclick="upload_all5()" />
<input type="button" value="上傳資料B6" onclick="upload_all6()" />
<input type="button" value="上傳資料B7" onclick="upload_all7()" />
<br />
<input type="button" value="Kill Cookie" onclick="delAllcookies()" />
<div id="result"><p></p></div>
</body>
</html>