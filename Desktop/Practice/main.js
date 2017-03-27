function RandomCoordinates(){
	var left = Math.floor(Math.random() * 70);
	var top = Math.floor(Math.random() * 70);
	var element = document.getElementById("block");
	var left = element.style.left = left + "%";
	var top = element.style.top = top + "%";
/*	document.getElementById("left").innerHTML = "MarginLeft =" + left;
	document.getElementById("top").innerHTML = "MarginTop =" + top;*/
	}
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
	return color;
	}
function colorcompare(hex1, hex2) {
    var r1 = parseInt(hex1.substring(1, 3), 16);
    var g1 = parseInt(hex1.substring(3, 5), 16);
    var b1 = parseInt(hex1.substring(6, 7), 16);

    var r2 = parseInt(hex2.substring(1, 3), 16);
    var g2 = parseInt(hex2.substring(3, 5), 16);
    var b2 = parseInt(hex2.substring(6, 7), 16);

    var r = 255 - Math.abs(r1 - r2);
    var g = 255 - Math.abs(g1 - g2);
    var b = 255 - Math.abs(b1 - b2);

    r /= 255;
    g /= 255;
    b /= 255;
    
    return (r + g + b) / 3;
}
function randomsize(){
	var width = Math.floor(Math.random() * 500) +20;
	var height = Math.floor(Math.random() * 500) +20;  
	document.getElementById("block").style.height = height +"px";
	document.getElementById("block").style.width = width + "px";
	}
function block(){
	var box = document.getElementById("block").style.backgroundColor = getRandomColor();
	return box;
	}
function backcolor(){
	var backcolor = document.getElementById("body").style.backgroundColor = getRandomColor();
	return backcolor;
	}
$(document).ready(function(){
	$(":button").click(function(){
		$.ajax({
			type: "POST",
			url: "data.php",
			data:{background:backcolor, box: box},
			success:function(res){
				$("#text").text(res);}
   		});
	});
});