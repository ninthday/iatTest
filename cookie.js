function setCookies(name,value,edate,path,domain,secure){

	re=/^[a-zA-Z_]{1,}[0-9a-zA-Z_]{1,}$/;
	if (!re.test(name)){
		alert('Cookies Name 含有不合法字元');
		return false
	}

	var cookie_string=name+'='+escape(value);

	if (typeof edate!='undefined'){
    		var expires = new Date(edate);
		cookie_string+=';expires='+expires.toGMTString();
	}

	if (typeof path!='undefined'){
		cookie_string+=';path='+escape(path);
	}

	if (typeof domain!='undefined'){
		cookie_string+=';domain='+escape(domain);
	}

	if (typeof secure!='undefined'){
		cookie_string += "; secure";
	}

	document.cookie = cookie_string;
}

function delCookies(cookieName){
	var cookieDate=new Date();
	cookieDate.setTime(cookieDate.getTime()-1);
	document.cookie=cookieName+='=;expires='+ cookieDate.toGMTString();
}


function getCookies(cookieName){
	var d=document.cookie.replace(/\s/g,'');
	if (d.length>0){
		s=d.split(';');
		for (var i=0;i<s.length;i++){
			if (s[i].split('=')[0]==cookieName){
				return s[i].split('=')[1];
				break;
			}
		}
	}
	return null
}