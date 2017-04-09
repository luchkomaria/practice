$( document ).ready(function replacing(){
	$(":button").click(function(){
	var everything = document.getElementsByTagName("body")[0].innerHTML;
	var replacing = everything.replace(/,/g, ", как говорится,").replace(/\./g,", как-то так.").replace(/\?/g,", не так ли?").replace(/!/g,", я так сказал!");
	document.getElementsByTagName("body")[0].innerHTML = replacing;})
	});