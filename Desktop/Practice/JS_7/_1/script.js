$( document ).ready(function replacing(){
	var everything = document.getElementsByTagName("body")[0].innerHTML;
	var replacing = everything.replace(/,/g, ", как говорится,").replace(/\./g,", как-то так.").replace(/\?/g,", не так ли?").replace(/!/g,", я так сказал!");
	document.getElementsByTagName("body")[0].innerHTML = replacing;
	//everything.innerHTML.replace(",",", как говорится,").replace(".","как-то так.").replace("?",", не так ли?").replace("!",", я так сказал!");
	});