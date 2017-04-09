function move(){

}
$("#start").bind("click", function snake(){
var snake = document.getElementsByClassName("field")[0];
var snakelength = 10;
for(var i = 0; i<40; i++){
snake.getElementsByClassName("row")[i].style.backgroundColor = "black";
snake.getElementsByClassName("row")[i-10].style.backgroundColor = "white";
}
})