<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
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

div#stimulus {
	margin-top:230px;
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



//產生隨機號碼
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

var iatItem = ['海洋','山脈','河川','峽谷','平原','橋樑','樓房','都市','公路','隧道'];
var iatResponse = ['l','l','l','l','l','r','r','r','r','r'];
var lastItemNum, startTime;		//宣告儲存上次亂數值、計時起始時間
var maxTrialnum = 20;							//字詞最多出現次數
var count_i = 1;							//記錄次數起始值為1
var remind = true;
var wrongSymbol = false;					//宣告錯誤標記為false

//宣告所有暫時儲存答案用的陣列
var trialnum = new Array();
var response = new Array();
var correct = new Array();
var stimulus = new Array();

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
	
		//至換新詞、隱藏錯誤記號、重設錯誤標記為false、紀錄開始時間
		document.getElementById('stimulus').innerHTML = iatItem[itemNum];
		document.getElementById('errMsg').style.display = 'none';
		wrongSymbol = false;
		setStartTime();
		count_i++;
	}else{
		//組合陣列成為字串
		save2Cookie(trialnum.join(),response.join(),correct.join(),stimulus.join());
		//document.getElementById('showtime').innerHTML = unescape(getCookies('b01Stimulus'));
		location.href = 'upload_data.php';
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
	
	if (iatResponse[lastItemNum] == reponseKey) {
		return true;
	}else if (reponseKey == 'n'){
		return void(0);
	}else{
		return false;
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
					//document.getElementById('showtime').innerHTML = countResponseTime();
					var arrayIndex = count_i-2;
					
					trialnum[arrayIndex] = count_i-1;
					response[arrayIndex] = countResponseTime();
					correct[arrayIndex] = 1;
					stimulus[arrayIndex] = iatItem[lastItemNum];
					wrongSymbol = false;
				}
				
				nextItem();
			}else if (chkResponse(lastItemNum,e.keyCode)== false){
				//若上次的回答不是錯誤才紀錄時間，但不重設錯誤標記
				if(!wrongSymbol){
					//document.getElementById('showtime').innerHTML = countResponseTime();
					var arrayIndex = count_i-2;
					
					trialnum[arrayIndex] = count_i-1;
					response[arrayIndex] = countResponseTime();
					correct[arrayIndex] = 0;
					stimulus[arrayIndex] = iatItem[lastItemNum];
				}
				
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

//將所有測驗陣列資料存入cookie，等待最後時一併上傳
function save2Cookie(strTrialnum, strResponse, strCorrect, strStimulus){
	//計算Cookie結束時間（明天）
	var tomorrowDate = new Date();
	tomorrowDate.setTime(tomorrowDate.getTime() + 60*60*24*1000*1);
	var expireDay = tomorrowDate.getFullYear().toString() + "/" + (tomorrowDate.getMonth() + 1).toString() + "/" + tomorrowDate.getDate();
	
	strBlock = strTrialnum + ';' + strResponse + ';' + strCorrect + ';' + strStimulus ;
	
	setCookies('block01',strBlock,expireDay);
	//setCookies('b01Trialnum',strTrialnum,expireDay);
	//setCookies('b01Response',strResponse,expireDay);
	//setCookies('b01Correct',strCorrect,expireDay);
	//setCookies('b01Stimulus',strStimulus,expireDay);
}

function delAllcookies(){
	delCookies('b01Trialnum');
	delCookies('b01Response');
	delCookies('b01Correct');
	delCookies('b01Stimulus');
}
</script> 
<body onload="chkBrowse()" bgcolor="#000000" topmargin="0" leftmargin="0"
onkeydown="if (event.keyCode=='116') {event.keyCode=0;event.returnValue=false;} ">
<div id="IAT_area">
	<div id="top">
	<span id="topleft">自然環境</span><span id="topright">經濟開發</span>
	</div>
	<div id="stimulus" align="center"><font color="#FFFFFF">準備好請按下 空白鍵 開始</font></div>
	<div id="errMsg" align="center" style="display:none;">X</div>
	<div id="showtime"></div>
</div>
</body>
</html>
