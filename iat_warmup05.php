<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IAT System</title>
</head>
<style>
body {
	background-color:#000000;
}

div#IAT_area {
	width:800px;
	height:600px;
	position:absolute;
	top:50%;
	left:50%;
	margin:-300px 0 0 -400px;
}

div#top {
	margin-top:100px;
}

span#topleft {
	padding-left:100px;
	color:#00FF00;
	font-size:200%;
}
span#topright {
	position:absolute;
	right:10px;
	padding-right:100px;
	color:#00FF00;
	font-size:200%;
}

div#bottom {
	margin-top:10px;
}

span#bottomleft {
	padding-left:100px;
	color:#FFFFFF;
	font-size:200%;
}
span#bottomright {
	position:absolute;
	right:10px;
	padding-right:100px;
	color:#FFFFFF;
	font-size:200%;
}
div#stimulus {
	margin-top:180px;
	color:#00FF00;
	font-size:250%;
}

div#errMsg {
	margin-top:10px;
	color:#FF0000;
	font-size:200%;
	font-weight:bold;
}
div#showtime {
	color:#FFFFFF;
}
</style>
<script type="text/javascript" src="cookie.js"></script>
<script type="text/javascript"> 
function chkBrowse(){
	//制訂browser物件
	var browser = {
		version: parseInt(window.navigator.appVersion),
		isFF: (window.navigator.appName.indexOf("Netscape") != -1),
		isIE: (window.navigator.appName.indexOf("Microsoft") != -1),
		st: document.documentElement.scrollTop|| document.body.scrollTop,
		cw: document.documentElement.clientWidth || document.body.clientWidth,
		ch: document.documentElement.clientHeight|| document.body.clientHeight
	};
	//若非IE瀏覽器，則執行fullscreen放大至最大
	if(browser.isIE == false){
		fullscreen();
	}
	
}

function fullscreen() { 
	window.moveTo(0,0);
	window.resizeTo(screen.availWidth, screen.availHeight); 
}



//產生隨機號碼函式
function random_num(n) {
	if(navigator.appVersion.charAt(0) <=2 && navigator.appName.charAt(0) == "N") 
	{
		t = new Date();
		t = t.getTime(); t += ""; t = t.substring(t.length-3,t.length); t = eval(t)/1000;
		t = Math.floor(t*n);
		return t;
	}else 
	{
		t = Math.floor(Math.random()*n);
		return t;
	}
} 

var itemSwitch = true;
var iatItem = ['女人','女孩','妻子','女兒','母親','男人','男孩','丈夫','兒子','父親'];
var iatResponse = ['l','l','l','l','l','r','r','r','r','r'];
var iatItem2 = ['歷史','文學','美術','英文','音樂','化學','物理','生物','天文','工程'];
var iatResponse2 = ['l','l','l','l','l','r','r','r','r','r'];
var lastItemNum, startTime;		//宣告儲存上次亂數值、計時起始時間
var maxTrialnum = 14;							//字詞最多出現次數
var count_i = 1;							//記錄次數起始值為1
var remind = true;
var wrongSymbol = false;					//宣告錯誤標記為false

function nextItem(){
	
	if (count_i <= maxTrialnum){
		var maxItem = iatItem.length;
		var itemNum = random_num(maxItem);
	
		//檢查是否有與上個取得的亂數值相同,強制至不相同為止
		while (itemNum == lastItemNum){
			itemNum = random_num(maxItem);
		}
	
		//紀錄本次取得的亂數值
		lastItemNum = itemNum;
	
		//置換新詞、隱藏錯誤記號、重設錯誤標記為false、紀錄開始時間
		if(itemSwitch){
			document.getElementById('stimulus').style.color = '#00FF00';
			document.getElementById('stimulus').innerHTML = iatItem[itemNum];
		}else{
			document.getElementById('stimulus').style.color = '#FFFFFF';
			document.getElementById('stimulus').innerHTML = iatItem2[itemNum];
		}
		document.getElementById('errMsg').style.display = 'none';
		wrongSymbol = false;
		setStartTime();
		count_i++;
	}else{
		location.href = 'iat_warmupEnd.php';
	}
}

//檢查受試者回覆的答案，正確回傳True錯誤回傳False，其餘案件傳回void
function chkResponse (ItemNum, cKeyCode) {
	//轉換keycode
	if (cKeyCode == 69) {
		var reponseKey = 'l';
	}else if (cKeyCode == 73) {
		var reponseKey = 'r';
	}else{
		var reponseKey = 'n'
	}
	
	//依照itemSwitch檢查不同的iatResponse
	if(itemSwitch){
		if (iatResponse[lastItemNum] == reponseKey) {
			return true;
		}else if (reponseKey == 'n'){
			return void(0);
		}else{
			return false;
		}
	}else{
		if (iatResponse2[lastItemNum] == reponseKey) {
			return true;
		}else if (reponseKey == 'n'){
			return void(0);
		}else{
			return false;
		}
	}
}

function checkKeyEvent(ee)
{
     var e = ee ? ee : window.event;
	 
     if(e.keyCode == 116)
	 {
     	//禁止 F5 的重整 
     	if(e.preventdefault)
		{
     		e.preventdefault(); //FireFox
     	}else{
			e.returnValue = false; //IE
     	}
     	e.keyCode = 0;
	 }else{
		//檢查remind標記是否為第一頁
	 	if (remind)	{
			if(e.keyCode == 32){
				nextItem();
				remind = false;
			}else{
				void(0);
			}
		}else{
	 		if (chkResponse(lastItemNum,e.keyCode)){
				//若上次的回答不是錯誤才紀錄時間，並重設錯誤標記
				if(!wrongSymbol){

					wrongSymbol = false;
				}
				
				//下個ITEM開始前更換Switch值
				if(itemSwitch){
					itemSwitch = false;	
				}else{
					itemSwitch = true;
				}
				nextItem();
			}else if (chkResponse(lastItemNum,e.keyCode)== false){
				
				document.getElementById('errMsg').style.display = 'block';
				wrongSymbol = true;
			}else{
				void(0);
			}
	 	}
	 }
}
     
function addEvent(obj, eventName, handler)
{ 
	if (obj.addEventListener) {
		obj.addEventListener(eventName, handler, false); //Mozilla 
	}else{ 
		obj.attachEvent("on" + eventName, handler); //IE
	}
}
//偵測鍵盤按鍵動作
addEvent(document, "keydown", checkKeyEvent);

function setStartTime(){
	var d1 = new Date();
	startTime = d1.getTime();
}

//計算結束時間，並傳回反應時間
function countResponseTime(){
	var d2 = new Date();
	var endTime = d2.getTime();
	var responseTime = endTime - startTime;
	
	return responseTime;
}

</script> 
<body onload="chkBrowse()" bgcolor="#000000" topmargin="0" leftmargin="0"
onkeydown="if (event.keyCode=='116') {event.keyCode=0;event.returnValue=false;} ">
<div id="IAT_area">
	<div id="top">
	<span id="topleft">女性</span><span id="topright">男性</span>
	</div>
    <div id="bottom">
	<span id="bottomleft">文科</span><span id="bottomright">理科</span>
	</div>
	<div id="stimulus" align="center"><font color="#FFFFFF">準備好請按下 空白鍵 開始</font></div>
	<div id="errMsg" align="center" style="display:none;">X</div>
	<div id="showtime"></div>
</div>
</body>
</html>
