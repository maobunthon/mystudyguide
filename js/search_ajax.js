function search_me(text,type,responseId){
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {  // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById(responseId).innerHTML=xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET","include/search_result.php?k="+text+"&type="+type,true);
	xmlhttp.send();
}
function search_sub(text,type,responseId){
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {  // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById(responseId).innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","../include/search_result.php?k="+text+"&type="+type,true);
	xmlhttp.send();
}
function update_sub(id,filed,st,type,responseId){
	var ans = confirm('Are you sure to update this field?');
	if(ans){
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {  // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById(responseId).innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","../include/search_result.php?id="+id+"&f="+filed+"&to="+st+"&type="+type,true);
		xmlhttp.send();
	}
}
function update(id,filed,st,type,responseId){
	var ans = confirm('Are you sure to update this field?');
	if(ans){
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {  // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById(responseId).innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","include/search_result.php?id="+id+"&f="+filed+"&to="+st+"&type="+type,true);
		xmlhttp.send();
	}
}